<?php 
include 'header.php'; 
?>
<?php
if ($_POST['amzius'] == "") {
    $_POST['amzius']= 'NULL';
}
else {
    $_POST['amzius']=$_POST['amzius'];
}
if ($_POST['telefonas'] == "") {
    $_POST['telefonas'] = 'NULL';
}
else {
    $_POST['telefonas']=$_POST['telefonas'];
}
if  (empty($_FILES['img']['name'])){
    $path = (!empty($_POST['existing_image']) ? $_POST['existing_image'] : 'NULL');
    // var_dump($path);
} else {
    $picture_tmp = $_FILES["img"]["tmp_name"];
    // var_dump($_FILES["img"]);

    $picture_nameo = explode(".", $_FILES["img"]["name"]);
    // var_dump($picture_nameo);
    $picture_name = $_POST['vardas'].$_POST['pavarde'].".". end($picture_nameo);
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

$sql = "UPDATE person_information SET name='".$_POST['vardas']."', surname='".$_POST['pavarde']."', city='".$_POST['miestas']."', address='".$_POST['adresas']."', phone=".$_POST['telefonas'].", mail='".$_POST['mailas']."', age=".$_POST['amzius'].", photo='".$path."' WHERE id=".$_SESSION['id']."";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

$_SESSION['name']=$_POST['vardas'];
$_SESSION['surname']=$_POST['pavarde'];
                         
header("Location:admin.php");

?>
<?php
include 'footer.php';
?>    