<?php

/*

type: layout

name: Contacts 5

position: 5

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

<section class="section <?php print $layout_classes; ?> ">
     <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />
    <div class="mw-layout-container no-element   container edit   safe-mode no-typing" field="layout-contacts-skin-5-<?php print $params['id'] ?>" rel="module">
        <div class="row text-center">
            <div class="mx-auto col-sm-6 col-md-4 cloneable element safe-mode background-color-element">
                <i class="mw-micon-Map-Marker2 safe-element" style="font-size: 40px;"></i>
                <p class="mt-3 " data-mwplaceholder="<?php _e('Enter text here'); ?>">6100 Hackett Plain Suite 705 <br/>Palo Alto, CA</p>
            </div>

            <div class="mx-auto col-sm-6 col-md-4 cloneable element safe-mode background-color-element">
                <i class="mw-micon-Email safe-element" style="font-size: 40px;"></i>
                <a class="mt-3 d-block" data-mwplaceholder="<?php _e('Enter text here'); ?>" href="#">info@company.com</a>
            </div>

            <div class="mx-auto col-sm-6 col-md-4 cloneable element safe-mode background-color-element">
                <i class="mw-micon-Smartphone-3 safe-element" style="font-size: 40px;"></i>
                <p class="mt-3 " data-mwplaceholder="<?php _e('Enter text here'); ?>">+1 234 567 890</p>
            </div>
        </div>

        <br>

        <div class="col-12 col-lg-10 col-lg-8 mx-auto   text-center safe-moed">
            <h5 data-mwplaceholder="<?php _e('Enter title here'); ?>">There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                <br> It’s exciting to think about setting up your own
            </h5>
            <br/><br/>
            <module type="social_links" template="skin-6"/>
        </div>

    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
