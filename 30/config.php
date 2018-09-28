<?php 
    session_start(); 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="auris";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
echo "<p align=\"RIGHT\">Prisijungta prie DB"."!</p>"
?>