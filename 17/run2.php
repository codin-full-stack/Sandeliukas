<div id="myP1">
    Vardas: <br>
    <input type="text" name="vardas" value="Vardas"><br>
    Pavardė: <br>
    <input type="text" name="pavarde" value="Pavardė"><br>
    Amžius: <br>
    <input type="text" name="amzius" value="Amžius"><br>
    Miestas:<br>
    <select  name="miestas">
        <option selected="selected" value='Nieko nepasirnkta' >Pasirinkite miesta</option>
        <?php
        // masyvas
        $mas = [
                'vln' => 'Vilnius',
                'kau' => 'Kaunas',
                'klp' => 'Klaipeda',
                'sia' => 'Siauliai',
                'pnv' => 'Panevezys',
                'var'=> 'Varena',
                'pri'=> 'Prienai'
        ];

        foreach($mas as $key=>$item){
		?>
		<option value="<?php echo ($key.'=>'.$item); ?>">
		<?php echo $item; ?>
		</option>
		<?php
		}
		?>

    </select>
	
    <br><br>
	<button type="submit" class="button">Taip</button>       
	

</div>
  