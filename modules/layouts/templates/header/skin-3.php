<?php

/*

type: layout

name: Header 3

position: 3

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
    <module type="background"  id="background-layout--<?php print $params['id'] ?>"/>
    <div class="mw-layout-container py-4 no-element edit   no-typing no-select" field="layout-header-skin-3-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12  safe-mode  mx-auto ">
                <div class="row d-flex align-items-center justify-content-center safe-mode ">
                    <div class="col-12  safe-mode  col-md-6 p-4 cloneable element  ">
                        <div class="col-md-10 mx-auto m-4 safe-mode   allow-select">
                            <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7">Describe your company </h1>
                            <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7">Describe your company and services with few words and explain why you are the best choice.</p>
                            <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" text="Call to action"/>
                        </div>
                    </div>

                    <div class="col-12  safe-mode  col-md-6 no-typing   allow-select">
                        <div class="img-as-background no-typing" style="min-height: 100vh;">
                            <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
