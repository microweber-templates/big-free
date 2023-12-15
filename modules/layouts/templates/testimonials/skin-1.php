<?php

/*

type: layout

name: Testimonial 1

position: 1

categories: Testimonials

*/

?>

<style>




</style>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section mw-layout-container <?php print $layout_classes; ?>">

    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" height="120px" />

    <div class="mw-layout-container no-element no-drop container edit noedit" field="layout-testimonials-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class=" ">
            <module type="testimonials" template="skin-2" project_name="Testimonials 1"/>
        </div>

    </div>

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" height="120px" />
</section>
