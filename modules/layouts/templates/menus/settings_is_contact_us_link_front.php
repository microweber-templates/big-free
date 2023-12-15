<?php

/* Contact Us */

$contact_us_link = get_option('contact_us_link', $params['id']);
if ($contact_us_link == '') {
    $contact_us_link = $default_contact_us_link;
}
