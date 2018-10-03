
<?php include "header.php";
    ?>
    <div id="myP1">
    <?php
    if (($_POST['pass']!=="") && ($_POST['newpass']!=="") && ($_POST['passconf']!=="") )
    {     
        
        $_POST['pass']=md5($_POST['pass']);
        if ($_SESSION['pass']==$_POST['pass']){               
            if ($_POST['newpass']==$_POST['passconf']){                        
                $_POST['newpass']=md5($_POST['newpass']);                   
                unset ($_POST['passconf']);
        // ___________________________________________________________________________________________________
                $filename = filePath('json',$_SESSION['name'],$_SESSION['surname']);
                $json = file_get_contents($filename);
                $masJson=(json_decode($json, true));
                $masJson['pass']=$_POST['newpass'];  
                $data = encode($masJson);
                file_put_contents(filePath('json',$_SESSION['name'],$_SESSION['surname']),$data);
                if(isUserLogged()) {
                    if(isset($_SESSION["id"])){
                        unset($_SESSION["id"]);
                        unset($_SESSION["name"]);
                        unset($_SESSION["surname"]);
                    }
                    session_destroy();
                    session_start();              
                    include "logform.php";                   
                }
                
            }
            else {
                echo "Nauji  slaptažodžiai nesutampa";
                alert();
            }
        }
        else {
            echo  "Neteisingas  esamas slaptažodis";
            alert();
        }

    }
    else {
        echo "Nesuvesti duomenys";
        alert();
    }
    ?>
    </div>
    <?php
include "footer.php";
?>