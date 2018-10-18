<?php include 'header.php'; 

$sql = "SELECT hint.userid, hint.postid, hint.title, hint.content, hint.postimg, person_information.name, person_information.surname, person_information.photo, hint.date, hint.time
FROM hint
JOIN person_information ON hint.userid = person_information.id
ORDER BY hint.time DESC";
?>
   
  
    <div class="container">
       
    <?php 
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){ 
            while($row = mysqli_fetch_array($result)){ 
                
            ?>
            <div class="box">
            <?php
                 if (!empty($row['postimg'])){  ?>
                <div class="box-image-container" style="background-image: url(<?php echo $row['postimg']; ?>);"></div>   
                <?php } ?>
                
                <div class="box-title">
                    <div class="box-heading">
                    <?php echo $row['title'];?>
                    <?php echo "<p2><br><a class='two' style='color:lightblue' href='post.php?postid=".$row['postid']."'>Skaityti ></a></p2>"; ?>
                    </div>
                </div>
            
            </div>

            <?php 
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