<?php 
include 'header.php'; 
?>
<?php
$sql = "DELETE FROM comments WHERE commentid=".$_GET['commentid']."";

mysqli_query($conn, $sql);

goback();

?>