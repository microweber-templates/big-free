<?php

/*

type: layout
content_type: dynamic
name: Shop with sidebar
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 4
*/

?>

<?php include template_dir() . "header.php"; ?>


<div class="container-fluid">
    <div class="edit" rel="content" field="content">

        <module type="layouts" template="titles/skin-1"/>
    </div>


    <div class="row justify-content-between">
        <div class="col-12 col-lg-9">
            <div class="edit" rel="content" field="shop-content">
                <module type="layouts" template="ecommerce/skin-1"/>

            </div>
        </div>


        <div class="col-12 col-lg-3">
            <div class="edit" rel="content" field="shop-sidebar">
                <?php include(__DIR__ . DS .'shop_sidebar.php'); ?>
            </div>
        </div>

    </div>
</div>



<?php include template_dir() . "footer.php"; ?>
