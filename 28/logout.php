<?php 
session_start();
if(isset($_SESSION["id"])){
    unset($_SESSION["id"]);
    unset($_SESSION["name"]);
    unset($_SESSION["surname"]);
}
session_destroy();
header("Location: logform.php");
?>