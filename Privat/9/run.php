<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>

<header>
<?php

$mas = array($_POST["v"],$_POST["p"],$_POST["d"],$_POST["c"]);



    $kiek=count($mas);
    for ($x=0; $x<$kiek; $x++)
        { 
        echo ($mas[$x]." ");
        }

echo "<br><br>";

    foreach  ($mas as $reiksme)
        {
        echo $reiksme." ";
        }

echo "<br><br>";

        $x=0;
        do
        {
        echo ($mas[$x]." ");
        $x++;
        }
        while  ($x<$kiek);

echo "<br><br>";
        $x=0;
        while  ($x<$kiek)
        {
        echo ($mas[$x]." ");
        $x++;
        }
       


 ?>

</header>

</body>
</html>