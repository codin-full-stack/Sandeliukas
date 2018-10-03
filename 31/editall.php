<?php include 'header.php'; ?>
<div id="myP1">
<?php
    if(isUserLogged()) {
        $name=$_SESSION['name'].$_SESSION['surname'];

        $sql = "SELECT * FROM person_information WHERE id='" . $_SESSION['id'] . "' LIMIT 1";
        // $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                
                $row = mysqli_fetch_assoc($result);                        
                ?>
                <form action="editallfin.php" method="post" enctype="multipart/form-data">
                                    
                    Foto:<br>
                    <input type="file" name="img" src="<?php echo $row['photo'] ?>"/><br>
                    <input type="hidden" name="existing_image" value="<?php echo $row['photo'] ?>">
                    Vardas: <br>
                    <input class="input"type="text" required name="vardas" value="<?php echo $row['name'] ?>" ><br>
                    Pavardė: <br>
                    <input class="input"type="text" required name="pavarde" value="<?php echo $row['surname'] ?>"><br>
                    Amžius: <br>
                    <input class="input"type="number"  max="99" name="amzius" value="<?php echo $row['age'] ?>"><br>
                    Miestas:<br>
                    <select name="miestas">
                        <option value=""> </option>
                        <?php
                            cityMas($row['city']);
                        ?>
                    </select><br>
                    <!-- Kontaktai: <br> -->
                    Telefonas: <br>
                    <input class="input"type="tel" name="telefonas" value="<?php echo $row['phone'] ?>"><br>
                    Adresas: <br>
                    <input class="input"type="text" name="adresas" value="<?php echo $row['address'] ?>"><br>
                    Mailas: <br>
                    <input class="input"type="email" name="mailas" value="<?php echo $row['mail'] ?>"><br>

                    <br>
                    <button type="submit" class="button">Taip</button>       
                    
                </form>
                <?php
             
                
                
            
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
<?php include 'footer.php'; ?>
  