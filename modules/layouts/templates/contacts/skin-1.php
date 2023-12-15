<?php

/*

type: layout

name: Contacts 1

position: 1

categories: Contact Us

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
<style>
    <?php echo '#' . $params['id'] . ' '; ?> .module-google-maps .relative{
        height: 100% !important;
    }
</style>
<div class="position-relative overflow-hidden">
    <module type="google_maps" class="position-lg-absolute w-100 h-100" style="z-index: 1;"/>
    <section class="section <?php print $layout_classes; ?> ">
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="mw-layout-container no-element   container edit   no-typing no-select" field="layout-contacts-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row col-12 col-lg-4 col-md-6 ms-auto p-3 cloneable element background-color-element safe-mode allow-select" style="background-color: #fff;">
            <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-4">Contact Us</h3>
            <p data-mwplaceholder="<?php _e('Enter text here'); ?>">We’re here to help and answer any question you might have. </p>
             <module type="contact_form" template="skin-3"/>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
</div>
