<?php
include "header.php";
checkSession($_SESSION['id'],$_SESSION['name'],$_SESSION['surname']);
include "footer.php";     
?>