<?php

/*

type: layout

name: Skin for sliding Logos

description: Skin for sliding Logos

*/

?>
<?php $rand = uniqid(); ?>


<style>
    .mw-new-9-logo-marquee-wrapper {
        align-self: stretch;
        overflow: hidden;
        position: relative;
    }

    .mw-new-9-logo-marquee, .mw-new-9-logo-marquee-wrapper {
        column-gap: 48px;
        display: flex;
        row-gap: 48px;
    }

    .mw-new-9-logo-marquee-image {
        max-height: 100px;
        opacity: .7;
    }

    .mw-new-9-gradient-scrim {
        background-image: linear-gradient(90deg, #fff, rgba(255, 255, 255, 0) 15%, rgba(255, 255, 255, 0) 85%, #fff);
        bottom: 0;
        left: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 2;
    }

    @media screen and (max-width: 479px) {
        .mw-new-9-logo-marquee, .mw-new-9-logo-marquee-wrapper {
            column-gap: 36px;
            row-gap: 36px;
        }
    }

    @keyframes marquee-animation {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    .mw-new-9-logo-marquee {
        animation: marquee-animation 2s linear infinite;
    }

    .mw-new-9-logo-marquee {
        align-items: center;
        flex: 0 0 auto;
        width: 100%;
        display: flex;
        animation: marquee-animation 20s linear infinite;
    }

</style>


<?php if (is_array($data)): ?>
    <div class="mw-new-9-logo-marquee-wrapper" id="gallery-<?php print $rand; ?>">
        <div class="mw-new-9-logo-marquee">
            <?php if (sizeof($data) > 1) { ?>
                <?php $count = -1;
                foreach ($data as $item): $count++; ?>

                <?php
                    $itemTitle = false;
                    $itemDescription = false;
                    $itemLink = false;
                    $itemAltText = 'Open';
                    if (isset($item['image_options']) and is_array($item['image_options'])) {
                    if (isset($item['image_options']['title'])) {
                    $itemTitle = $item['image_options']['title'];
                    }
                    if (isset($item['image_options']['caption'])) {
                    $itemDescription = $item['image_options']['caption'];
                    }
                    if (isset($item['image_options']['link'])) {
                    $itemLink = $item['image_options']['link'];
                    }
                    if (isset($item['image_options']['alt-text'])) {
                    $itemAltText = $item['image_options']['alt-text'];
                    }
                    }
                    ?>
                    <a class="mw-new-9-logo-marquee-image" href="<?php print $itemLink; ?>">
                        <img
                             src="<?php print thumbnail($item['filename'], 800, 800); ?>"
                             alt="<?php print $item['title'] ?>" title="<?php print $item['title'] ?>" loading="lazy">
                    </a>

                <?php endforeach; ?>
            <?php } ?>
            <div class="mw-new-9-gradient-scrim"></div>
        </div>
    </div>


<?php endif; ?>



