<?php include "header.php";?>
<div class="myP2">
<?php

    $filename=filePath('json',$_GET['name'],$_GET['surname']);
    showJson ($filename);
?>
</div>
<?php include "footer.php";?>
