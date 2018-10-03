
<?php include "header.php";
    ?>
    <div id="myP1">
    <?php
    if (($_POST['pass']!=="") && ($_POST['newpass']!=="") && ($_POST['passconf']!=="") )
    {     
        
        $_POST['pass']=md5($_POST['pass']);     
            if ($_POST['newpass']==$_POST['passconf']){                        
                $_POST['newpass']=md5($_POST['newpass']);                   
                unset ($_POST['passconf']);
                $sql = "SELECT id,name,surname,pass FROM person_information";
                // $result = $conn->query($sql);
                if($result = mysqli_query($conn, $sql)){
                    if(mysqli_num_rows($result) > 0){                       
                        while($row = mysqli_fetch_assoc($result)){                   
                            if (($row['name']==$_SESSION['name']) and ($row['surname']==$_SESSION['surname']) and ($row['pass']==$_POST['pass'])){                            
                                $sql2 = "UPDATE person_information SET pass='".$_POST['newpass']."' WHERE id=".$row['id']."";
                                mysqli_query($conn, $sql2);                              
                                echo "Slaptažodis pakeistas";                              
                            }
                            elseif (($row['name']==$_SESSION['name']) and ($row['surname']==$_SESSION['surname']) and ($row['pass']!==$_POST['pass'])){
                                echo "Neteisingas esamas slaptažodis";
                                alert();
                            }                        
                        }
                                      
                        // Free result set
                        mysqli_free_result($result);
                    } else{
                        echo "No records matching your query were found.";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
        // ___________________________________________________________________________________________________
                // $filename = filePath('json',$_SESSION['name'],$_SESSION['surname']);
                // $json = file_get_contents($filename);
                // $masJson=(json_decode($json, true));
                // $masJson['pass']=$_POST['newpass'];  
                // $data = encode($masJson);
                // file_put_contents(filePath('json',$_SESSION['name'],$_SESSION['surname']),$data);
            }
            else {
                echo "Nauji  slaptažodžiai nesutampa";
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