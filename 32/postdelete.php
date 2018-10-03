<?php 
include 'header.php'; 
?>
<?php
$sql = "DELETE FROM hint WHERE postid=".$_GET['postid']."";

mysqli_query($conn, $sql);

header("Location:index.php");

?>