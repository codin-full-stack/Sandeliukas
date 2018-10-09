<?php 
include 'header.php'; 
?>
<?php
date_default_timezone_set('Europe/Vilnius');

$sql = "INSERT INTO comments (hintid, usrid, comment, commtime) VALUES ('" . $_GET['postid'] . "','" . $_SESSION['id'] . "','" . $_POST['comment'] . "','" .date('Y-m-d G:i:s'). "')";			
mysqli_query($conn, $sql);
    ?>
    <div id="popup1" class="overlay">
    <div class="popup">
		<h2>Here i am</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
    </div>
    </div>
    <?php
goback();


?>
<?php
include 'footer.php';
?>    