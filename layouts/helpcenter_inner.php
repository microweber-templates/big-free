<?php include template_dir() . "header.php"; ?>





<?php
$post = get_content_by_id(CONTENT_ID);
$picture = get_picture(CONTENT_ID);

if (!$picture) {
    $picture = '';
}

$itemData = content_data(CONTENT_ID);
$itemTags = content_tags(CONTENT_ID);
?>


<style>
    .mw-features-blog-page-nav-right-side-wrapper {
        .module-toc {
            ul {
                padding-left: 0;

                li {
                    padding-bottom: 10px;

                    a {
                        color: #909090;
                    }

                    a:hover {
                        color: #000;
                    }
                }
            }
        }
    }

    @media (max-width: 992px) {
        .mw-features-blog-page-nav-right-side-wrapper {
            position: sticky !important;
            top: 0;
            z-index: 2;
            background-color: #fff;
            margin-bottom: 30px;

        }
        .navbar-collapse {
            border: 1px solid #ececec;
        }
    }


    .mw-features-blog-page-nav-wrapper {
        position: sticky;
        top: 25px;
        z-index: 1;
        max-height: calc(100vh - 100px);
        overflow: auto;
    }
</style>

<div class="blog-inner-page py-5" id="blog-content-<?php print CONTENT_ID; ?>">
    <div class="container-fluid mw-m-t-30 mw-m-b-50">
        <div class="row">
            <module class="text-center mb-5" type="breadcrumb"/>

            <div class="d-flex flex-wrap  position-relative">
                <div class="col-lg-9 col-12 order-lg-1 order-2">

                    <div class="text-center my-5">
                        <h2 class="mt-2 text-center  text-dark edit plain-text" field="title"
                            rel="content"><?php echo $post['title']; ?></h2>
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


                </div>

                <div class="col-lg-2 col-12 ms-auto position-relative mw-features-blog-page-nav-right-side-wrapper order-lg-2 order-1">
                    <div class="mw-features-blog-page-nav-wrapper">
                        <nav class="navbar navbar-expand-lg navbar-light mw-features-blog-page-nav">
                            <button class="navbar-toggler w-100 collapsed" type="button" data-toggle="collapse"
                                    data-target="#mw-features-blog-sidebar" aria-controls="mw-features-blog-sidebar"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
                            </button>

                            <div class="collapse navbar-collapse" id="mw-features-blog-sidebar">
                                <div class="flex-shrink-0 p-lg-0 ps-5 pt-5 px-1 w-100">
                                    <label style="font-size: 12px;">IN THIS GUIDE</label>
                                    <hr class="thin"/>
                                    <module type="toc"/>
                                </div>
                            </div>
                        </nav>
                    </div>

                </div>


            </div>

            <div class=" mt-5 py-3">
                <h6>Share this article:</h6>
                <module type="sharer" id="post-bottom-sharer"/>
            </div>

        </div>
    </div>


</div>

<?php include template_dir() . "footer.php"; ?>
