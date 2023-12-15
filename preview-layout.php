<?php
include_once 'header-scripts.php';
?>

<?php
$layoutFile = false;
if (isset($_GET['layout'])) {
    $getLayout = $_GET['layout'];
    $layoutFile = $getLayout;
}
?>
<div id="preview-layout-file">
    <module id="<?php echo md5($layoutFile); ?>-layout" type="layouts" template="<?php echo $layoutFile; ?>" />
</div>
<?php
include_once 'footer-scripts.php';
?>
