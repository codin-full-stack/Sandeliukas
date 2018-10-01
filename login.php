<?php include "header.php";

        if(isUserLogged()) {
            if(isset($_SESSION["id"])){
                unset($_SESSION["id"]);
                unset($_SESSION["name"]);
                unset($_SESSION["surname"]);
              
            }
            session_destroy();
            session_start();
        }

        $_POST['pass']=md5($_POST['pass']);
      
        $sql = "SELECT id,name,surname,pass FROM person_information";
        $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

                    if (($row['name']==$_POST['name']) and ($row['surname']==$_POST['surname']) and ($row['pass']==$_POST['pass'])){

                        $_SESSION=[
                            'id'=>$row['id'],
                            'name'=>$row['name'],
                            'surname'=>$row['surname'],
  
                        ];
                        header("Location:admin.php");
                        // echo "<br>Prisijungimas pavyko<br><a href='admin.php'>Vartotojo zona</a>";

                    }
                    
                     
                
                 
                }

                mysqli_free_result($result);
                echo "Neteisingi duomenys";

            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }


 include "footer.php";
?>