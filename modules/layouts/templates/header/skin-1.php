<?php

/*

type: layout

name: Header 1

position: 1

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

<section class="section mw-layout-dark-background py-0 d-flex align-items-center justify-content-center">
    <module type="background" data-background-image="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg" id="background-layout--<?php print $params['id'] ?>" />
    <div class="mw-layout-container py-4 container mh-100vh d-flex align-items-center justify-content-center no-element edit " field="layout-header-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">
            <div class="col-12  safe-mode  mx-auto text-white   safe-mode allow-select">
                <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="header-section-title mb-7">Describe your company </h1>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="header-section-p mb-7">Describe your company and services with few words and explain why you are the best choice.</p>
                <module type="btn" button_style="btn-primary   " button_size="btn-lg px-5" text="Call to action"/>
            </div>
        </div>
    </div>
 </section>
