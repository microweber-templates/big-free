<?php

/* Phone */

$phone_text = get_option('phone_text', $params['id']);
if ($phone_text == '') {
    $phone_text = $default_phone_text;
}
$phone_text_value = get_option('phone_text_value', $params['id']);
if ($phone_text_value == '') {
    $phone_text_value = $default_phone_text_value;
}
