<style>
table, th, td {
	border: 1px solid black;
}
</style>
</head>

<div id="myP2">
	<?php
		

		$mas = [
			'vardas' => 'Vardas  ',
			'pavarde' => 'Pavardė  ',
			'amzius' => 'Amzius  ',
			'miestas' => 'Miestas  '    
		];
		echo '
		<table>
			<tr>
				<th>Key</th>
				<th>Value</th>
			</tr>';	
		foreach ($_POST as $key => $value){
			echo '<tr>
			<td>'. $mas[$key] .'</td>
			<td>'. $value .'</td>
			</tr>';       
		}
		echo '</table>';
	?> 
	<br><br>
	<button type="submit" class="button">Atgal</button>    
</div>