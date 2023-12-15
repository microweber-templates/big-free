<?php

/* Socials */

$header_socials = get_option('header_socials', $params['id']);


if ($header_socials == '') {
    $header_socials = $default_header_socials;
}
