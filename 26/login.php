<?php include "header.php";
//if (!empty($_POST['name'])and($_POST['surname'])){
    if (isset($_POST['submit']))
    {
            $name="Jonas";
            $surname="Jonaitis";
            if (($_POST['name']==$name) && ($_POST['surname']==$surname))
            {
                    //session_start();
                    $_SESSION=[
                        'id'=>'1',
                        'name'=>$name,
                        'surname'=>$surname,
                    ];
                    echo "Prisijungimas pavyko<br><a href='admin.php'>Vartotojo zona</a>";
            }
            else
                    echo "Neteisingas Vardas";
    }
    else {
        include_once "logform.php";
    }
// }
// else {
//     echo "Nėra duomenų!";
// }
 include "footer.php";
?>