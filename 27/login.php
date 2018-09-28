<?php include "header.php";
    if (isset($_POST['submit']))
    {
        $name="";
        $surname="";
        $pass="";
        if (($_POST['name']!==$name) && ($_POST['surname']!==$surname) && ($_POST['pass']!==$pass) )
        {
            $_POST['pass']=md5($_POST['pass']);
            $json = file_get_contents(filePath('json','','pass'));
            $masJson=(json_decode($json, true));
            foreach ($masJson as $raktas => $reiksme){
                if (($reiksme['pass']==$_POST['pass']) && ($reiksme['name']==$_POST['name']) && ($reiksme['surname']==$_POST['surname'])){
                    $_SESSION=[
                        'id'=>'1',
                        'name'=>$_POST['name'],
                        'surname'=>$_POST['surname'],
                    ];
                    echo "<br>Prisijungimas pavyko<br><a href='admin.php'>Vartotojo zona</a>";
                    break;
                }       
            }
            if (!isset($_SESSION['id'])){

                header("Location: logform.php");
            }
        }
            else
                    echo "Nesuvesti duomenys";
    }
 include "footer.php";
?>