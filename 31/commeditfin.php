<?php 
include 'header.php'; 
?>
<?php
date_default_timezone_set('Europe/Vilnius');

$sql = "UPDATE comments SET  comment='".$_POST['comment']."', commtime='".date('Y-m-d G:i:s')."' WHERE commentid=".$_GET['commentid']."";
mysqli_query($conn, $sql);
header("Location:comment.php?postid='".$_GET['hintid']."'");




    

?>
<?php
include 'footer.php';
?>    