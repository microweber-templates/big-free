<?php

/*

type: layout

name: Posts 12

description: Posts 12

*/
?>
<?php include('slick_options.php'); ?>
<div class="slick-arrows-1">
    <div class="blog-posts-12 slickslider slick-dots-relative">
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
                <div class="px-1" itemscope itemtype="<?php print $schema_org_item_type_tag ?>">
                    <div class="mb-5">
                        <div class="h-100 d-flex flex-column">
                            <?php if (!isset($show_fields) or $show_fields == false or in_array('thumbnail', $show_fields)): ?>

                            <a href="<?php print $item['link'] ?>" class="   d-block position-relative overflow-hidden h-350 ">

                                <img alt="post-img" src="<?php print thumbnail($item['image'], 1250, 1250); ?>" style="min-height: 100%;"/>

                            </a>
                            <?php endif; ?>


                            <div class="pt-4 pb-3">
                                <?php if (!isset($show_fields) or $show_fields == false or in_array('created_at', $show_fields)): ?>

                                <small class="mb-2 d-block  "><?php echo date_system_format($item['created_at']) ; ?></small>
                                <?php endif; ?>

                                <?php if (!isset($show_fields) or $show_fields == false or in_array('title', $show_fields)): ?>
                                    <a href="<?php print $item['link'] ?>" class="text-dark text-decoration-none mb-2"><h4><?php print $item['title'] ?></h4></a>
                                <?php endif; ?>

                                <?php if (!isset($show_fields) or $show_fields == false or in_array('description', $show_fields)): ?>
                                    <p class=""><?php print $item['description'] ?></p>
                                <?php endif; ?>

<!--                                <div class="d-flex align-items-center">-->
<!--                                    <div class="d-flex align-items-center me-2"><i class="mw-micon-Eye-2 icon-size-24px text-muted me-2"></i>-->
<!--                                        <module type="site_stats/view_count" content-id="10"/>-->
<!--                                    </div>-->
<!--                                    <div class="d-flex align-items-center me-2"><i class="mdi mdi-forum icon-size-24px text-muted me-2"></i>-->
<!--                                        <module type="comments/comments_count" content-id="--><?php //echo $item['id']; ?><!--" class="d-inline"/>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php if (isset($pages_count) and $pages_count > 1 and isset($paging_param)): ?>
    <module type="pagination" pages_count="<?php echo $pages_count; ?>" paging_param="<?php echo $paging_param; ?>"/>
<?php endif; ?>
