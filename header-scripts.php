<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php print lang_attributes(); ?>>

<head>
    <title>{content_meta_title}</title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="{content_meta_title}"/>
    <meta name="keywords" content="{content_meta_keywords}"/>
    <meta name="description" content="{content_meta_description}"/>
    <meta property="og:type" content="{og_type}"/>
    <meta property="og:url" content="{content_url}"/>
    <meta property="og:image" content="{content_image}"/>
    <meta property="og:description" content="{og_description}"/>
    <meta property="og:site_name" content="{og_site_name}"/>

    <script>
        mw.require('icon_selector.js', undefined, undefined, true);
        mw.lib.require('bootstrap5js');
        mw.lib.require("collapse_nav");
        mw.require('<?php print template_url(); ?>assets/plugins/mw-ui/assets/ui/plugins/js/plugins.js', undefined, undefined, true);
        mw.lib.require('bxslider');
        mw.lib.require('slick');
        mw.iconLoader()
            .addIconSet('iconsMindLine')
            .addIconSet('iconsMindSolid')
            .addIconSet('fontAwesome')
            .addIconSet('materialDesignIcons');

        addEventListener('load', function () {
            $('.js-collapse-inner-page-menu').collapseNav({
                responsive: 1,
                more_text: 'More Button',
                mobile_break: 800,
            });
        })
    </script>

    <link href="<?php print template_url(); ?>assets/fonts/jost-font/font.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <link href="<?php print template_url(); ?>assets/css/main.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" />


    <link href="<?php print template_url(); ?>assets/templates_features/css/scss/styles-for-template.css" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />
    <link href="<?php print template_url(); ?>assets/design-styles/design-styles.css" as="style" rel="preload" onload="this.onload=null;this.rel='stylesheet'" />



    <script src="<?php print template_url(); ?>assets/templates_features/js/js-for-template.js" defer></script>

    <?php print get_template_stylesheet(); ?>



    <?php include('template_settings.php'); ?>
</head>
<body class="<?php print helper_body_classes(); ?>">
