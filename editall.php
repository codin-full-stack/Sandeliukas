<?php include 'header.php'; ?>
<body>
    <div  class="panel">
    <div class="btnpanel">
    </div>
        <div  class="form">
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
                                <div class="inputblock"> 
                                    <p2>Pasirnkti foto:</p2><br>
                                    <label class="cabinet">   
                                    <input class="file" type="file" name="img" src="<?php echo $row['photo'] ?>"/><br>
                                    </label>
                                </div>
                                <input type="hidden" name="existing_image" value="<?php echo $row['photo'] ?>">
                                <div class="inputblock"> 
                                    <p2>Vardas: </p2><br>
                                    <input class="inputfield"type="text" required name="vardas" value="<?php echo $row['name'] ?>" ><br>
                                </div>
                                <div class="inputblock"> 
                                    <p2>Pavardė: </p2><br>
                                    <input class="inputfield"type="text" required name="pavarde" value="<?php echo $row['surname'] ?>"><br>
                                </div>
                                <div class="inputblock"> 
                                    <p2>Amžius: </p2><br>
                                    <input class="inputfield"type="number"  max="99" name="amzius" value="<?php echo $row['age'] ?>"><br>
                                </div>
                                <div class="inputblock"> 
                                    <p2>Miestas:</p2><br>
                                    <select name="miestas" class="inputfield">
                                    <option value=""> </option>
                                    <?php
                                        cityMas($row['city']);
                                    ?>
                                    </select><br>
                                </div>
                                <div class="inputblock"> 
                                <p2>Telefonas: </p2><br>
                                    <input class="inputfield"type="tel" name="telefonas" value="<?php echo $row['phone'] ?>"><br>
                                </div>
                                <div class="inputblock"> 
                                <p2>Adresas: </p2><br>
                                    <input class="inputfield"type="text" name="adresas" value="<?php echo $row['address'] ?>"><br>
                                </div>
                                <div class="inputblock"> 
                                <p2>Mailas: </p2><br>
                                    <input class="inputfield"type="email" name="mailas" value="<?php echo $row['mail'] ?>"><br>
                                </div>

                                <div class="submitblock">
                                    <button class="forgotbtn" type="submit" name="submit"></button>  
                                    <button type="submit" class="submitbtn">Taip</button>   
                                </div>    
                                
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
    <div class="subpanel">
    </div>
    </div>
</body>
<?php include 'footer.php'; ?>
  