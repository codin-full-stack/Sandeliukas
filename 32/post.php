<?php include 'header.php'; ?>
<div class="myP3">
<?php
$sql = "SELECT hint.postid, hint.title, hint.content, hint.postimg, hint.userid, person_information.name, person_information.surname, person_information.photo, hint.date
FROM hint 
JOIN person_information ON hint.userid = person_information.id 
WHERE hint.postid=".$_GET['postid']." LIMIT 1";


if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
                         
      
        $row = mysqli_fetch_assoc($result);

            if ( (isUserLogged())   and ( ($_SESSION['id']) == ($row['userid']) ) ){ 			
                echo "<h1>". $row['title'] . "</h1>";                
                echo  $row['content'] . "<br><br>";   
                if (!empty($row['postimg'])){
                    echo "<img src=". $row['postimg'] ." alt=\"\"  width='800'  /><br><br>";      
                    }    
                if (!empty($row['photo'])){
                    echo "<img src=". $row['photo'] ." alt=\"\"  width='50' /><br>";      
                    }       
                echo  $row['name'] .' '.$row['surname'] . "<br>";               
                echo  $row['date'] . "<br><br>"; 
                              
                echo "<a href='postedit.php?postid=".$row['postid']."'>Redaguoti įrašą</a><br>";  
                echo "<a href='postdelete.php?postid=".$row['postid']."'>Trinti įrašą</a><br><br>";  
                echo "<a href='comment.php?postid=".$row['postid']."'>Komentarai</a><br>";  
                
            }   
            else {
                echo "<h1>". $row['title'] . "</h1><br><br>";                
                echo  $row['content'] . "<br><br>";   
                if (!empty($row['postimg'])){
                    echo "<img src=". $row['postimg'] ." alt=\"\"  width='800'  /><br><br>";      
                    }      
                if (!empty($row['photo'])){
                    echo "<img src=". $row['photo'] ." alt=\"\"  width='50'  /><br>";      
                    }     
                echo  $row['name'] .' '.$row['surname'] . "<br>";               
                echo  $row['date'] . "<br><br>";  
                echo "<a href='comment.php?postid=".$row['postid']."'>Komentarai</a><br>";                  
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