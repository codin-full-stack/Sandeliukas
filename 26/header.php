<?php
require_once "config.php";
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>
        <?php
        if(isUserLogged()) {
            echo 'Prisijungta: ' . $_SESSION['surname'];
        } else {
            echo 'Prisijunk!';
        }
        ?>
    </title>
    <meta charset="utf-8">
</head>
<body>
<?php
include_once "menu.php";
if(isUserLogged()) {
    echo 'Prisijungta: ' . $_SESSION['surname'].'<br>';
}
?>