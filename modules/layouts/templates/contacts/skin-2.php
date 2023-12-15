<?php

/*

type: layout

name: Contacts 2

position: 2

categories: Contact Us

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'pt-9';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'pb-9';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section " data-background-position="center center" data-bg-contain="true">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="mw-layout-container no-element   container   edit safe-mode no-typing" field="layout-contacts-skin-2-<?php print $params['id'] ?>" rel="module">
        <div class="row col-12 col-lg-8  mx-auto   position-relative p-3 cloneable element background-color-element safe-mode" style="background-color: #fff;">
            <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-4">Contact Us</h3>
            <p data-mwplaceholder="<?php _e('Enter text here'); ?>">We’re here to help and answer any question you might have. </p>
            <module type="contact_form" template="skin-3"/>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
