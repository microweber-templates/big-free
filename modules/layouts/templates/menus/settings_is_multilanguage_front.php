<?php

/* Multilanguage */

$multilanguage = get_option('multilanguage', $params['id']);

if ($multilanguage == '') {
    $multilanguage = $default_multilanguage;
}


