<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>

<header>



     
<form action="run.php" method="post">
    Vardas: <br>
    <input type="text" name="vardas" value="Vardas"><br>
    Pavardė: <br>
    <input type="text" name="pavarde" value="Pavardė"><br>
    Amžius: <br>
    <input type="text" name="amzius" value="Amžius"><br>
    Miestas:<br>
    <select include "run2.php" name="miestas">
        <option selected="selected" value='Nieko nepasirnkta' >Pasirinkite miesta</option>
        <?php include "run2.php" ?>
    </select>
          <br><br>

    <button type="submit" class="button">Taip</button>
</form>




   
     
     
</header>


</body>
</html>
