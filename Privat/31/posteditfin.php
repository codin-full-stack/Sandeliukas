<?php 
include 'header.php'; 
?>
<?php
date_default_timezone_set('Europe/Vilnius');
if  (empty($_FILES['img']['name'])){
    $path = (!empty($_POST['existing_image']) ? $_POST['existing_image'] : 'NULL');
    // var_dump($path);
} else {
    $picture_tmp = $_FILES["img"]["tmp_name"];
    // var_dump($_FILES["img"]);

    $picture_nameo = explode(".", $_FILES["img"]["name"]);
    // var_dump($picture_nameo);
    $picture_name = date('Y-m-d').'_'.date('G-i-s').".". end($picture_nameo);
    // var_dump($picture_name);
    $picture_type = $_FILES["img"]["type"];
    // var_dump($picture_type);
    $allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');

    if(in_array($picture_type, $allowed_type)) {
        $path = 'images/'.$picture_name; //change this to your liking
// var_dump($path);
        move_uploaded_file($picture_tmp, $path);
    } else {
        echo 'File type not allowed';
    }
}

$sql = "UPDATE hint SET title='".$_POST['title']."', content='".$_POST['content']."', postimg='".$path."', date='".date("Y-m-d")."', time='".date('Y-m-d G:i:s')."' WHERE postid=".$_GET['postid']."";
mysqli_query($conn, $sql);

header("Location:index.php");

    

?>
<?php
include 'footer.php';
?>    