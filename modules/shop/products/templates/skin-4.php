<?php

/*

type: layout

name: Skin-4

description: Skin-4

*/
?>

<?php include('slick_options.php'); ?>
<style>
    <?php echo '#'.$params['id']; ?>
    .slick-arrows-1 .slick-prev {
        margin-left: -70px
    }

    <?php echo '#'.$params['id']; ?>
    .slick-arrows-1 .slick-next {
        margin-right: -70px
    }
</style>

<div class="slick-arrows-1">
    <?php if (!empty($data)): ?>
        <div class="slickslider slick-dots-relative shop-products">
            <?php foreach ($data as $item): ?>
                <?php $categories = content_categories($item['id']); ?>

                <?php
                $itemData = content_data($item['id']);
                $itemTags = content_tags($item['id']);

                $in_stock = true;
                if (isset($itemData['qty']) and $itemData['qty'] != 'nolimit' and intval($itemData['qty']) == 0) {
                    $in_stock = false;
                }

                ?>

                <?php
                $itemData = content_data($item['id']);
                $itemTags = content_tags($item['id']);

                if (!isset($itemData['label'])) {
                    $itemData['label'] = '';
                }
                if (!isset($itemData['label-color'])) {
                    $itemData['label-color'] = '';
                }

                $itemData = content_data($item['id']);
                $itemTags = content_tags($item['id']);

                if (!isset($itemData['label'])) {
                    $itemData['label'] = '';
                }
                if (!isset($itemData['label-color'])) {
                    $itemData['label-color'] = '';
                }
                $itemCats = '';
                if ($categories) {
                    foreach ($categories as $category) {
                        $itemCats .= $category['title'] . ', ';
                    }
                }
                ?>
                <div class=" item-<?php print $item['id'] ?>" itemscope="" itemtype="<?php print $schema_org_item_type_tag ?>">
                    <div class="product h-100 d-flex flex-column <?php echo $in_stock ? 'mw-layout-product-stock' : 'mw-layout-product-outOfStock'; ?> ">
                        <div class="h-100 d-flex flex-column">
                            <?php if (is_array($item['prices'])): ?>
                                <?php foreach ($item['prices'] as $k => $v): ?>
                                    <input type="hidden" name="price" value="<?php print $v ?>"/>
                                    <input type="hidden" name="content_id" value="<?php print $item['id'] ?>"/>
                                    <?php break; endforeach; ?>
                            <?php endif; ?>

                            <?php if ($show_fields == false or in_array('thumbnail', $show_fields)): ?>
                                <a href="<?php print $item['link'] ?>">
                                    <div class="img-as-background square  ">
                                        <?php if (isset($itemData['label-type']) && $itemData['label-type'] === 'text'): ?>
                                            <div class="position-absolute  top-0 left-0 m-2" style="z-index: 3;">
                                                <div class="badge text-white px-3 pb-1 pt-2 rounded-0" style="background-color: <?php echo $itemData['label-color']; ?>;"><?php echo $itemData['label']; ?></div>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (isset($item['original_price']) and $item['original_price'] != ''): ?>


                                            <?php
                                            $vals2 = array_values($item['prices']);
                                            $val1 = array_shift($vals2);
                                            ?>

                                            <?php
                                            $percentChange = 0;
                                            ?>

                                            <?php if (isset($item['price_discount_percent']) and $item['price_discount_percent']): ?>
                                                <?php
                                                $percentChange = $item['price_discount_percent'];
                                                ?>
                                            <?php endif; ?>
                                            <?php if (isset($itemData['label-type']) && $itemData['label-type'] === 'percent' && $percentChange > 0): ?>

                                                <div class="discount-label">
                                                <span class="discount-percentage">
                                                        <?php echo $percentChange; ?>%
                                                </span>
                                                    <span class="discount-label-text"><?php _lang("Discount"); ?></span>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        <img src="<?php print thumbnail($item['image'], 1250, 1250); ?>" />
                                    </div>
                                </a>
                            <?php endif; ?>

                            <div class="pt-2">
                                <?php if ($show_fields == false or in_array('title', $show_fields)): ?>
                                    <a href="<?php print $item['link'] ?>" class="text-dark text-decoration-none text-center">
                                        <h5 class="mt-1 mb-2"><?php print $item['title'] ?></h5>
                                    </a>
                                <?php endif; ?>

                                <div class="price-holder justify-content-center">
                                    <?php if ($show_fields == false or in_array('price', $show_fields)): ?>
                                        <?php if (isset($item['prices']) and is_array($item['prices'])): ?>
                                            <?php
                                            $vals2 = array_values($item['prices']);
                                            $val1 = array_shift($vals2);
                                            ?>
                                            <p>
                                                <?php if (isset($item['original_price']) and $item['original_price'] != ''): ?>
                                                    <span class="price-old"><?php print currency_format($item['original_price']); ?></span>
                                                <?php endif; ?>
                                                <span class="price"><?php print currency_format($val1); ?></span>
                                            </p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <?php if ($show_fields == false or ($show_fields != false and in_array('add_to_cart', $show_fields))): ?>
                                <?php if ($in_stock == true): ?>
                                    <div class="d-flex justify-content-center">
                                        <a href="javascript:;" onclick="mw.cart.add('.shop-products .item-<?php print $item['id'] ?>');" class="btn btn-outline-primary">Add to cart</a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
