<?php
include "header.php";
?>
<div class="myP2">
<?php
//checkSession($_SESSION['id'],$_SESSION['name'],$_SESSION['surname']);   
showJson (filePath('json','','sarasas'));
?>
</div>

<?php
include 'footer.php';
?>