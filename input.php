<?php include 'header.php'; ?>
<!-- <div id="myP1"> -->
<form method="post" enctype="multipart/form-data">
    Foto:<br>
    <input  type="file" name="img" /><br>
    Vardas: <br>
    <input class="input"type="text" required name="vardas" ><br>
    Pavardė: <br>
    <input class="input"type="text" required name="pavarde" ><br>
    Amžius: <br>
    <input class="input"type="number"  max="99" name="amzius" ><br>
    Miestas:<br>
    <select  name="miestas">
        <option  ></option>
        <?php
        $mas = cityMas();
		?>
    </select><br>
    <!-- Kontaktai: <br> -->
    Telefonas: <br>
    <input class="input"type="tel" name="telefonas"><br>
    Adresas: <br>
    <input class="input"type="text" name="adresas"><br>
    Mailas: <br>
    <input class="input"type="email" name="mailas"><br>
    Slaptažodis: <br>
    <input class="input" type="password" required name="pass"><br>
    Pakartoti slaptažodį: <br>
    <input class="input" type="password" required name="passconf"><br>   
    <br>
	<button type="submit" class="button">Taip</button>       
	
</form>
<!-- </div> -->
<?php include 'footer.php'; ?>
  