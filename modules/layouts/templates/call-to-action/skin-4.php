<?php

/*

type: layout

name: Call to action 4

position: 4

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
    <div class="mw-layout-container no-element-  container edit   no-typing" field="layout-call-to-action-skin-4-<?php print $params['id'] ?>" rel="module">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-sm-10 col-lg-5   text-center text-lg-start d-flex flex-column justify-content-center safe-mode">
                <h6 data-mwplaceholder="<?php _e('Enter title here'); ?>">Shooting Stars</h6>
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-0">What If They Let You Run The Hubble</h3>
            </div>

            <div class="col-12 col-sm-10 col-lg-6   d-flex align-items-center justify-content-lg-end justify-content-center mt-2 mt-sm-0 mx-auto">
                <div class="  d-flex safe-mode">
                    <a href="#" class="ms-2 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-1.jpg" class=" "></a>
                    <a href="#" class="ms-2 w-150"><img src="<?php print template_url(); ?>assets/img/layouts/content-39-2.jpg" class=" "></a>
                </div>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
