<?php
include "header.php";?>
<div class="myP2">
<?php
 
        

         $sql = "SELECT * FROM person_information WHERE id='" . $_GET['id'] . "' LIMIT 1";
        // $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                
               
                // echo "<table>";
            
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="box-user">
                    <?php
                    // echo "<tr>";
                    //     echo "<td>";
                        echo "Vardas: " . $row['name'] . "<br>";
                        echo "Pavardė: " . $row['surname'] . "<br>";
                        if(! empty($row['city'])) {
                            echo "Miestas: " . cities($row['city']) . "<br>";
                        }
                        else{
                            echo "Miestas: ".$row['city']. "<br>";
                        }
                        echo "Adresas: " . $row['address'] . "<br>";
                        echo "Amžius: " . $row['age'] . "<br>";
                        echo "Telefonas: " . $row['phone'] . "<br>";
                        echo "El.Paštas: " . $row['mail'] . "<br>";
                        echo "<br>";
                        if (!empty($row['photo'])){
                        echo "<img src=". $row['photo'] ." alt=\"\" width='200'  />";
                        }
                        $name=$row['name']." ".$row['surname'];
                    //     echo "</td>";
                    // echo "</tr>";
                    ?>
                    </div>
                    <?php 
                 
                }
                // echo "</table>";
            
                // Free result set
                mysqli_free_result($result);
                
                

            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        
        

        $sql = "SELECT hint.userid, hint.postid, hint.title, hint.content, hint.postimg, person_information.name, person_information.surname, person_information.photo, hint.date, hint.time
        FROM hint
        JOIN person_information ON hint.userid = person_information.id
        ORDER BY hint.time DESC";

        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){

                    ?>
                    <div class="box-user">
                    <?php
                    echo "<br>".$name." straipsniai:"."<br>";
                  
                    
                    ?>
                    </div>
                    <?php 

                    while($row = mysqli_fetch_array($result)){	

                            
                        if ( ($_GET['id'])==($row['userid']) ){
                            ?>
                            <div class="box-user">
                            <?php
                            echo "<br><h1>". $row['title']."</h1>";               
                            echo $row['content'] . "<br><br>";     
                            if (!empty($row['postimg'])){
                                echo "<img src=". $row['postimg'] ." alt=\"\"  width='100%'  /><br><br>";      
                                }     
                            if (!empty($row['photo'])){
                                echo "<img src=". $row['photo'] ." alt=\"\"  width='50'  /><br>";      
                                }          
                            echo $row['name'] ."  ". $row['surname'] . "<br>";               
                            echo $row['date'] . "<br>";
                            echo "<a href='post.php?postid=".$row['postid']."'>Skaityti straipsnį >>></a><br><br>";   
                            ?>
                            </div>
                            <?php 
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


?>
</div>
<?php include "footer.php";     
?>