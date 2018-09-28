<html>
<head>
                <link rel="stylesheet" href="style.css">
                <title>Auris</title>
                
                
                </head>
<body>
<header>
<br>
<?php
function skVeiksmas($p,$z,$a) {
    $rez=$p.$z.$a."=";
    eval ('$rez.= round('.$p.$z.$a.',2);');
    //var_dump ($rez);
    // return round($rez,2);
    return $rez;

}
    
    echo    SkVeiksmas($_GET["a"],$_GET["zenklas"],$_GET["b"]);



?>
</header>
</body>
</html>