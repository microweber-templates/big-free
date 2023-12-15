<?php

/*

type: layout

name: Gallery 1

position: 1

categories: Gallery

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


<section class="section no-typing <?php print $layout_classes; ?> ">

    <module type="background" id="background-layout--<?php print $params['id'] ?>" />

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="mw-layout-container no-element   container edit no-typing" field="layout-gallery-skin-1-<?php print $params['id'] ?>" rel="module">
        <div class="row m-0 no-element">
            <div class="d-flex flex-wrap pe-md-5 pb-5 col-12 col-lg-6 no-element">
                <div class="col-6 pe-2">
                    <div class="img-as-background   square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-2.jpg" class=" ">
                    </div>
                </div>

                <div class="col-6 ps-2">
                    <div class="img-as-background   square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-3.jpg" class=" ">
                    </div>
                </div>

                <div class="col-12 pt-5">
                    <div class="img-as-background   square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-1.jpg" class=" ">
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap col-12 col-lg-6 pe-md-5 pb-5 no-element">
                <div class="col-12 pb-5">
                    <div class="img-as-background   square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg" class=" ">
                    </div>
                </div>

                <div class="col-6 pe-2">
                    <div class="img-as-background   square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-5.jpg" class=" ">
                    </div>
                </div>

                <div class="col-6 ps-2">
                    <div class="img-as-background   square">
                        <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-6.jpg" class=" ">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
