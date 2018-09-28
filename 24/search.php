<?php
include_once "menu.php";
?>
<div class="myP2">
<?php
    require_once "functions.php";
    $filename=filePath('json',$_GET['name'],$_GET['surname']);
    showJson ($filename);
?>
</div>

