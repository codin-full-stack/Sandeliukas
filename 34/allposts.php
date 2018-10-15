<?php include 'header.php'; ?>
<div class="myP2">
<div class="box-user">
<form method="post" >
    <div class="inputblock">
        <p2>Straipsniai pagal data: </p2>
        <input class="inputfield" type="date" name="day" value="<?php echo date("Y-m-d");?>">
    </div>
    <div class="submitblockpost">
        <button type="submit" class="submitbtnpost">Taip</button> 
    </div>
</form>
<br>


<?php


$sql = "SELECT hint.userid, hint.postid, hint.title, hint.content, hint.postimg, person_information.name, person_information.surname, person_information.photo, hint.date, hint.time
FROM hint
JOIN person_information ON hint.userid = person_information.id
ORDER BY hint.time DESC";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){

        if ( (isUserLogged()) ){
        
            echo "<br><a href='postnew.php?userid=".$_SESSION['id']."'>Naujas straipsnis ></a><br><br>"; 
            ?></div><?php 	

            while($row = mysqli_fetch_array($result)){ 
     
                if ( (isset($_POST['day']))and(($_POST['day'])==($row['date'])) ){   
                    ?>
                    <div class="box-user">
                    <?php                                 
                    echo "<br><h1 class='one'>". $row['title']."</h1>";               
                    ?>
                    <div class="box-post">
                    <?php             
                    echo $row['content'] . "<br><br>";  
                    
                    ?>
                    </div>
                    <?php  
                    echo "<a href='post.php?postid=".$row['postid']."'>Skaityti ></a><br><br>";
                    if (!empty($row['postimg'])){
                        echo "<img src=". $row['postimg'] ." alt=\"\"  width='100%'  /><br><br>";      
                        }     
                    if (!empty($row['photo'])){
                        echo "<img src=". $row['photo'] ." alt=\"\"  width='50'  /><br>";      
                        }        
                    echo $row['name'] ."  ". $row['surname'] . "<br>";               
                    echo $row['date'] . "<br>";
                  
                    ?>
                    </div>
                    <?php         
                }  
                elseif (!isset($_POST['day'] )){
                    ?>
                    <div class="box-user">
                    <?php 
                    echo "<br><h1 class='one'>". $row['title']."</h1>";               
                    ?>
                    <div class="box-post">
                    <?php             
                    echo $row['content'] . "<br><br>";  
                    
                    ?>
                    </div>
                    <?php  
                    echo "<a href='post.php?postid=".$row['postid']."'>Skaityti ></a><br><br>";  
                    if (!empty($row['postimg'])){
                        echo "<img src=". $row['postimg'] ." alt=\"\"  width='100%'  /><br><br>";      
                        }     
                    if (!empty($row['photo'])){
                        echo "<img src=". $row['photo'] ." alt=\"\"  width='50'  /><br>";      
                    }
                    echo $row['name'] ."  ". $row['surname'] . "<br>";               
                    echo $row['date'] . "<br>";

                    ?>
                    </div>
                    <?php    

                }    
  
            }

        }
        else {
            ?></div><?php 	
            while($row = mysqli_fetch_array($result)){	

                if ( (isset($_POST['day']))and(($_POST['day'])==($row['date'])) ){     
                    ?>
                    <div class="box-user">
                    <?php               
                    echo "<br><h1 class='one'>". $row['title']."</h1>";  
                    ?>
                    <div class="box-post">
                    <?php             
                    echo $row['content'] . "<br><br>";  
                    
                    ?>
                    </div>
                    <?php 
                    echo "<a href='post.php?postid=".$row['postid']."'>Skaityti ></a><br><br>";    
                    if (!empty($row['postimg'])){
                        echo "<img src=". $row['postimg'] ." alt=\"\"  width='100%'  /><br><br>";      
                        }     
                    if (!empty($row['photo'])){
                        echo "<img src=". $row['photo'] ." alt=\"\"  width='50'  /><br>";      
                        }       
                    echo $row['name'] ."  ". $row['surname'] . "<br>";               
                    echo $row['date'] . "<br>";

                    ?>
                    </div>
                    <?php   
                    }
                elseif (!isset($_POST['day'] )){
                    ?>
                    <div class="box-user">
                    <?php
                    echo "<br><h1 class='one'>". $row['title']."</h1>";               
                    ?>
                    <div class="box-post">
                    <?php             
                    echo $row['content'] . "<br><br>";  
                    ?>
                    </div>
                    <?php   
                    echo "<a href='post.php?postid=".$row['postid']."'>Skaityti ></a><br><br>"; 
                    if (!empty($row['postimg'])){
                        echo "<img src=". $row['postimg'] ." alt=\"\"  width='100%'  /><br><br>";      
                        }    
                    if (!empty($row['photo'])){
                        echo "<img src=". $row['photo'] ." alt=\"\"  width='50'  /><br>";      
                        }         
                    echo $row['name'] ."  ". $row['surname'] . "<br>";               
                    echo $row['date'] . "<br>";

                    ?>
                    </div>
                    <?php 
                }

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

<?php
include 'footer.php';
?>