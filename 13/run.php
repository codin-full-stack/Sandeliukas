<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>
<header>

<?php
//var_dump ($_POST);

foreach ($_POST['sutinku'] as $key => $value) 

{
  
    echo 'Sutinku paviešinti duomenis: '.$value."<br><br>";
    if ($value=='Taip')
            {
            foreach ($_POST as $key => $value)
                {
                $mas= [$key=> $key];
                    if ($key!='sutinku')
                    {
                    echo  $mas[$key]." ".$value."<br>";   
                    }
                  
                }
            }
    
    else 
            {
            echo 'ERROR!'.'<br>'; 
            echo 'reikia sutikti'.'<br>';       
            }

              
}

 

 ?>

</header>

</body>
</html>