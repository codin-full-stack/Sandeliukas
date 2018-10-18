<?php
include "header.php";
?>
<div class="myP2">
<?php
$sql = "SELECT * FROM person_information";
// $result = $conn->query($sql);
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        ?><div class="table-container"><?php
        echo "<table>";
        echo "<thead>";
            echo "<tr>";
                
                echo "<th>Full Name</th>";
                echo "<th>Age</th>";
                echo "<th>E-mail</th>";
                echo "<th>Location</th>";
              
               
            echo "</tr>";
            echo "</thead>";
        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";
            echo "<tr>";
           
                echo "<td data-title='Vardas'><a class='one' href='noadmin.php?id=".$row['id']."'>" . $row['name'] .' '. $row['surname']. "</a></td>";          
                echo "<td data-title='Amžius'><a class='one'  href='noadmin.php?id=".$row['id']."'>" . $row['age'] . "</a></td>";
                echo "<td data-title='E-paštas'><a class='one'  href='noadmin.php?id=".$row['id']."'>" . $row['mail'] . "</a></td>";
                if(! empty($row['city'])) {
                    echo "<td data-title='Miestas'><a class='one'  href='noadmin.php?id=".$row['id']."'>" . cities($row['city']) . "</a></td>";
                }
                else{
                    echo "<td data-title='Miestas'><a class='one'  href='noadmin.php?id=".$row['id']."'>" .$row['city']. "</a></td>";
                }
           
               
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
        ?></div><?php
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