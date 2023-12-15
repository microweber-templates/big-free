<?php

namespace MicroweberPackages\Template\Big\tests\Browser;

use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverDimension;
use Illuminate\Support\Facades\Auth;
use Laravel\Dusk\Browser;
use MicroweberPackages\Content\Models\Content;
use MicroweberPackages\ContentField\Models\ContentField;
use MicroweberPackages\Export\SessionStepper;
use MicroweberPackages\Import\Import;
use MicroweberPackages\Menu\Models\Menu;
use MicroweberPackages\Option\Models\Option;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\User\Models\User;
use MicroweberPackages\Utils\Media\Thumbnailer;
use Tests\Browser\Components\AdminLogin;
use Tests\DuskTestCase;

class BigScreenshotLayoutsTest extends DuskTestCase
{
    public $template_name = 'big';

    public function bootTemplate()
    {
        if (defined('TEMPLATE_DIR') == false) {
            define('TEMPLATE_DIR', templates_path() . $this->template_name . DS);
        }

        app()->template_manager->boot_template();

        save_option('current_template', $this->template_name,'template');
    }

    public function testCreateFullScreenshot()
    {
        $this->bootTemplate();

        $tempaltePathMain = userfiles_path() . 'templates' . DS . $this->template_name;
        $sample = $tempaltePathMain . '/mw_default_content.zip';
        $sample = normalize_path($sample, false);

        if (!is_file($sample)) {
            $this->markTestSkipped('File not found for template test: ' . $sample);
        }

        // START BACKUP
        Option::truncate();
        Menu::truncate();
        Content::truncate();
        ContentField::truncate();
        $sessionId = SessionStepper::generateSessionId(0);
        $manager = new Import();
        $manager->setSessionId($sessionId);
        $manager->setFile($sample);
        $manager->setBatchImporting(false);
        $manager->setToDeleteOldContent(true);
        $manager->setToDeleteOldCssFiles(true);
        $manager->setOvewriteById(true);
        $importStatus = $manager->start();
        $this->assertTrue($importStatus['done']);
        clearcache();
        // END BACKUP

        $pageLinks = [];
        $getPages = Page::get();
        foreach ($getPages as $page) {
            $pageLinks[] = $page->url;
        }

        $this->browse(function (Browser $browser) use($tempaltePathMain,$pageLinks) {

            foreach ($pageLinks as $pageLink) {

                $browser->visit($pageLink);

                $body = $browser->driver->findElement(WebDriverBy::tagName('body'));
                if (!empty($body)) {

                    $browser->script("document.body.classList.add('js-dusk-browser-test')");

                    $currentSize = $body->getSize();
                    //set window to full height
                    $size = new WebDriverDimension(1300, $currentSize->getHeight());
                    $browser->driver->manage()->window()->setSize($size);
                }

                $browser->pause(5000);

                $browser->driver->takeScreenshot($tempaltePathMain . '/screenshots/'.$pageLink.'.jpg');
            }
        });


        $this->browse(function (Browser $browser) use($tempaltePathMain) {
            $browser->visit('/');
            $browser->resize(1360, 800);
            $browser->pause(5000);

            $screenshotFile = $tempaltePathMain . '/screenshot.jpg';
            $browser->driver->takeScreenshot($screenshotFile);

            $tn = new Thumbnailer($screenshotFile);
            $tn->createThumb(array('width' => 820, 'height'=>460), $screenshotFile);

        });

        $this->browse(function (Browser $browser) use($tempaltePathMain) {

            $browser->visit('/');

            $body = $browser->driver->findElement(WebDriverBy::tagName('body'));
            if (!empty($body)) {

                $browser->script("document.body.classList.add('js-dusk-browser-test')");

                $currentSize = $body->getSize();
                //set window to full height
                $size = new WebDriverDimension(1300, $currentSize->getHeight());
                $browser->driver->manage()->window()->setSize($size);
            }

            $browser->pause(5000);

            $browser->driver->takeScreenshot($tempaltePathMain . '/screenshot_large.jpg');
        });


    }

    public function testCreateModulesScreenshots()
    {
        $this->bootTemplate();
        $modules = get_modules('ui=1');
//        $modules = [
//          [
//              'module'=>'teamcard'
//          ]
//        ];

        $this->browse(function (Browser $browser) use($modules) {

            foreach($modules as $module) {

                $layouts = module_templates($module['module']);
                if (empty($layouts)) {
                    continue;
                }

                foreach ($layouts as $layout) {

                    $screenshotFile = $layout['filename'];
                    $screenshotFile = str_replace('.php', '.jpg', $screenshotFile);
                    $layout['screenshot_file'] = $screenshotFile;

                    $layoutName = $layout['layout_file'];
                    $layoutName = str_replace('.php', '', $layoutName);

//                    if (str_contains($layout['filename'], 'header') !== false) {
//                        $browser->resize(900, 600);
//                    } else if (strpos($layout['filename'], 'contact_form') !== false) {
//                        $browser->resize(480, 1200);
//                    } else {
//                        $browser->resize(1360, 800);
//                    }


                   // dump('/preview-skin?module='.$module['module'].'&skin=' . $layoutName . '&no_editmode=1');


                    try {
                        $browser->visit('/preview-skin?module='.$module['module'].'&skin=' . $layoutName . '&no_editmode=1');
                        $browser->waitFor('#preview-skin-file');
                        $browser->pause(1000);

                        $previewLayoutContentElement = $browser->element('#preview-skin-file .module');
                        $previewLayoutContentElement->takeElementScreenshot($layout['screenshot_file']);
                        $src = $layout['screenshot_file'];
                        $tn = new Thumbnailer($src);
                        $thumbOptions = array('height' => 640, 'width' => 480);
                        //$thumbOptions = array('height' => 240, 'width' => 320);
                       // $thumbOptions['crop'] = true;
                        $tn->createThumb($thumbOptions, $layout['screenshot_file']);


                    } catch (\Exception $e) {

                    }

                }
            }
        });

    }

    public function testCreateScreenshots()
    {
        $this->bootTemplate();
        $layouts = module_templates('layouts');

        $this->browse(function (Browser $browser) use($layouts) {

            foreach ($layouts as $layout) {

                if (!isset($layout['screenshot_file'])) {
                    continue;
                }

                $layoutName = $layout['layout_file'];
                $layoutName = str_replace('.php', '', $layoutName);

//                $skip = true;
//                if (strpos($layoutName, 'testimonials') !== false) {
//                    $skip = false;
//                }
//                if ($skip) {
//                    continue;
//                }

                if (strpos($layoutName, 'header') !== false) {
                    $browser->resize(1360, 600);
                }
                if (strpos($layoutName, 'pictures') !== false) {
                    $browser->resize(1360, 1100);
                }
                if (strpos($layoutName, 'footer') !== false) {
                    $browser->resize(1360, 600);
                }
                if (strpos($layoutName, 'animated') !== false) {
                    $browser->resize(1360, 600);
                }
                if (strpos($layoutName, 'content') !== false) {
                    $browser->resize(1360, 960);
                }
                if (strpos($layoutName, 'contacts') !== false) {
                    $browser->resize(1360, 1500);
                }

                try {
                    $browser->visit('/preview-layout?layout=' . $layoutName . '&no_editmode=1');
                    $browser->waitFor('#preview-layout-file');

                    if (strpos($layoutName, 'contacts') !== false) {
                        $browser->pause(1000);
                    }

//                    $previewPath = template_dir() . 'assets/layouts-preview/' . $layoutName;
//                    if (!is_dir($previewPath)) {
//                        mkdir_recursive($previewPath);
//                    }
//
//                    $previewLayoutContentElement = $browser->element('#preview-layout-file');
//                    $layoutHtml = $previewLayoutContentElement->getDomProperty('innerHTML');
//
//                    $dom = new \DOMDocument();
//                    $dom->strictErrorChecking = false;
//                    $dom->loadHTML($layoutHtml);
//                    $images = $dom->getElementsByTagName('img');
//                    foreach ($images as $image) {
//                        $src = $image->getAttribute('src');
//
//                        $isImage = false;
//                        if (strpos($src, 'thumbnails') !== false) {
//                            $isImage = true;
//                        }
//                        if (strpos($src, 'api/image-generate-tn') !== false) {
//                            $isImage = true;
//                        }
//
//                        if ($isImage) {
//                            $imageContent = file_get_contents($src);
//                            $newImageFile = $previewPath . '/' . basename($src);
//
//                            file_put_contents($newImageFile, $imageContent);
//
//                            $previewPathPublicUrl = template_url() . 'assets/layouts-preview/' . $layoutName;
//                            $publicImageFile = $previewPathPublicUrl . '/' . basename($src);
//
//                            $image->setAttribute('src', $publicImageFile);
//                        }
//                    }
//
//                    $getBodyElement = $dom->getElementsByTagName('body');
//                    $layoutHtml = $dom->saveHTML($getBodyElement->item(0));
//
//                    $layoutHtml = str_replace('{SITE_URL}', site_url(), $layoutHtml);
//                    $layoutHtml = str_replace('<body>', '', $layoutHtml);
//                    $layoutHtml = str_replace('</body>', '', $layoutHtml);
//
//                    file_put_contents($previewPath . '/preview.html', $layoutHtml);


                    try {
                        $previewLayoutContentElement = $browser->element('#preview-layout-file');
                        $previewLayoutContentElement->takeElementScreenshot($layout['screenshot_file']);

//                        $tn = new Thumbnailer($layout['screenshot_file']);
//                        $tn->createThumb(array('width' => 840, 'height' => 600), $layout['screenshot_file']);

                    } catch (\Exception $e) {
                        //dump($e->getMessage());
                    }

                } catch (\Exception $e) {
                    //dump($e->getMessage());
                }
            }
        });

    }

}
