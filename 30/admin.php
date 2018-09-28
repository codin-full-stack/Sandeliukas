<?php
include "header.php";?>
<div class="myP2">
<?php
    if(isUserLogged()) {
        $name=$_SESSION['name'].$_SESSION['surname'];

         "<img src=images/".$name.".?>";

         $sql = "SELECT * FROM person_information WHERE id='" . $_SESSION['id'] . "' LIMIT 1";
        // $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                
               
                echo "<table>";
            
                while($row = mysqli_fetch_array($result)){
                    
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
                        echo "Amžius: " . $row['age'] . "<br>";
                        echo "Telefonas: " . $row['phone'] . "<br>";
                        echo "El.Paštas: " . $row['mail'] . "<br>";
                        echo "Foto" . $row['photo'] . "<br>";
                        echo "<br><br><a href='editall.php'>Keisti duomenis</a><br>";
                        echo "<a href='editform.php'>Keisti slaptažodi</a><br>";
                        echo "</td>";
                    echo "</tr>";
                    
                 
                }
                echo "</table>";
            
                // Free result set
                mysqli_free_result($result);
                
                

            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

    } else {
        echo 'Neprisijungta!';
}
?>
</div>
<?php include "footer.php";     
?>