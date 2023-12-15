<?php

/*

type: layout

name: Content 3

position: 3

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
    <div class="container-fluid mw-layout-container no-element   edit " field="layout-content-skin-3-<?php print $params['id'] ?>" rel="module">
        <div class="row">
            <div class="col-12 col-lg-6   text-center">
                <img src="<?php print template_url(); ?>assets/img/layouts/gallery-1-4.jpg"/>
            </div>

            <div class="col-12 col-lg-6 px-md-5 cloneable element background-color-element safe-mode  ">
                <h3 data-mwplaceholder="<?php _e('Enter title here'); ?>">Your Story Should Evolve <br> Over Time</h3>
                <br><br>

                <p data-mwplaceholder="<?php _e('Enter title here'); ?>">Incorporate visuals like images, videos, and graphics that complement your story. Visuals can enhance understanding and emotional impact. Platform Relevance: Adapt your story to the platform you're using. What works on a blog might not work on Instagram or Twitter. Tailor your content accordingly. Value Proposition: Clearly communicate the value your idea, business, or project brings to your audience.</p>

                <br><br>
                <p data-mwplaceholder="<?php _e('Enter title here'); ?>">Remember, your story is a dynamic tool that can evolve and adapt as your venture progresses. The way you tell your story online can indeed make a significant difference in building connections, generating interest, and achieving your goals.</p>

                <br><br>
                <module type="btn" button_style="btn-primary" button_size="btn-md" text="Learn more"/>

            </div>
        </div>
    </div>
   <module type="spacer" id="spacer-layout--<?php print $params['id'] ?>-bottom" />

</section>
