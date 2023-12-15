

<script src="<?php print template_url(); ?>dist/main.min.js"></script>


<?php $collaplseNav_file = normalize_path( mw_includes_path().'api/libs/collapse-nav/dist/collapseNav.js',false);   ?>
<?php if(is_file($collaplseNav_file)){ ?>
    <script>
        // collapse nav
        <?php print  @file_get_contents($collaplseNav_file) ?>
    </script>
<?php } ?>


<?php $collaplseNav_file = normalize_path( mw_includes_path().'api/libs/collapse-nav/dist/collapseNav.css',false);   ?>
<?php if(is_file($collaplseNav_file)){ ?>
    <style>
        // collapse nav
        <?php print  @file_get_contents($collaplseNav_file) ?>
    </style>
<?php } ?>
