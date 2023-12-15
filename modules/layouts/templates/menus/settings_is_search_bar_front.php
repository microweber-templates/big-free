<?php

/* Search */

$search_bar = get_option('search_bar', $params['id']);
if ($search_bar == '') {
    $search_bar = $default_search_bar;
}


