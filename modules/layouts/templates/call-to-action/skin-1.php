<?php

/*

type: layout

name: Call to action 1

position: 1

categories: Call to Action

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
    <div class="mw-layout-container no-element-  container edit   no-typing" field="layout-call-to-action-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row d-flex justify-content-between safe-mode">
            <div class="col-12 col-sm-10 col-lg-6   text-center text-lg-start">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Start your free trial now, with a simple registration. </h3>
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">No credit cart required.</p>
            </div>

            <div class="col-12 col-sm-10 col-lg-6   d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto">
                <module type="btn" button_style="btn-outline-primary" text="Log In" class="mx-2"/>
                <module type="btn" button_style="btn-link" text="Register Now" class="mx-2"/>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />
</section>
