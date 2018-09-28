
<?php
$json = file_get_contents('example_3.json');

//var_dump(json_decode($json, true));
$masJson=(json_decode($json, true));
$masJson=$masJson['menu']['items'];
//var_dump($masJson);
foreach ($masJson as $key => $value){
	if(!empty($value)){
       
    ?>  
      
		<a href="<?php echo $value['id']."  "?>">
		<?php
			if(!empty($value['label'])){
				echo $value['label'];
			}
			else{
				echo $value['id'];
			} 


		?>
        </a>
        <br><br>
	<?php	
	}
	
}

?>

