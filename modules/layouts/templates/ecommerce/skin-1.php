<?php

/*

type: layout

name: Ecommerce 1

position: 1

categories: Ecommerce

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
    <div class="mw-layout-container no-element   container edit " field="layout-ecommerce-skin-1-<?php print $params['id'] ?>"  rel="module">
        <module type="shop/products" template="default" />
    </div>
  <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
