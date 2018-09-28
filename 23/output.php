


<div id="myP1">
		<form method="post">
		<?php

			$mas = [
				'vardas' => 'Vardas  ',
				'pavarde' => 'Pavardė  ',
				'amzius' => 'Amzius  ',
				'miestas' => 'Miestas  ',
				'miestas' => 'Miestas  ' ,
				'kontaktai'=> [
					'telefonas'=> 'Telefonas  ',
					'adresas'=> 'Adresas  ',
					'mailas'=> 'Mailas  '
				] 
			];

			
			
			foreach ($_POST as $key => $value){
			
				echo '<br>';
				$mas=($_POST);
				//var_dump($mas);
				//var_dump($_POST);
			// 	if(is_array($value)){
			// 		foreach ($value as $key2=> $value2){
			// 			echo '<br>'.$value2;
						
			// 		}
			// 	}
			// else {echo $value;}  
			}

							foreach ($mas as $key => $value){
								if ($key=='vardas')
									{
										//echo   $key.'  '.$value;
										$filename = $value;}

								if ($key=='pavarde')
									{
										//echo   $key.'  '.$value;
										$filename = 'json'.DIRECTORY_SEPARATOR.$filename.$value.'.json';}

								
							}	

							$usrdata = json_encode($mas, JSON_PRETTY_PRINT);	
							//set the filename

								

							//open or create the file
							$handle = fopen($filename,'w+');
				
							//write the data into the file
							fwrite($handle,$usrdata);
				
							//close the file
							fclose($handle);
// ___________________________________________________________________________________________________
			//Get data from existing json file
			$jsondata = file_get_contents('sarasas.json');
		
			// converts json data into array
			$masJson = json_decode($jsondata, true);
			
			
		
			// Push user data to array
			array_push($masJson,$mas);
	
			//Convert updated array to JSON
			$jsondata = json_encode($masJson, JSON_PRETTY_PRINT);
			
			//write json data into data.json file
			if(file_put_contents('sarasas.json', $jsondata)) {
				echo 'Pasiseke'.'<br>'.'<br>';
				echo 'Prideta:';
					foreach ($mas as $key => $value){
						echo '  ';
						if(is_array($value)){

								foreach ($value as $key2=> $value2){
									echo '  '.$value2.':  ';
									
								}
							}
						else {echo $value;}  
					}
			}
			else {
				echo "Nieko gero";
			}

	
		?> 
		<br><br>
		<button type="submit" class="button">Atgal</button>    
	</form>
</div>

