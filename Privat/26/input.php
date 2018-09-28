<?php include 'header.php'; ?>
<div id="myP1">
<form method="post">
    Vardas: <br>
    <input type="text" name="vardas" ><br>
    Pavardė: <br>
    <input type="text" name="pavarde" ><br>
    Amžius: <br>
    <input type="text" name="amzius" ><br>
    Miestas:<br>
    <select  name="miestas">
        <option  ></option>
        <?php
        $mas = cityMas();
		?>
    </select><br>
    <!-- Kontaktai: <br> -->
    Telefonas: <br>
    <input type="tel" name="telefonas"><br>
    Adresas: <br>
    <input type="text" name="adresas"><br>
    Mailas: <br>
    <input type="email" name="mailas"><br>

	
    <br><br>
	<button type="submit" class="button">Taip</button>       
	
</form>
</div>
<?php include 'footer.php'; ?>
  