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

<style>
    .partners-inner-left-column {
        transition: background .3s, border .3s, border-radius .3s, box-shadow .3s;
        background-color: #f8fafc;
        padding: 2% 5%;
    }

    .partners-inner-left-column img {
        width: 100%;
    }

    .partners-inner-right-column {
        padding: 2% 5%;

    }

    .partners-inner-left-column-bottom-box {
        background-color: #fff;
        padding: 2%;
        margin-block: 5%;
    }

    .partners-inner-left-column-bottom-box i {
        font-size: 25px;
        color: var(--mw-primary-color);
    }

    .partners-inner-page .right-side-elements-wrapper {
        list-style: none;
        margin-top: 20px;
        padding-left: 0;
    }

    .partners-inner-page .right-side-elements-wrapper i {
        color: var(--mw-primary-color);
        font-size: 25px;
    }
</style>

<div class="partners-inner-page py-5" id="blog-content-<?php print $contentId; ?>">
    <div class="container mt-3 mb-5">
        <div class="row mx-auto mb-5">
            <div class="col-xl-6 partners-inner-left-column">
                <h3 class="text-center font-weight-bold edit" field="title" rel="content"><?php echo $post['title']; ?></h3>
                <p class="text-dark text-center"><?php echo date('d M Y', strtotime($post['created_at'])); ?></p>

                <module class="py-2" type="pictures" rel="content" template="skin-4"/>

                <div
                    class="row partners-inner-left-column-bottom-box gap-3 edit safe-mode background-color-element element"
                    field="content-inner-left" rel="content">
                    <div class="col-xl-5 d-flex align-items-center gap-3">
                        <i class="mw-micon-Globe"></i>
                        <a href=""> Visit Partner Site</a>
                    </div>
                    <div class="col-xl-5 d-flex align-items-center gap-3">
                        <i class="mw-micon-Email"></i>
                        <a href=""> Email Partner</a>
                    </div>
                    <div class="col-xl-5 d-flex align-items-center gap-3">
                        <i class="mw-micon-Flag-2"></i>
                        <span>English, Bulgarian</span>
                    </div>
                    <div class="col-xl-5 d-flex align-items-center gap-3">
                        <i class="mw-micon-Telephone"></i>
                        <span>+359 899 899 899</span>
                    </div>
                </div>

                <div class="mt-4">
                    <module type="btn" button_style="btn-secondary" style="text-align: center;"
                            id="blog-content-button<?php print $contentId; ?>" text="Message Partner"/>
                </div>
            </div>

            <div class="col-xl-6 partners-inner-right-column no-element description edit dropcap typography-area" field="content" rel="content">

                <p>
                    One of the best things you can do to make your store successful is invest some time in writing great product descriptions.
                    You want to provide detailed yet concise information that will entice potential customers to buy.
                </p>

                <div class="right-side-elements-wrapper safe-mode nodrop">
                    <div class="cloneable px-0 element safe-mode d-flex align-items-center gap-3 py-3">
                        <i class="safe-element no-typing mw-micon-Starfish"></i>
                        <span>
                            Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                features — try to
                                limit each one to 5-8 words.
                        </span>
                    </div>
                    <div class="cloneable px-0 element safe-mode d-flex align-items-center gap-3 py-3">
                        <i class="safe-element no-typing mw-micon-Starfish"></i>
                        <span>
                            Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                features — try to
                                limit each one to 5-8 words.
                        </span>
                    </div>
                    <div class="cloneable px-0 element safe-mode d-flex align-items-center gap-3 py-3">
                        <i class="safe-element no-typing mw-micon-Starfish"></i>
                        <span>
                            Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                features — try to
                                limit each one to 5-8 words.
                        </span>
                    </div>

                    <div class="cloneable px-0 element safe-mode d-flex align-items-center gap-3 py-3">
                        <i class="safe-element no-typing mw-micon-Starfish"></i>
                        <span>
                            Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                features — try to
                                limit each one to 5-8 words.
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
