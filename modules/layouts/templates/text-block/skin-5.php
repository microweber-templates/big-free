<?php

/*

type: layout

name: Text block 5

position: 5

categories: Text block

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
    <div class="mw-layout-container no-element   container    safe-mode edit     no-typing no-select" field="layout-text-block-skin-5-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-10 mx-auto  ">
                <p data-mwplaceholder="<?php _e('Enter text here'); ?>">The moon works its way into our way of thinking, our feelings about romance, our poetry and literature and even how we feel about our day in day out lives in many cases. It is not only primitive societies that ascribe mood swings, changes in social conduct and changes in weather to the moon. Even today, a full moon can have a powerful effect on these forces which we acknowledge even if we cannot explain them scientifically.</p>
            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
