<?php
require_once "config.php";
require_once "functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenew.css">
   
    <title>
        <?php
        if(isUserLogged()) {
            echo  $_SESSION['name'].' '.$_SESSION['surname'];
        } else {
            echo 'Prisijunk!';
        }
        ?>
    </title>
    <meta charset="utf-8">
    <script src="functions.js" async></script>
    <script src="snow.js" async></script>
    
</head>
<body>
<header>

<?php include_once "menu.php";?>
<div class='userbox'>
<?php

// include_once "menu.php";
if(isUserLogged()) {
    

    echo  $_SESSION['name'].' '.$_SESSION['surname'].'&nbsp;&nbsp;&nbsp;';

    $sql = "SELECT * FROM person_information";
    // $result = $conn->query($sql);
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){

            while($row = mysqli_fetch_assoc($result)){
                if ((($_SESSION['name'])==($row['name']) )and ( ($_SESSION['surname'])==($row['surname']) )){ 
                    if (!empty($row['photo'])){
                    echo "<img src=". $row['photo'] ." alt=\"\"  height='30' algin='right' />";
                    }
                }
            }
           
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }


}
else {
    echo 'Prisijunk!';
}
?>
</div>
</header>
<?php include_once "menu.php";?>

<