<?php

/*

type: layout

name: Footers 19

position: 19

categories: Footers

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
    .footer-19-menu ul li a:first-child{
        padding-left: 0;
    }

    .footer-19-menu ul{
       display: flex;
        flex-wrap: wrap;
    }
</style>

<div class="  footer-background py-0 <?php print $layout_classes; ?>" id="mw-footer-background">

    <module type="background" id="background-layout--<?php print $params['id'] ?>" />

    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="mw-layout-container no-element   container">
        <div class="row text-md-start text-center">
            <div class="col-md-5 col text-md-start text-md-left">


                <div class="edit "
                     field="layout-footer-skin-19-p-<?php print $params['id'] ?>" rel="module">
                    <p class="font-weight-bold">Website Builder and CMS </p>
                    <br>
                    <small>Microweber is a website builder and content management system of new generation.</small>
                    <br>
                </div>

                <module type="menu" class="footer-19-menu d-lg-flex justify-content-lg-start justify-content-center ps-0 mt-3" template="simple" name="footer_menu"/>
            </div>
            <div class="col-md-4 col">
                <div class="edit "
                     field="layout-footer-skin-19-phone<?php print $params['id'] ?>" rel="module">
                    <small><?php _lang('Phone', 'templates/big'); ?></small>
                    <p class="mt-2">123-456-7890</p>
                </div>
                <div class="edit "
                     field="layout-footer-skin-19-email<?php print $params['id'] ?>" rel="module">
                    <small><?php _lang('Email', 'templates/big'); ?></small>
                    <p class="mt-2"><a href="">mail@yourcompany.com</a></p>
                </div>
                <div class="edit "
                     field="layout-footer-skin-19-social<?php print $params['id'] ?>" rel="module">
                    <p><?php _lang('Social', 'templates/big'); ?></p>
                    <module type="social_links" template="skin-4"/>
                </div>
            </div>

            <div class="col-md-3 col edit "
                 field="layout-footer-skin-19-country<?php print $params['id'] ?>" rel="module">
                <small><?php _lang('California', 'templates/big'); ?></small>
                <p class="mt-2"><?php _lang('21 Lebsack Harbor Apt. 276 Palo Alto, CA', 'templates/big'); ?></p>

                <small><?php _lang('New York', 'templates/big'); ?></small>
                <p class="mt-2"><?php _lang('74 Howell Islands Suite 834 Rochester, NY', 'templates/big'); ?></p>
            </div>
        </div>
    </div>
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

    <div class="mw-layout-container no-element   container py-2" >
        <div class="col-12 d-md-flex text-center">
            <small class="col-sm-6 text-md-start text-center" field="footer-reserved-skin-19-<?php print $params['id'] ?>" rel="module">
                © All Rights Reserved.</small>
            <small class="col-sm-6 mb-0 noedit text-md-end text-center"><?php print powered_by_link(); ?></small>
        </div>
    </div>
</div>



