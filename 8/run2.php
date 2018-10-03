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
    echo $p.$z.$a."=";
    
    switch ($z) {
        case "+" :
            return $p+$a;

        case "-" :
            return $p-$a;

        case "*" :
            return$p*$a;

        case "/" :
            return $p/$a;

        
    }   

}
   
    echo SkVeiksmas($_GET["a"],$_GET["zenklas"],$_GET["b"]);



?>
</header>
</body>
</html>