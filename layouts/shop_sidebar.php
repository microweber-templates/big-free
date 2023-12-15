<div class="edit  " field="new-world_shop_sidebar" rel="inherit">
    <module type="spacer" id="spacer-layout-shop-sidebar-top" />

    <div class="sidebar">
        <div class="sidebar__widget search-holder">
            <module type="search" template="autocomplete" data-search-type="shop"/>
        </div>

        <div class="sidebar__widget mb-4">
            <h4 class="mb-2"><?php _lang("Categories", "templates/new-world"); ?></h4>

            <module type="categories" content-id="<?php print PAGE_ID; ?>"/>
        </div>

        <div class="sidebar__widget mb-4">
            <h4 class="mb-2"><?php _lang("Tags", "templates/new-world"); ?></h4>

            <module type="tags" template="skin-1"/>
        </div>

        <div class="sidebar__widget mb-4">
            <h4 class="mb-2"><?php _lang("About Us", "templates/new-world"); ?></h4>
            <p>
                <?php _lang("We're a digital focussed collective working with individuals and businesses to establish rich, engaging online presences.", "templates/new-world"); ?>
            </p>
        </div>
    </div>
    <module type="spacer" id="spacer-layout-shop-sidebar-bottom" />

</div>


