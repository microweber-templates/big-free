<?php

/*

type: layout

name: Skin-1

description: Skin-1

*/

?>

<script>mw.lib.require('slick');</script>

<script>
    $(document).ready(function () {
        var items = $("#<?php print $params['id']; ?> .mwt-face-holder")
        $("#<?php print $params['id']; ?> .mwt-faces").append(items.eq(0).clone(true))
        $("#<?php print $params['id']; ?> .mwt-faces").prepend(items.eq(items.length - 1).clone(true))
        var configFaces = function (nextSlide) {
            nextSlide = nextSlide || 0;
            var active = $("#<?php print $params['id']; ?> .mwt-face-holder")
                .removeClass('active subactive')
                .one('click', function () {
                    $("#<?php print $params['id']; ?> .mw-testimonials-faces").slick('slickGoTo', $(this).attr('data-index'))
                    return false;
                })
                .eq(nextSlide + 1)
                .addClass('active');
            active.prev('.mwt-face-holder').addClass('subactive')
            active.next('.mwt-face-holder').addClass('subactive')
        }
        var el = $("#<?php print $params['id']; ?> .mw-testimonials-faces");
        el.slick({
            infinite: true,
            dots: false,
            arrows: false,
            adaptiveHeight: true,
            rtl: document.documentElement.dir === 'rtl',
        })
            .on('beforeChange init reInit', function (event, slick, currentSlide, nextSlide) {
                configFaces(nextSlide)
            });
        configFaces()
    })
</script>

<div class="testimonials-faces-wrapper overflow-hidden">
    <div class="testimonials-wrapper mx-auto">
        <div class="mw-testimonials mw-testimonials-faces">
            <?php foreach ($data as $item): ?>
                <div class="mw-testimonials-item-faces">
                    <div class="mw-testimonials-item-faces-content">
                        <div class="row text-center">
                            <div class="col-12 col-lg-10 col-lg-8 mx-auto">
                                <i class="mdi mdi-format-quote-close icon-size-46px   d-block mb-5"></i>
                                <p  -2"><?php print character_limiter($item['content'], $limit); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if ($all_have_pictures): ?>
        <div class="mwt-faces my-3">
            <?php $count = -1;
            foreach ($data as $item): $count++; ?>
                <span class="mwt-face-holder" data-index="<?php print $count; ?>">
                <?php if (isset($item['client_website'])): ?>
                    <a href="<?php print $item['client_website']; ?>" class="mwt-face" style="background-image: url(<?php print thumbnail($item['client_picture'], 250); ?>);"></a>
                <?php else : ?>
                    <span class="mwt-face" style="background-image: url(<?php print thumbnail($item['client_picture'], 250); ?>);"></span>
                <?php endif; ?>
            </span>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="mwt-faces my-3">
            <?php $count = -1;
            foreach ($data as $item): $count++; ?>
                <span class="mwt-face-holder" data-index="<?php print $count; ?>">
                <?php if (isset($item['client_website'])): ?>
                    <a href="<?php print $item['client_website']; ?>" class="mwt-face-name"><?php print $item['name']; ?></a>
                <?php else : ?>
                    <span class="mwt-face-name"><?php print $item['name']; ?></span>
                <?php endif; ?>
            </span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="testimonials-wrapper mx-auto">
        <div class="mw-testimonials mw-testimonials-faces">
            <?php foreach ($data as $item): ?>
                <div class="mw-testimonials-item-faces">
                    <div class="mw-testimonials-item-faces-content mt-2">
                        <div class="row text-center">
                            <div class="col-12 col-lg-10 col-lg-8 mx-auto">
                                <?php if ($item['name']): ?>
                                    <h5 class=" mb-0"><?php print $item['name']; ?></h5>
                                <?php endif; ?>
                                <?php if ($item['client_company']): ?>
                                    <p class="mb-0"><?php print $item['client_company']; ?></p>
                                <?php endif; ?>

                                <?php if ($item['client_website']): ?>
                                    <a class="my-1 d-block" href="<?php print $item['client_website']; ?>"><?php print $item['client_website'] ?></a>
                                <?php endif; ?>

                                <?php if ($item['client_role']): ?>
                                    <p><?php print $item['client_role']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
