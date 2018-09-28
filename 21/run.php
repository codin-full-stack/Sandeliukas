<style>
table, th, td {
	border: 1px solid black;
}
</style>
</head>

<div id="myP1">
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
		
		 //Get data from existing json file
		 $jsondata = file_get_contents('example_1.json');
	
		 // converts json data into array
		 $masJson = json_decode($jsondata, true);
		
		  
	  
		 // Push user data to array
		 array_push($masJson,$mas);
  
		 //Convert updated array to JSON
		 $jsondata = json_encode($masJson, JSON_PRETTY_PRINT);
		 
		 //write json data into data.json file
		 if(file_put_contents('example_1.json', $jsondata)) {
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
		 else 
			  echo "Nieko gero";
	?> 
	<br><br>
	<button type="submit" class="button">Atgal</button>    
</div>
<div id="myP2">
<?php
$json = file_get_contents('example_1.json');

//var_dump(json_decode($json, true));
$masJson=(json_decode($json, true));

foreach ($masJson as $key => $value){
	echo '<br>';
	if(is_array($value)){
		foreach ($value as $key2=> $value2){
			echo '  '.$value2;
		}
	}
	else {
		echo $value;
	}  
}

?>

</div>