<?php

/* Sticky nav */

$sticky_navigation = get_option('sticky_navigation', $params['id']);
if ($sticky_navigation == '') {
    $sticky_navigation = 'true';
}
