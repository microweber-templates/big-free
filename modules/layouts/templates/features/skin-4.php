<?php

/*

type: layout

name: Feature 4

position: 4

categories: Features

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
    <div class="mw-layout-container no-element   container edit   " field="layout-feature-skin-4-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">
            <div class="col-12 col-lg-10 col-lg-8 mx-auto  ">
                <h3  data-mwplaceholder="<?php _e('Enter title here'); ?>" >The Feature Title </h3>
            </div>
        </div>

        <div class="row text-center mt-sm-5 mt-3">
            <div class="mx-auto col-sm-6 col-md-3 mb-sm-5 mb-2 cloneable element background-color-element">
                <div class="w-80 mx-auto safe-mode">
                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="safe-element mw-micon-Android-Store" style="font-size: 50px;"></i>
                    </div>
                </div>

                <div class="text-center mt-sm-6 mt-3  ">
                    <h4  data-mwplaceholder="<?php _e('Enter title here'); ?>" >Feature Title</h4>
                    <p  data-mwplaceholder="<?php _e('Enter text here'); ?>">Speaking comes to most people as naturally as breathing. On many occasions our words are.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-3 mb-sm-5 mb-2 cloneable element background-color-element">
                <div class="w-80 mx-auto safe-mode">
                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="safe-element mw-micon-Add" style="font-size: 50px;" data-mw-live-edithover="true"></i>
                    </div>
                </div>

                <div class="text-center mt-sm-6 mt-3  ">
                    <h4  data-mwplaceholder="<?php _e('Enter title here'); ?>" >Feature Title</h4>
                    <p  data-mwplaceholder="<?php _e('Enter text here'); ?>">Speaking comes to most people as naturally as breathing. On many occasions our words are.</p>
                </div>
            </div>

            <div class="mx-auto col-sm-6 col-md-3 mb-sm-5 mb-2 cloneable element background-color-element">
                <div class="w-80 mx-auto safe-mode">
                    <div class="   rounded-circle square d-flex align-items-center justify-content-center">
                        <i class="safe-element mw-micon-Add-Window" style="font-size: 50px;"></i>
                    </div>
                </div>

                <div class="text-center mt-sm-6 mt-3  ">
                    <h4  data-mwplaceholder="<?php _e('Enter title here'); ?>" >Feature Title</h4>
                    <p  data-mwplaceholder="<?php _e('Enter text here'); ?>">Speaking comes to most people as naturally as breathing. On many occasions our words are.</p>
                </div>
            </div>
        </div>
    </div>
 <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
