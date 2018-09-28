<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<?php
function chekField($x) {


    if  (!empty($x)) {
        return $x;
    }  else 

        {
        return ' Klaida ';
        }
    // if ((empty($_GET["p"])) and (empty($_GET["v"]))) {
    //     echo "Klaida! Neužpildyta! \n"; 
    // }
    // else 
    // if  (!empty($_GET["v"])) {
    //     echo $_GET["v"],"\n"; 
    
    // }  
        
    // if (!empty($_GET["p"])) {
    //     echo $_GET["p"]."\n"; 

    // } 

}

echo chekField($_GET["v"]);

echo chekField($_GET["p"]);
/*
if  (!empty($_GET["v"])) {
    echo $_GET["v"],"\n"; 

}  

if (!empty($_GET["p"])) {
    echo $_GET["p"]."\n"; 

} 


if ((empty($_GET["p"])) and (empty($_GET["v"]))) {
    echo "Klaida! Neužpildyta! \n"; 
}
*/

    ?>
</header>
<title><?php print $_GET["v"]; ?> <?php echo $_GET["p"]; ?></title>

</body>
</html>