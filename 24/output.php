
<div id="myP1">
		<form method="post">
		<?php
			require_once "functions.php";
				if (($_POST['vardas']!='')and($_POST['pavarde']!='')){
				$filename = filePath('json',$_POST['vardas'],$_POST['pavarde']);
				createPerson($_POST,$filename);
	// ___________________________________________________________________________________________________

				$jsondata = file_get_contents(filePath('json','','sarasas'));
				$masJson = json_decode($jsondata, true);
				addJson($masJson,$_POST,$jsondata,'json','','sarasas');
				}
				else {
					echo 'Nėra duomenų!';
				}
		?> 
		<br><br>
		<button type="submit" class="button">Atgal</button>    
	</form>
</div>

