<?php 
include 'header.php'; 
?>
<?php
date_default_timezone_set('Europe/Vilnius');

$sql = "INSERT INTO comments (hintid, usrid, comment, commtime) VALUES ('" . $_GET['postid'] . "','" . $_SESSION['id'] . "','" . $_POST['comment'] . "','" .date('Y-m-d G:i:s'). "')";			
mysqli_query($conn, $sql);

goback();


?>
<?php
include 'footer.php';
?>    