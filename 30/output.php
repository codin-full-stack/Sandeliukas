
<?php include "header.php";?>
<div id="myP1">
		<form method="post">
		<?php
			
				if (($_POST['vardas']!='')and($_POST['pavarde']!='')and($_POST['mailas']!='')and($_POST['pass']!='')){
	
					if ($_POST['pass']==$_POST['passconf']){
					
						$_POST['pass']=md5($_POST['pass']);
						unset ($_POST['passconf']);

						$temp = explode(".", $_FILES["foto"]["name"]);
						$newfilename = $_POST['vardas'].$_POST['pavarde'] . '.jpg' . end($temp);
						move_uploaded_file($_FILES["foto"]["tmp_name"], "images/" . $newfilename);

						if ($_POST['amzius'] == "") {
							$age= 'NULL';
						}
						else {
							$age=$_POST['amzius'];
						}
						if ($_POST['telefonas'] == "") {
							$phone = 'NULL';
						}
						else {
							$phona=$_POST['telefonas'];
						}


						
						$sql = "INSERT INTO person_information (name, surname, mail, pass, city, address, phone, age) VALUES ('" . $_POST['vardas'] . "','" . $_POST['pavarde'] . "','" . $_POST['mailas'] . "','" . $_POST['pass'] . "','" . $_POST['miestas'] . "', '" . $_POST['adresas'] . "',".$phone.",".$age.")";
						
				
							if(mysqli_query($conn, $sql)){
								echo "Records inserted successfully.";
							} else{
								echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
							}

								
								$temp = explode(".", $_FILES["foto"]["name"]);
								$newfilename = $_POST['vardas'].$_POST['pavarde'] . '.' . end($temp);
								move_uploaded_file($_FILES["foto"]["tmp_name"], "images/" . $newfilename);

					}
					else {
						echo "Slaptažodžiai nesutampa";
					}


				}
				else {
					echo 'Būtini duomanys: vardas, pavardė, slaptažodis.';
				}
		?> 
		<br><br>
		<button type="submit" class="button">Atgal</button>    
	</form>
</div>

<?php include "footer.php";?>