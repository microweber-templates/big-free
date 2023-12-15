<?php

/*

type: layout

name: Call to action 3

position: 3

hidden: true

categories: Call to Action

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

<section class="section form-control-outline-dark ">
    <module type="background" id="background-layout--<?php print $params['id'] ?>" />
    <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-top" />

    <div class="mw-layout-container no-element-  container edit    no-typing " field="layout-call-to-action-skin-3-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-12 col-lg-12 mx-auto   safe-mode">
                <h1 data-mwplaceholder="<?php _e('Enter title here'); ?>" class="m-0">Get closer to the biggest</h1>
                <p data-mwplaceholder="<?php _e('Enter title here'); ?>">Sign up for updates and new features</p>
                <br/>

                <module type="contact_form" template="subscribe-6"/>

            </div>
        </div>
    </div>
<module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>

