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

$sql2 = "UPDATE person_information SET name='".$_POST['vardas']."', surname='".$_POST['pavarde']."', city='".$_POST['miestas']."', address='".$_POST['adresas']."', phone=".$_POST['telefonas'].", mail='".$_POST['mailas']."', age=".$_POST['amzius']." WHERE id=".$_SESSION['id']."";
mysqli_query($conn, $sql2); 
$_SESSION['name']=$_POST['vardas'];
$_SESSION['surname']=$_POST['pavarde'];
                         
echo "Duomenys atnaujinti";   
echo "<br><br><a href='admin.php'>Profilis</a><br>";

?>