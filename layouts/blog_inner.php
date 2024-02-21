<?php include template_dir() . "header.php"; ?>





<?php
$contentId = content_id();

$post = get_content_by_id($contentId);
$picture = get_picture($contentId);

if (!$picture) {
    $picture = '';
}

$itemData = content_data($contentId);
$itemTags = content_tags($contentId);
?>

<div class="blog-inner-page py-5" id="blog-content-<?php print $contentId; ?>">
    <div class="container-fluid mw-m-t-30 mw-m-b-50">
        <div class="row">
            <module class="text-center mb-5" type="breadcrumb" />

            <div class="col-xxl-8 col-xl-10 mx-auto mb-5">
                <module type="pictures" rel="content" template="skin-4"/>


                <div class="text-center my-5">
                   <h2 class="mt-2 text-center  text-dark edit plain-text" field="title" rel="content"><?php echo $post['title']; ?></h2>
                   <p class="text-dark text-center"><?php echo date('d M Y', strtotime($post['created_at'])); ?></p>
               </div>

                <div class="description edit dropcap typography-area" field="content" rel="content">

                    <p><?php _lang("How to write product descriptions that sell", 'templates/big') ?></p>
                    <p><?php _lang("One of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.", 'templates/big') ?></p>

                    <p><?php _lang("Think like a consumer", 'templates/big') ?></p>
                    <p><?php _lang("Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                        features — try to
                                        limit each one to 5-8 words.", 'templates/big') ?></p>
                </div>

                <div class=" mt-5 py-3">
                    <h6>Share this article:</h6>
                    <module type="sharer" id="post-bottom-sharer" />
                </div>
            </div>

        </div>
    </div>


</div>

<?php include template_dir() . "footer.php"; ?>
