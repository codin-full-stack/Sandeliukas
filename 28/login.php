<?php include "header.php";
    if (isset($_POST['submit']))
    {
        $name="";
        $surname="";
        $pass="";
        if (($_POST['name']!==$name) && ($_POST['surname']!==$surname) && ($_POST['pass']!==$pass) )
        {
            $_POST['pass']=md5($_POST['pass']);
            $filename=filePath('json',$_POST['name'],$_POST['surname']);
            if(file_exists($filename)){
                echo "Rastas failas<br>";
                $json = file_get_contents($filename);
                $masJson=(json_decode($json, true));         
                if (($masJson['pass']==$_POST['pass']) && ($masJson['vardas']==$_POST['name']) && ($masJson['pavarde']==$_POST['surname'])){
                    $_SESSION=[
                        'id'=>'1',
                        'name'=>$_POST['name'],
                        'surname'=>$_POST['surname'],
                    ];
                    echo "<br>Prisijungimas pavyko<br><a href='admin.php'>Vartotojo zona</a>";
                } 
            }
            else   
                echo "Nėra tokio vartotojo";

        }
        else
            echo "Nesuvesti duomenys";
    }
 include "footer.php";
?>