<?php include 'config.php'; 
$ipaddress = $_SERVER['REMOTE_ADDR'];



$sql = "SELECT ip FROM data";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            if ($row['ip']==$ipaddress){
                header("Location:error.php"); 
            }

        
        }
    } 
    mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>



<div class="panel">
     
<form action="run.php" method="post">

    Miestas:<br>
    <select name="city">
            <option value="Vilnius">Vilnius</option>
            <option value="Kaunas">Kaunas</option>
            <option value="Klaipeda">Klaipeda</option>
            <option value="Siauliai">Siauliai</option>
          </select><br><br>
          
    Lytis:<br>
    <input type="radio" name="genre" value="Kita" checked>Kita<br>
    <input type="radio" name="genre" value="Vyras" >Vyras<br>
    <input type="radio" name="genre" value="Moteris" >Moteris<br>

    Amzius: <br>
    <input type="number" name="age" required><br>

    Pomegiai: <br>
    <textarea rows="10" name="likes" id="like" cols="20" class="inputfieldp"></textarea><br>
  
    <button type="submit" class="button">Taip</button>
</form>

</div>
   
     



</body>
</html>
