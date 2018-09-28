<link rel="stylesheet" href="style.css">
<?php
if (isset($_POST['submit']))
{
        $name="Vardas";
        $surname="Pavarde";
        $password="123";
        if (($_POST['user']==$name) && ($_POST['user']==$surname) && ($_POST['pass']==$password))
        {
                session_start();
                $_SESSION=[
                    'userid'=>1,
                    'username'=>$name,
                    'username'=>$surname,
                ];
                echo "Prisijungimas pavyko<br><a href='admin.php'>Admino zona</a>";
        }
        else
                echo "Blogas user/pass";
}
else {
    include_once "index.html";
}
?>