<?php

/*

type: layout

name: Grid 3

position: 3

categories: Grids

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

if (page_title()) {
    $title = page_title();
}
?>

<section class="section <?php print $layout_classes; ?> ">

     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element   container safe-mode edit" field="layout-grids-skin-3-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 mb-2 cloneable element safe-mode layouts-grids-background">
                <div class="cube-wrapper">
                    <img class=" " src="<?php print template_url(); ?>assets/img/layouts/gallery-1-7.jpg">
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
