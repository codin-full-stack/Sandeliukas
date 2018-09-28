<?php include "header.php";?>
<div class="myP2">
<?php


$sql = "SELECT * FROM person_information";
// $result = $conn->query($sql);
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
 
        echo "<table>";
       
        
        while($row = mysqli_fetch_assoc($result)){
       
    

            if (($row['name']==$_GET['name']) and ($row['surname']==$_GET['surname'])){
              
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
               
                
                echo "</td>";
            echo "</tr>";
            }
            else {
                "Tokio vartotojo nėra";
            }
         
        }
        echo "</table>";
  
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
