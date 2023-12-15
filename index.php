<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 1
  description: Home
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" data-layout-container rel="content" field="content">
    <module type="layouts" template="header/skin-1"/>
    <module type="layouts" template="features/skin-2"/>
    <module type="layouts" template="videos/skin-1"/>
    <module type="layouts" template="gallery/skin-3"/>
    <module type="layouts" template="content/skin-2"/>
    <module type="layouts" template="blog/skin-1"/>
    <module type="layouts" template="testimonials/skin-3"/>

</div>

<?php include template_dir() . "footer.php"; ?>
