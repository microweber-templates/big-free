<?php

/*

type: layout

name: Content 1

position: 1

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

<section class="<?php print $layout_classes; ?> section ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="container mw-layout-container no-element   text-center edit  " field="layout-content-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center  safe-mode">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto    safe-mode">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Story Should Evolve Over Time</h3>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">Update your audience on new developments and how you're overcoming challenges.</p>
            </div>
        </div>

        <div class=" "></div>

        <div class="row text-center mt-5">
            <div class=" col cloneable element mb-5">
                <img class="rounded-3 h-100 w-100"  src="<?php print template_url(); ?>assets/img/layouts/gallery-1-1.jpg"/>
            </div>
            <div class=" col cloneable element mb-5">
                <img class="rounded-3 h-100 w-100"  src="<?php print template_url(); ?>assets/img/layouts/gallery-1-6.jpg"/>
            </div>
            <div class=" col cloneable element mb-5">
                <img class="rounded-3 h-100 w-100"  src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg"/>
            </div>
            <div class=" col cloneable element mb-5">
                <img class="rounded-3 h-100 w-100"  src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg"/>
            </div>
        </div>

        <div class=" ">
            <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
