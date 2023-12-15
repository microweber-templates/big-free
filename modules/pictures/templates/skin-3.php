<?php

/*

type: layout

name: Skin-3

description: Skin-3

*/

?>

<script>mw.lib.require('slick');</script>
<script>
    /* ###################### Slick   ###################### */
    (function (){
        var galleryImages = [];
        $(document).ready(function () {
            if ($('<?php print '#' . $params['id']; ?> .slick-gallery').length > 0) {
                $('<?php print '#' . $params['id']; ?> .slick-gallery').each(function () {

                    Array.from(this.querySelectorAll('.slick-slide-item-x')).forEach(function (node, index){
                        var img = node.querySelector('img')
                        galleryImages.push({
                            url: img.dataset.largeImage || img.src
                        })
                        node.addEventListener('click', function (){
                            mw.gallery(galleryImages, index)
                        })
                    })

                    var el = $(this);
                    el.slick({
                        rtl: document.documentElement.dir === 'rtl',
                        centerMode: false,
                        centerPadding: '0px',
                        slidesToShow: 4,
                        arrows: true,
                        autoplay: false,
                        autoplaySpeed: 2000,
                        dots: true,
                        responsive: [
                            {
                                breakpoint: 1200,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '0px',
                                    slidesToShow: 3
                                }
                            }, {
                                breakpoint: 768,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '0px',
                                    slidesToShow: 2
                                }
                            }, {
                                breakpoint: 480,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    centerPadding: '0px',
                                    slidesToShow: 1
                                }
                            }
                        ]
                    });

                });
            }
        });
    })()
</script>

<style>
    <?php print '#' . $params['id']; ?> .slick-track {
        display: flex;
        gap: 0.6rem;
    }
</style>

<?php if (is_array($data)): ?>
    <?php $rand = uniqid(); ?>

    <div class="slick-arrows-1">
        <div class="slick-gallery">
            <?php foreach ($data as $item): ?>
                <?php
                if (isset($item['image_options']) and is_array($item['image_options'])) {
                    if (isset($item['image_options']['title'])) {
                        $itemTitle = $item['image_options']['title'];
                    } else {
                        $itemTitle = false;
                    }

                    if (isset($item['image_options']['caption'])) {
                        $itemDescription = $item['image_options']['caption'];
                    } else {
                        $itemDescription = false;
                    }

                    if (isset($item['image_options']['link'])) {
                        $itemLink = $item['image_options']['link'];
                    } else {
                        $itemLink = false;
                    }
                } else {
                    $itemTitle = false;
                    $itemDescription = false;
                    $itemLink = false;
                }
                ?>

                <div class="d-block position-relative">
                    <div class="img-as-background mh-350 mb-3">
                        <img src="<?php print thumbnail($item['filename'], 350, 350, true); ?>"/>
                    </div>

                    <?php if ($itemTitle): ?>
                        <div class="bg-body-opacity-5 w-100 px-3 py-1 text-center" style="z-index: 9;">
                            <h6 class="m-0"><?php print $itemTitle; ?></h6>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

<?php endif; ?>
