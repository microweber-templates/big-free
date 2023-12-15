<?php

/*

type: layout

name: Header 6

position: 6

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
    <module type="background" />
    <div class="mw-layout-container py-4 container-fluid mh-100vh d-flex align-items-center justify-content-center no-element edit   no-typing no-select" field="layout-header-skin-6-<?php print $params['id'] ?>" rel="module">
        <div class="row d-flex align-items-center justify-content-center allow-select">
            <div class="col-12  safe-mode  col-lg-7   py-4">
                <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7">Describe your company </h1>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7">Describe your company and services with few words and explain why you are the best choice.</p>

            </div>

            <div class="col-12  safe-mode  col-sm-10 col-md-8 col-lg-5 py-4">
                <div class="ps-0 ps-lg-5">
                    <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-9.jpg"/>
                </div>
            </div>
        </div>
    </div>
</section>


