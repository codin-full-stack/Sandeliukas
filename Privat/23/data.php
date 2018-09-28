<link rel="stylesheet" href="style.css">
<div class='menu'>
				<?php
				include 'menu.php';
				?>
</div>

<div class="myP2">
<?php
$json = file_get_contents('sarasas.json');

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