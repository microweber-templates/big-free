<?php

/*

  type: layout
  content_type: static
  name: Menu - skin-3
  position: 3
  description: Menu - skin-3
  categories: Menu


*/

?>

<?php


$header_top_menu = get_option('header_top_menu', 'header-layout');
if ($header_top_menu) {
    ?>
    <div class="templates-top-header-menu">
        <?php include template_dir() . "modules/layouts/templates/menus/templates-top-header-menu.php"; ?>
    </div>
    <?php
}
?>

<style>

    .mw-menu-skin-com .container-fluid {
        position: relative;
        z-index: 1;
        padding: 10px 0;
    }

    .mw-menu-skin-com {
        position: sticky;
        top: 0;
        z-index: 20;
        backdrop-filter: saturate(180%) blur(20px);
    }

    .mw-menu-skin-com ul > li > a {
        color: #fff;
        display: inline-block;
        line-height: 50px;
        position: relative;
        transition: .3s;
    }

    .mw-menu-skin-com ul > li {
        position: relative;
        padding: 0 30px !important;
    }

    .mw-menu-skin-com ul > li > a span:after {
        position: absolute;
        content: '';
        bottom: 10px;
        left: 0;
        height: 1px;
        width: 70%;
        background-color: var(--mw-header-link-hover-color);
        transition: .5s;
        opacity: 0;
    }

    .mw-menu-skin-com ul > li > a:hover {
        opacity: .8;
    }

    .mw-menu-skin-com ul > li > a:hover span:after {
        width: 100%;
        opacity: 1;
    }

</style>

<section class="header-background px-0 mw-menu-skin-com" id="mw-header-background">

    <script>

        addEventListener('DOMContentLoaded', e => {
            mw.MWSiteMobileMenu({
                threshold: 1024,
                size: '25px',
                color: 'var(--primaryColor)',
            }, 5);
        });
    </script>


    <div class="container-fluid px-md-5 px-3">
        <div class="row col-12 d-flex justify-content-between align-items-center order-1">
            <module type="logo" id="header-logo-<?php print $params['id']; ?>" class="col-auto mw-big-header-logo w-auto align-self-center  my-md-0 my-1 module module-logo "/>

            <div class="menu-header-skin-1 col-auto d-flex align-items-center justify-content-center order-lg-2 order-3 ">
                <div class="mw-vhmbgr--navigation">
                    <module type="menu" name="header_menu" id="header_menu-<?php print $params['id']; ?>12" template="navbar"/>
                </div>
            </div>

            <div class="col-auto order-lg-3 order-2 ms-lg-0 ms-auto">
                <module type="btn" id="header_menu-<?php print $params['id']; ?>button"/>
            </div>
        </div>
    </div>
</section>




