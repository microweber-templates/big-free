<?php

/*

type: layout

name: Header 8 - Slider

position: 8

categories: Header

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-5';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-5';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section py-0 d-flex align-items-center justify-content-center">
    <module type="background" id="background-layout--<?php print $params['id'] ?>"/>
    <div class="mw-layout-container py-4 container mh-100vh d-flex align-items-center justify-content-center no-element edit   no-typing no-select" field="layout-header-skin-4-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">
            <div class="col-12  safe-mode  col-sm-10 col-lg-6 mx-auto mb-5 px-0 ">
                <module class="allow-select" type="slider_v2"/>
            </div>

            <div class="col-12  safe-mode  col-sm-10 col-lg-6 mx-auto text-center text-lg-start d-flex align-items-center mb-5 ">

                <div class="  ps-lg-5 allow-select">
                    <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7">Describe your company </h1>
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7">Describe your company and services with few words and explain why you are the best choice.</p>

                    <br/>

                    <module type="btn" button_style="btn-primary" button_size="btn-lg px-5" text="Button"/>
                </div>

            </div>
        </div>
    </div>
</section>
