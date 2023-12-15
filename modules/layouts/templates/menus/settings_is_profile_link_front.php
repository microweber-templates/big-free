<?php

/* Profile link */

$profile_link = get_option('profile_link', $params['id']);
if ($profile_link == '') {
    $profile_link = $default_profile_link;
}
