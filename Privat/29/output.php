
<?php include "header.php";?>
<div id="myP1">
		<form method="post">
		<?php
			
				if (($_POST['vardas']!='')and($_POST['pavarde']!='')and($_POST['pass']!='')){
	
					if ($_POST['pass']==$_POST['passconf']){
					
						$_POST['pass']=md5($_POST['pass']);
						unset ($_POST['passconf']);
				
			// ___________________________________________________________________________________________________

						$filename = filePath('json',$_POST['vardas'],$_POST['pavarde']);

							if (!file_exists($filename)){
								createPerson($_POST,$filename);
								// ___________________________________________________________________________________________________
								$jsondata = file_get_contents(filePath('json','','sarasas'));
								$masJson = json_decode($jsondata, true);
								unset($_POST['pass']);
								addJson($masJson,$_POST,$jsondata,'json','','sarasas');
							}
							else echo 'Toks  vartotojas jau yra';
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