<?php

/*

type: layout

name: Content 8

position: 8

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-10';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-10';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section mw-layout-parallax mw-layout-dark-background py-0  mh-650 d-flex align-items-end justify-content-center " data-background-position="center bottom">

    <module type="background" data-background-image="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element   edit" field="layout-content-skin-8-<?php print $params['id'] ?>" rel="module">
        <div class="container <?php print $layout_classes; ?>">
            <div class="row text-center">
                <div class="col-12 col-lg-10 col-lg-8 mx-auto  ">
                    <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-3">Moon Gazing</p>
                    <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Free Classifieds Using Them To Promote Your Stuff Online</h3>
                </div>
            </div>

            <div class="  mt-7 text-center ">
                <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
