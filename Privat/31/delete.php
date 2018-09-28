<?php 
include 'header.php'; 
?>
<?php
$sql = "DELETE FROM person_information WHERE id=".$_SESSION['id']."";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
if(isUserLogged()) {
    if(isset($_SESSION["id"])){
        unset($_SESSION["id"]);
        unset($_SESSION["name"]);
        unset($_SESSION["surname"]);
      
    }
    session_destroy();
    session_start();
}
header("Location:index.php");
// echo "<br><br><a href='index.php'>Naujienos</a><br>";

?>