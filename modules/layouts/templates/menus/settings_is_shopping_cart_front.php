<?php

/* Contact */

$shopping_cart = get_option('shopping_cart', $params['id']);

if ($shopping_cart == '') {
    $shopping_cart = $default_shopping_cart;
}
