<link rel="stylesheet" href="style.css">

<div class='menu'>
<?php
require_once "functions.php";
$json = file_get_contents(filePath('json','','menu'));
createMenu($json);
?>
</div>