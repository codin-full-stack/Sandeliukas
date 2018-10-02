<?php include 'header.php'; ?>
<div class="myP3">
<?php
$sql = "SELECT hint.postid, hint.title, hint.content, hint.userid, person_information.name, person_information.surname, hint.date
FROM hint 
JOIN person_information ON hint.userid = person_information.id 
WHERE hint.postid=".$_GET['postid']." LIMIT 1";


if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
                         
        $row = mysqli_fetch_assoc($result);

        echo "<h1>". $row['title'] . "</h1><br><br>";                
                echo  $row['content'] . "<br><br>";           
                echo  $row['name'] .' '.$row['surname'] . "<br>";               
                echo  $row['date'] . "<br><br>";  

        if(isUserLogged()) {
        ?>

        <form action="commentfin.php?postid=<?php echo $row['postid'] ?>" method="post" enctype="multipart/form-data">
            <p2>Komentuoti: </p2>                      
            <textarea rows="10" name="comment" id="comment" cols="111" class="inputfieldc" required></textarea><br>
            <div class="submitblockpost">
            <button type="submit" class="submitbtnpost">Skelbti</button>   
            </div>  
            
        </form>
        <?php
        }
        else {
            echo "<font color='darkred'> Komentuoti galima tik prisijungus</font><br>";
        }   
                        
                  
            

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
                    echo "<table>";
                      
                    while($row2 = mysqli_fetch_array($result2)){  
                        if ((isUserLogged())  and ($_SESSION['id']==$row2['usrid'])){
                    
                            echo "<tr>";
                            echo "<td>";                    
                            echo  $row2['comment'] . "<br>";           
                            echo  $row2['name'] .' '.$row2['surname'] . "<br>";               
                            echo  $row2['commtime'] . "<br>";  
                            echo "<a href='commedit.php?commentid=".$row2['commentid']."'>Redaguoti komentarą</a><br>";
                            echo "<a href='commdelete.php?commentid=".$row2['commentid']."'>Naikinti komentarą</a><br>";
                            echo "</tr>";
                            echo "</td>";
                        }
                        else {
                            echo "<tr>";
                            echo "<td>";                    
                            echo  $row2['comment'] . "<br>";           
                            echo  $row2['name'] .' '.$row2['surname'] . "<br>";               
                            echo  $row2['commtime'] . "<br>";  
                            echo "</tr>";
                            echo "</td>";
                        }
                    }
                    echo "</table>"; 
                }       
                      
                mysqli_free_result($result2);
               
            }
            
            else {
                echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
            }

?>
</div>

<?php
include 'footer.php';
?>           