<?php

/*

  type: layout
  content_type: static
  name: Menu - skin-1
  position: 1
  description: Menu - skin-1
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

<section class="header-background px-0">

    <script>

         addEventListener('DOMContentLoaded', e => {
            mw.MWSiteMobileMenu({
                threshold: 1024,
                size: '25px',
                color: 'var(--primaryColor)',
            }, 5);
        });
    </script>


    <div class="container-fluid px-5 justify-content-center">
        <div class="row col-12 d-flex justify-content-center ">
           <module type="logo" id="header-logo-<?php print $params['id']; ?>" class="me-auto col-auto col-xl-4 mw-big-header-logo w-auto align-self-center  my-md-0 my-1 px-0 module module-logo "/>

            <div class="menu-header-skin-1 col-auto d-flex align-items-center justify-content-end">
                <div class="mw-vhmbgr--navigation">
                    <module type="menu" name="header_menu" id="header_menu-<?php print $params['id']; ?>12" template="navbar"/>
                </div>
            </div>
        </div>
    </div>
</section>




