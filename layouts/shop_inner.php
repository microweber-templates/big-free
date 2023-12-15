<?php include template_dir() . "header.php"; ?>

<?php
$content_data = content_data(CONTENT_ID);
$in_stock = true;
if (isset($content_data['qty']) and $content_data['qty'] != 'nolimit' and intval($content_data['qty']) == 0) {
    $in_stock = false;
}

if (isset($content_data['qty']) and $content_data['qty'] == 'nolimit') {
    $available_qty = '';
} elseif (isset($content_data['qty']) and $content_data['qty'] != 0) {
    $available_qty = $content_data['qty'];
} else {
    $available_qty = 0;
}

$item = get_content_by_id(CONTENT_ID);
$itemData = content_data($content['id']);
$itemTags = content_tags($content['id']);

if (!isset($itemData['label'])) {
    $itemData['label'] = '';
}
if (!isset($itemData['label-color'])) {
    $itemData['label-color'] = '';
}

$next = next_content($content['id']);
$prev = prev_content($content['id']);


?>

<div class="shop-inner-page shop-products" id="shop-content-<?php print CONTENT_ID; ?>" field="shop-inner-page" rel="page">

    <div class="container-fluid mw-m-t-30">
        <div class="row justify-content-center">
            <module type="breadcrumb" template="shop_inner"/>

            <div class="row product-holder px-0">
                <div class="col-12 col-lg-6">
                    <module type="pictures" rel="content" template="skin-14"/>
                </div>

                <div class="col-12 col-lg-6 relative product-info-wrapper product">
                    <div class="product-info">
                        <div class="product-info-content ps-xl-5 ms-xl-4">
                            <div class="mb-5">
                            </div>
                            <div class="mt-sm-4 mt-md-0 pb-0 mb-2">
                                <h4 class="edit " field="title" rel="content"><?php print content_title(); ?></h4>

                                <div class="next-previous-content float-end">
                                    <?php if ($prev != false) { ?>
                                        <a href="<?php print content_link($prev['id']); ?>" class=" btn btn-outline-primary" data-tip="#prev-tip">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M400-240 160-480l240-240 56 58-142 142h486v80H314l142 142-56 58Z"/></svg>                                            </a>
                                        <div id="prev-tip" style="display: none">
                                            <div class="next-previous-tip-content text-center">
                                                <img src="<?php print get_picture($prev['id']); ?>" alt="" width="90"/>
                                                <h6><?php print $prev['title']; ?></h6>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if ($next != false) { ?>
                                        <a href="<?php print $next['url']; ?>" class="btn btn-outline-primary" data-tip="#next-tip">
                                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m560-240-56-58 142-142H160v-80h486L504-662l56-58 240 240-240 240Z"/></svg>                                            </a>

                                        <div id="next-tip" style="display: none">
                                            <div class="next-previous-tip-content text-center">
                                                <img src="<?php print get_picture($next['id']); ?>" alt="" width="90"/>

                                                <h6><?php print $next['title']; ?></h6>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="row pt-1 pe-3 ps-2">
                               <div class="col-sm-9 price-holder px-0">
                                   <?php $prices = get_product_prices(content_id(), true); ?>
                                   <?php if (isset($prices[0]) and is_array($prices)) { ?>

                                       <?php if (isset($prices[0]['original_value'])): ?>
                                           <h5 class="price-old mb-0"><?php print currency_format($prices[0]['original_value']); ?></h5>
                                       <?php endif; ?>

                                       <?php $price = get_product_prices(content_id(), true);

                                       if (isset($price[0]) and isset($price[0]['original_value'])): ?>

                                           <?php
                                           $oldFigure = floatval($price[0]['custom_value']);
                                           $newFigure = floatval($price[0]['original_value']);
                                           $percentChange = 0;

                                           ?>

                                           <?php if ($oldFigure < $newFigure): ?>
                                               <?php
                                               $percentChange = (1 - $oldFigure / $newFigure) * 100;
                                               ?>
                                           <?php endif; ?>

                                           <?php if ($percentChange > 0): ?>
                                              <span class="btn btn-primary btn-sm me-2" style="cursor: auto;">
                                                  Save:
                                                    <?php echo number_format($percentChange); ?>%
                                              </span>
                                           <?php endif; ?>
                                       <?php endif; ?>
                                       <?php if (isset($prices[0]['value'])): ?>
                                           <h5 class="price mb-0"><?php print currency_format($prices[0]['value']); ?></h5>
                                       <?php endif; ?>

                                   <?php } ?>
                               </div>

                                <div class="availability col-sm-3 text-end text-right align-self-center px-0 ">
                                    <?php if ($in_stock == true): ?>
                                        <span class="text-success"><i class="fa fa-circle" style="font-size: 8px;"></i> <?php _lang("In Stock", 'templates/big') ?></span>
                                    <?php else: ?>
                                        <span class="text-danger"><i class="fa fa-circle" style="font-size: 8px;"></i> <?php _lang("Out of Stock", 'templates/big') ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>

                                    <?php if (isset($content_data['sku'])): ?>
                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <?php _lang("SKU", 'templates/big') ?>
                                            - <?php print $content_data['sku']; ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>

                            <div class="row">
                                <div class="col-12">
                                    <div class="description">
                                        <div class="edit" field="content_body" rel="content">
                                            <p><?php _lang("How to write product descriptions that sell", 'templates/big') ?></p>
                                            <p><?php _lang("One of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.", 'templates/big') ?></p>

                                            <p><?php _lang("Think like a consumer", 'templates/big') ?></p>
                                            <p><?php _lang("Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                                    features — try to
                                                    limit each one to 5-8 words.", 'templates/big') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bold">
                                <module type="shop/cart_add"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="edit safe-mode   py-5" field="related_products" rel="content">
                    <div class="col-12 text-start text-left mb-4">
                        <h2 class="related-title"><?php _lang('Related products', 'templates/shopmag'); ?></h2>
                    </div>

                    <div class="col-12">
                        <module type="shop/products" template="skin-2" related="true" limit="4" hide_paging="true"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include template_dir() . "footer.php"; ?>
