<?php

/*

type: layout

name: Feature 1

position: 1

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

<style>
    @media screen and (max-width: 991px) {
    <?php echo '#' . $params['id'] . ' '; ?>
      .feature-1-img-block {
          order: 1;
      }

        .feature-1-img-block img {
            position: relative;
        }
    }

    @media screen and (max-width: 991px) {
    <?php echo '#' . $params['id'] . ' '; ?>
        .feature-1-content-block {
           order: 2;
        }
    }
</style>

<section class="section <?php print $layout_classes; ?> ">

    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element   edit   " field="layout-feature-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto text-center text-lg-start d-flex align-items-center justify-content-center cloneable element feature-1-content-block">
                <div class="col-md-8 mx-auto">
                    <div class="cloneable   my-3 element safe-mode background-color-element">
                        <div class="d-flex align-items-center justify-content-md-start justify-content-center  safe-mode mb-2">
                            <i class="me-3 safe-element mw-micon-Sun" style="font-size: 40px;"></i>
                            <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>"  class="mb-0">Feature Title</h4>
                        </div>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>

                    <div class="cloneable   my-3 element safe-mode">
                        <div class="d-flex align-items-center justify-content-md-start justify-content-center  safe-mode mb-2">
                            <i class="me-3 safe-element mw-micon-Sun-CloudyRain" style="font-size: 40px;"></i>
                            <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-0">Feature Title</h4>
                        </div>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>

                    <div class="cloneable   my-3 element safe-mode">
                        <div class="d-flex align-items-center justify-content-md-start justify-content-center  safe-mode mb-2">

                            <i class="me-3 icon-size-36px safe-element mw-micon-Cloud-Rain"></i>
                            <h4 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="mb-0">Feature Title</h4>
                        </div>
                        <p data-mwplaceholder="<?php _e('Enter text here'); ?>">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>

                    <module type="btn" text="Read More" class="mb-3" button_style="btn-primary"/>
                </div>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto feature-1-img-block">
                <div class="  h-100 img-as-background">
                    <img class="w-100 h-100" src="<?php print template_url(); ?>assets/img/layouts/gallery-1-1.jpg"/>
                </div>
            </div>
        </div>
    </div>

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />
</section>
