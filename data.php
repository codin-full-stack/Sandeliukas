<?php
include "header.php";
?>
<div class="myP2">
<?php
$sql = "SELECT * FROM person_information";
// $result = $conn->query($sql);
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        // echo "<table>";
        //     echo "<tr>";
                
        //         echo "<th>Vardas</th>";
        //         echo "<th>Pavardė</th>";
        //         echo "<th>Miestas</th>";
        //         echo "<th>Adresas</th>";
        //         echo "<th>Amžius</th>";
        //         echo "<th>Telefonas</th>";
        //         echo "<th>El.Paštas</th>";
        //         echo "<th>Foto</th>";
               
        //     echo "</tr>";
     
        while($row = mysqli_fetch_array($result)){
            // echo "<tr>";
            ?>
            <div class="box-user">
            <?php
                echo $row['name'] . " ";
                echo $row['surname'] . ", ";
                if(! empty($row['city'])) {
                    echo "<td>". cities($row['city']) .". ";
                }
                else{
                    echo "<td>".$row['city']. ", ";
                }
                echo $row['address'] . ", ";
                echo $row['age'] . ", ";
                echo $row['phone'] . ", ";
                echo $row['mail'] . " ";
                // echo $row['photo'] . " ";
                if (!empty($row['photo'])){
                echo "<td><img src=". $row['photo'] ." alt=\"\"  width='50px'  border-radius='50%' /> ";
                echo "</br>";
                }
            ?>
            </div>
            <?php
            // echo "</tr>";
        }
        // echo "</table>";
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