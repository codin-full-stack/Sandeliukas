<?php include 'header.php'; ?>
<!-- <div class="myP3"> -->
<?php
$sql = "SELECT hint.postid, hint.title, hint.content, hint.postimg, hint.userid, person_information.name, person_information.surname, person_information.photo, hint.date
FROM hint 
JOIN person_information ON hint.userid = person_information.id 
WHERE hint.postid=".$_GET['postid']." LIMIT 1";
?>
<div class="containerpost">
<div class="boxpost">
<?php	

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
                         
      
        $row = mysqli_fetch_assoc($result);

            if ( (isUserLogged())   and ( ($_SESSION['id']) == ($row['userid']) ) ){ 	
                ?>
                <div class="box-user">
                <?php		
                echo "<h1>". $row['title'] . "</h1>";                
                echo  $row['content'] . "<br><br>";   
                if (!empty($row['postimg'])){
                    echo "<img src=". $row['postimg'] ." alt=\"\"  width='100%'  /><br><br>";      
                    }    
                if (!empty($row['photo'])){
                    echo "<img src=". $row['photo'] ." alt=\"\"  width='50' /><br>";      
                    }       
                echo  $row['name'] .' '.$row['surname'] . "<br>";               
                echo  $row['date'] . "<br><br>"; 
                              
                echo "<a href='postedit.php?postid=".$row['postid']."'>Redaguoti įrašą</a><br>";  
                echo "<a href='postdelete.php?postid=".$row['postid']."'>Trinti įrašą</a><br><br>";  
                echo "<a href='comment.php?postid=".$row['postid']."'>Komentarai</a><br><br>"; 
                ?>
                </div>
                <?php  
                
            }   
            else {
                ?>
                <div class="box-user">
                <?php
                echo "<h1>". $row['title'] . "</h1><br><br>";                
                echo  $row['content'] . "<br><br>";   
                if (!empty($row['postimg'])){
                    echo "<img src=". $row['postimg'] ." alt=\"\"  width='100%'  /><br><br>";      
                    }      
                if (!empty($row['photo'])){
                    echo "<img src=". $row['photo'] ." alt=\"\"  width='50'  /><br>";      
                    }     
                echo  $row['name'] .' '.$row['surname'] . "<br>";               
                echo  $row['date'] . "<br><br>";  
                echo "<a href='comment.php?postid=".$row['postid']."'>Komentarai</a><br><br>";   
                ?>
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

$sql2 = "SELECT comments.commentid, comments.hintid, comments.comment, comments.usrid, person_information.name, person_information.surname, comments.commtime
        FROM comments
        JOIN person_information ON comments.usrid = person_information.id 
        WHERE comments.hintid=".$_GET['postid']." ORDER BY comments.commtime DESC";  
    

            if($result2 = mysqli_query($conn, $sql2)){
                if(mysqli_num_rows($result2) > 0){
                    echo "<br>";
                    // echo "<table>";
                      
                    while($row2 = mysqli_fetch_array($result2)){  
                        
                            ?>
                            <div class="box-user">
                            <?php
                            // echo "<tr>";
                            // echo "<td>";                    
                            echo  $row2['comment'] . "<br>";           
                            echo  $row2['name'] .' '.$row2['surname'] . "<br>";               
                            echo  $row2['commtime'] . "<br><br>";  
                            // echo "</tr>";
                            // echo "</td>";
                            ?>
                            </div>
                            <?php 
                                            }
                    // echo "</table>"; 
                }       
                      
                mysqli_free_result($result2);
               
            }
            
            else {
                echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
            }

?>
</div>
<?php
$sql = "SELECT hint.postid, hint.title, hint.content, hint.postimg, hint.userid, person_information.name, person_information.surname, person_information.photo, hint.date
FROM hint 
JOIN person_information ON hint.userid = person_information.id 
ORDER BY hint.time DESC";

?>
<div class="boxpost">

<div class="container2">
<?php	


if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){ 
        $i=1;
        while(($row = mysqli_fetch_array($result)) and ($i<9)){ 
            
        ?>
        <div class="box">
            <?php if (!empty($row['postimg'])){  ?>
                <div class="box-image-container" style="background-image: url(<?php echo $row['postimg']; ?>);"></div>   
            <?php } ?>
            
            <div class="box-title">
                <div class="box-heading">
                <?php echo $row['title'];?>
                <?php echo "<p2><br><a style='color:lightblue' href='post.php?postid=".$row['postid']."'>Skaityti straipsnį >>></a></p2>"; ?>
                </div>
            </div>
        
        </div>

        <?php 
        $i=$i+1;
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
</div>
</div>
<?php
include 'footer.php';
?>