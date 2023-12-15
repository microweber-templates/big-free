<?php
include_once 'header-scripts.php';
?>

<?php
$skinFile = false;
$moduleFile = false;
if (isset($_GET['skin'])) {
    $skinFile = $_GET['skin'];
}
if (isset($_GET['module'])) {
    $moduleFile = $_GET['module'];
}

$addDisplayInline = true;
if (strpos($moduleFile, 'pictures') !== false) {
    $addDisplayInline = false;
}
?>

<?php
if ($addDisplayInline) {
    ?>
    <style>
        #preview-skin-file .module {
            display: inline-block;
        }
    </style>
    <?php
}
?>
<style>
    #preview-skin-file .module {
        padding:10px;
    }
</style>

<div id="preview-skin-file">
    <module id="<?php echo md5($skinFile . $moduleFile); ?>-module" type="<?php echo $moduleFile;?>" template="<?php echo $skinFile; ?>" />
</div>

<?php
include_once 'footer-scripts.php';
?>
