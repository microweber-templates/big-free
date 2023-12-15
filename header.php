<?php
include_once 'header-scripts.php';
?>

<?php
$sticky_navigation = get_option('sticky_navigation', 'header-layout');

?>

<div class="main">

    <div class="position-relative <?php if($sticky_navigation == "yes"):?> mw-header-sticky-nav  <?php endif; ?>">

        <div class="navigation-holder">
            <module type="layouts" template="menus/skin-1" template-filter="menus" id="header-layout"/>
        </div>

    </div>

