<?php include "header.php";
    // if (isset($_POST['submit']))
    // {   
        if(isUserLogged()) {
            if(isset($_SESSION["id"])){
                unset($_SESSION["id"]);
                unset($_SESSION["name"]);
                unset($_SESSION["surname"]);
                unset($_SESSION["pass"]);
            }
            session_destroy();
            session_start();
        }

        logIn($_POST['name'],$_POST['surname'],$_POST['pass']);


    // }
 include "footer.php";
?>