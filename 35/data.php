<?php
include "header.php";
?>
<div class="container">
<!-- <div class="myP2"> -->
<?php
$sql = "SELECT * FROM person_information
ORDER BY person_information.name ASC";
// $result = $conn->query($sql);
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        // echo "<table>";
        //     echo "<tr>";

                // echo "Vardas ";
                // echo "Pavardė ";
                // echo "Miestas ";
                // echo "Adresas ";
                // echo "Amžius ";
                // echo "Telefonas ";
                // echo "El.Paštas ";
                // echo "Foto ";

        //     echo "</tr>";
     
        while($row = mysqli_fetch_array($result)){
            // echo "<tr>";
            ?>
            <div class="box_data">
            <!-- <div class="box-user"> -->
            <?php
                if (!empty($row['photo'])){
                    ?>
                <div class="box-image-container_data" style="background-image: url(<?php echo $row['photo']; ?>);"></div>   
                <?php
                    // echo "<td><img src=". $row['photo'] ." alt=\"\"  width='50px'  border-radius='50%' /><br>";
                }

                ?>
                
                <div class="box-title_data">
                    <div class="box-heading_data"><?php
                echo $row['name'] . " ";
                echo $row['surname'] . "<br>";
                if(! empty($row['city'])) {
                    echo "Miestas: ". cities($row['city']) ."<br>";
                }
                else{
                    echo "Miestas: ".$row['city']. "<br>";
                }
                echo "Adresas: ".$row['address'] . "<br>";
                echo "Amžius: ".$row['age'] . "<br>";
                echo "Telefonas: ".$row['phone'] . "<br>";
                echo "El.Paštas: ".$row['mail'] . "<br>";
                // echo $row['photo'] . " ";
                
                
                ?>
                    </div>
                </div>
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