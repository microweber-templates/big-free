<?php

/*

type: layout

name: Posts 18

description: Posts 18

*/
?>

<style>
    .action-blog-arrow {
        font-weight: bold;
        border-bottom: 1px solid #FFA028;
    }

    .action-blog-arrow:hover {
      text-decoration: none!important;
        color: #FFA028!important;
    }

    .action-blog-arrow i:hover {
      background-color: unset!important;
    }
</style>

<div class="row blog-posts-3">
    <?php if (!empty($data)): ?>
        <?php foreach ($data as $item): ?>
            <?php $categories = content_categories($item['id']);

            $itemCats = '';
            if ($categories) {
                foreach ($categories as $category) {
                    $itemCats .= '<small class="text-dark font-weight-bold d-inline-block mb-2  ">' . $category['title'] . '</small> ';
                }
            }
            ?>
            <div class="mx-auto mx-md-0 col-12 mb-5" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                <div class="h-100 d-flex flex-wrap align-items-center ">
                    <div class="col-lg-6 col-12 pt-4 pb-3 order-lg-1 order-2">
                        <small style="color: #8C93A4;" class="mb-4 d-block"><?php echo date_system_format($item['created_at']) ; ?></small>
                        <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                            <a href="<?php print $item['link'] ?>" class=" "><h4 class="text-start text-left"><?php print $item['title'] ?></h4></a>
                        <?php endif; ?>

                        <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                            <p style="color: #8C93A4;" class=""><?php print $item['description'] ?></p>
                        <?php endif; ?>

                        <div class="d-flex">
                            <a href="<?php print $item['link'] ?>" class=" d-flex align-items-center action-blog-arrow"> Read More </a>

                            <i style="color: #FFA028;" class="col-xl-1 ps-lg-0 action-blog-arrow mt-1 mwiconlist-icon mw-micon-solid-Arrow-OutRight"></i>
                        </div>

                    </div>

                    <div class="col-lg-4 col-12 justify-content-end ms-auto order-lg-2 order-1">
                        <a href="<?php print $item['link'] ?>" class="   d-block">
                            <div class="img-as-background">
                                <img src="<?php print thumbnail($item['image'], 1250, 1250); ?>"  style="position: relative !important;"/>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
