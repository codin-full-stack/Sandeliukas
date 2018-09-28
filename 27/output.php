
<?php include "header.php";?>
<div id="myP1">
		<form method="post">
		<?php
			
				if (($_POST['vardas']!='')and($_POST['pavarde']!='')){
	
					if ($_POST['pass']==$_POST['passconf']){
					
						$_POST['pass']=md5($_POST['pass']);
						$_POST['passconf']=md5($_POST['passconf']);
						$jsondata = file_get_contents(filePath('json','','pass'));
						$masJson = json_decode($jsondata, true);
						$passData=[
							'name'=>$_POST['vardas'],
							'surname'=>$_POST['pavarde'],
							'pass'=>$_POST['pass']
						];
						
						addPass($masJson,$passData,$jsondata,'json','','pass');
			// ___________________________________________________________________________________________________

						$filename = filePath('json',$_POST['vardas'],$_POST['pavarde']);
						createPerson($_POST,$filename);
			// ___________________________________________________________________________________________________

						$jsondata = file_get_contents(filePath('json','','sarasas'));
						$masJson = json_decode($jsondata, true);
						addJson($masJson,$_POST,$jsondata,'json','','sarasas');
					}
					else {
						echo "Slaptažodžiai nesutampa";
					}


				}
				else {
					echo 'Nėra duomenų!';
				}
		?> 
		<br><br>
		<button type="submit" class="button">Atgal</button>    
	</form>
</div>

<?php include "footer.php";?>