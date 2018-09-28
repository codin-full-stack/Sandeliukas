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

$mas = [
        'vardas' => 'Vardas  ',
        'pavarde' => 'Pavardė  ',
        'amzius' => 'Amzius  ',
        'miestas' => 'Miestas  ',
        'kalba' => 'Kalba  ',
        'lytis' => 'Lytis  ',
        'File'=>'Failas '
];

foreach ($_POST as $key => $value){
        
        // echo  $key." ".$value."<br>"; 
        
        if ($key=='vardas' and $_POST['lytis'] =='Vyras'){
                echo "Sveikas!  ".$value."<br><br>";
        } elseif ($key == 'vardas' and $_POST['lytis'] == 'Moteris') {
                echo "Sveika!  ".$value."<br><br>";
        }
        
        echo  $mas[$key]; 
        echo  $value."<br>"; 
        
}


?>



</body>
</html>