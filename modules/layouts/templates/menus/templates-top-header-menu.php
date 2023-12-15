<?php

/*

  type: layout
  content_type: static
  name: Menu - top menu skin
  position: 99
  description: top menu skin

*/

?>

<?php
$default_contact_us_link = 'yes';
$default_header_socials = 'no';
$default_phone_text = 'no';
$default_phone_text_value = '0888 888 888';
$default_profile_link = 'no';
$default_search_bar = 'no';
$default_shopping_cart = 'no';
$default_multilanguage = 'yes';
$default_is_sticky_nav = 'no';

include(__DIR__.'/settings_is_search_bar_front.php');
include(__DIR__.'/settings_is_shopping_cart_front.php');
include(__DIR__.'/settings_is_contact_us_link_front.php');
include(__DIR__.'/settings_is_header_socials_front.php');
include(__DIR__.'/settings_is_phone_front.php');
include(__DIR__.'/settings_is_profile_link_front.php');
include(__DIR__.'/settings_is_sticky_nav_front.php');
include(__DIR__.'/settings_is_multilanguage_front.php');

?>

<div class="top-header-background header-top navbar">

      <div>
          <?php include template_dir() . "partials/header/parts/socials.php"; ?>
      </div>

      <div class="d-flex align-items-center flex-wrap">
          <?php include template_dir() . "partials/header/parts/multilanguage.php"; ?>
          <?php include template_dir() . "partials/header/parts/phone.php"; ?>
          <?php include template_dir() . "partials/header/parts/contact.php"; ?>
          <?php include template_dir() . "partials/header/parts/search_bar.php"; ?>
          <?php include template_dir() . "partials/header/parts/profile_link.php"; ?>
          <?php include template_dir() . "partials/header/parts/shopping_cart.php"; ?>
      </div>

</div>




