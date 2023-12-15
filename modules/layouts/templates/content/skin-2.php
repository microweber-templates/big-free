<?php

/*

type: layout

name: Content 2

position: 2

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

    <div class="row mw-layout-container no-element   text-center edit " field="layout-content-skin-2-<?php print $params['id'] ?>" rel="module">
        <div class="col-12 col-lg-10 col-lg-8 mx-auto  ">
            <div class="mb-4 icon-size-64px no-element"><i class="safe-element mw-micon-Anchor mb-4 icon-size-64px"></i></div>
            <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Story Should Evolve Over Time</h3>
            <p data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-3">Update your audience on new developments and how
                <br>
                you're overcoming challenges.
            </p>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
