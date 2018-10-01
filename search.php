<?php include "header.php";?>
<div class="myP2">
<?php


$sql = "SELECT * FROM person_information";
// $result = $conn->query($sql);
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
 
        
       
        
        while($row = mysqli_fetch_assoc($result)){
       
    

            if (($row['name']==$_GET['name']) and ($row['surname']==$_GET['surname'])){
                echo "<table>";
                echo "<tr>";
                echo "<td>";
                echo "Vardas: " . $row['name'] . "<br>";
                echo "Pavardė: " . $row['surname'] . "<br>";                       
                if(! empty($row['city'])) {
                    echo "Miestas: " . cities($row['city']) . "<br>";
                }
                else{
                    echo "Miestas: ".$row['city']. "<br>";
                }
                echo "Adresas: " . $row['address'] . "<br>";
                echo "Telefonas: " . $row['phone'] . "<br>";                       
                echo "El.Paštas: " . $row['mail'] . "<br>";
                echo "Amžius: " . $row['age'] . "<br>";
                echo "Foto: " . $row['photo'] . "<br>";   
                echo "<img src=". $row['photo'] ." alt=\"\"  width='200'  />";                    
               
                
                echo "</td>";
                echo "</tr>";
                echo "</table>";
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


$sql = "SELECT hint.userid, hint.postid, hint.title, hint.content, person_information.name, person_information.surname, hint.date, hint.time
FROM hint
JOIN person_information ON hint.userid = person_information.id
ORDER BY hint.time DESC";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){      
        
        echo "<br><br>".$_GET['name'].' '.$_GET['surname']." straipsniai:"."<br>";
        while($row = mysqli_fetch_array($result)){	
                
            if ((($_GET['name'])==($row['name']) )and ( ($_GET['surname'])==($row['surname']) )){
                echo "<h1>". $row['title']."</h1>";               
                echo $row['content'] . "<br><br>";           
                echo $row['name'] ."  ". $row['surname'] . "<br>";               
                echo $row['date'] . "<br>";
                echo "<a href='post.php?postid=".$row['postid']."'>Skaityti straipsnį >>></a><br><br><br>";   
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
<?php include "footer.php";?>
