<?php
include "header.php";
?>
<div class="myP2">
<?php
$sql = "SELECT * FROM person_information";
// $result = $conn->query($sql);
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                
                echo "<th>Vardas</th>";
                echo "<th>Pavardė</th>";
                echo "<th>Miestas</th>";
                echo "<th>Adresas</th>";
                echo "<th>Amžius</th>";
                echo "<th>Telefonas</th>";
                echo "<th>El.Paštas</th>";
                echo "<th>Foto</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
              
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['surname'] . "</td>";
                if(! empty($row['city'])) {
                    echo "<td>". cities($row['city']) ."</td>";
                }
                else{
                    echo "<td>".$row['city']. "</td>";
                }
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['mail'] . "</td>";
                echo "<td>" . $row['photo'] . "</td>";
               
            echo "</tr>";
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

//showJson (filePath('json','','sarasas'));
?>
</div>

<?php
include 'footer.php';
?>