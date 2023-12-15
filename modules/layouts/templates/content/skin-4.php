<?php

/*

type: layout

name: Content 4

position: 4

categories: Content

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section <?php print $layout_classes; ?> ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element   edit " field="layout-content-skin-4-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center mb-3 ">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto  ">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">A Great Title For This Section</h3>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>" class="mb-3">Remember, your story is a dynamic tool that can evolve and adapt as your venture progresses. The way you tell your story online can indeed make a significant difference in building connections, generating interest, and achieving your goals.</p>
            </div>
        </div>

        <div class="row mb-3 py-4  ">
            <div class="col-12 col-md-6 col-lg-3 mb-md-4 p-4 d-flex flex-column cloneable element background-color-element">
                <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">First Title</h4>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Point of Sale hardware, the till at a shop check out, has become very complex</p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-primary" text="Learn more"/>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-md-4 p-4 d-flex flex-column cloneable element background-color-element">
                <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Second Title</h4>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Point of Sale hardware, the till at a shop check out, has become very complex </p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-primary" text="Learn more"/>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-md-4 p-4 d-flex flex-column cloneable element background-color-element">
                <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Third Title</h4>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Point of Sale hardware, the till at a shop check out, has become very</p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-primary" text="Learn more"/>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3 mb-md-4 p-4 d-flex flex-column cloneable element background-color-element">
                <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>">Last Title</h4>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Point of Sale hardware, the till at a shop check out, has become very complex</p>

                <div class="d-inline-block mt-md-auto mt-5">
                    <module type="btn" button_style="btn-primary" text="Learn more"/>
                </div>
            </div>
        </div>

    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
