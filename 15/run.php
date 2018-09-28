<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>


<?php
//var_dump ($_POST);

$mas = [
        'vardas' => 'Vardas  ',
        'pavarde' => 'Pavardė  ',
        'amzius' => 'Amzius  ',
        'miestas' => 'Miestas  '
       
];

foreach ($_POST as $key => $value){
        
        echo  $mas[$key]." ".$value."<br>"; 
        
      
        
}


?>



</body>
</html>