
<?php include "header.php";?>
<div id="myP1">
		<form method="post">
		<?php
			
				if (($_POST['vardas']!='')and($_POST['pavarde']!='')and($_POST['mailas']!='')and($_POST['pass']!='')){
	
					if ($_POST['pass']==$_POST['passconf']){
					
						$_POST['pass']=md5($_POST['pass']);
						unset ($_POST['passconf']);

						// $temp = explode(".", $_FILES["foto"]["name"]);
						// $newfilename = $_POST['vardas'].$_POST['pavarde'] . '.jpg' . end($temp);
						// move_uploaded_file($_FILES["foto"]["tmp_name"], "images/" . $newfilename);

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
							$phone=$_POST['telefonas'];
						}
						
						if  (empty($_FILES['img']['name'])){
							$path='NULL';
							// var_dump($path);
						} else {
							$picture_tmp = $_FILES["img"]["tmp_name"];
							// var_dump($picture_tmp);
							$picture_nameo = explode(".", $_FILES["img"]["name"]);
							// var_dump($picture_nameo);
							$picture_name = $_POST['vardas'].$_POST['pavarde'].".". end($picture_nameo);
							// var_dump($picture_name);
							$picture_type = ($_FILES["img"]["type"]);
							// var_dump($picture_type);
							$allowed_type = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
							
							if(in_array($picture_type, $allowed_type)) {
								$path = 'images/'.$picture_name; //change this to your liking
								move_uploaded_file($picture_tmp, $path);
							} else {
								echo 'File type not allowed';
							}
						}

						$sql = "INSERT INTO person_information (name, surname, mail, pass, city, address, phone, age, photo) VALUES ('" . $_POST['vardas'] . "','" . $_POST['pavarde'] . "','" . $_POST['mailas'] . "','" . $_POST['pass'] . "','" . $_POST['miestas'] . "', '" . $_POST['adresas'] . "',".$phone.",".$age.",'".$path."')";
				
						if(mysqli_query($conn, $sql)){
							echo "Records inserted successfully.";
						} else{
							echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
						}

				

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
		<?php header("Location:logform.php");?>
	</form>
</div>

<?php include "footer.php";?>