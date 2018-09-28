<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>


<?php
//var_dump ($_POST);

// foreach ($_POST['kalba'] as $key => $value) {
      
//     echo "Kalba: ".$value."<br><br>";
          
// }

foreach ($_POST as $key => $value){
  
        $mas=    [$key=> $key];
        echo  $mas[$key]." ".$value."<br>"; 


}
 ?>



</body>
</html>