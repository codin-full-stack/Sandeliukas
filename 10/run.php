<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>

<header>
<?php

$mas = 
    [
    '1'=>$_POST["v"],
    '2'=>$_POST["p"],
    '3'=>$_POST["d"],
    '4'=>$_POST["c"]

];




    foreach  ($mas as $key=>$reiksme)
    // var_dump ($key);
    // var_dump ($reiksme);
        {
           
        echo $key.". ".$reiksme."<br>";
        }


 ?>

</header>

</body>
</html>