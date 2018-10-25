<?php include 'config.php'; ?>

<?php





?>

<?php

$ipaddress = $_SERVER['REMOTE_ADDR'];

$sql = "INSERT INTO data (ip, city, genre, age, likes) VALUES ('".$ipaddress."','" . $_POST['city'] . "','" . $_POST['genre'] . "','" . $_POST['age'] . "','" . $_POST['likes'] . "')";	
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}



// header("Location:allposts.php");
 

?>



</body>
</html>