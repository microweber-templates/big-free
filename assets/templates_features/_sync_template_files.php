<?php


if (!php_sapi_name() == "cli") {
    exit('cant run from browser');
}


$srcs = [
    'js',
    'css'
];

$dests = [];

$base_dir = dirname((dirname(dirname(__DIR__))));
$dirs = scandir($base_dir);
$current_dir = basename(dirname((dirname(__DIR__))));


foreach ($dirs as $dir) {
    if ($dir != $current_dir) {
        $check = $base_dir . '/' . $dir . '/assets/templates_features/';
        if (is_dir($check)) {
            $dests[] = $check;
        }
    }
}


if ($dests) {
    foreach ($dests as $dest) {
        foreach ($srcs as $src_dir) {
            $src = __DIR__ . '/' . $src_dir;
            if (!empty($dests)) {

                recurse_copy($src, $dest);
                print "Copied $src to $dest\n\n";

            }

            $releashe_sh_file = (dirname((dirname($dest)))).'/release.sh';
            if(is_file($releashe_sh_file)){
                exec($releashe_sh_file);
            }

        }

    }
}


function recurse_copy($src, $dst)
{

    $dir = opendir($src);
    $result = ($dir === false ? false : true);

    if ($result !== false) {
        $result = @mkdir($dst);

        if ($result === true) {
            while (false !== ($file = readdir($dir))) {
                if (($file != '.') && ($file != '..') && $result) {
                    if (is_dir($src . '/' . $file)) {
                        $result = recurse_copy($src . '/' . $file, $dst . '/' . $file);
                    } else {
                        $result = copy($src . '/' . $file, $dst . '/' . $file);
                    }
                }
            }
            closedir($dir);
        }
    }

    return $result;
}
