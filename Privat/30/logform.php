<?php include "header.php";?>
<body>
<form action="login.php" method="post">
Vardas:<br>
<input class="input" type="text" name="name"><br>
Pavardė:<br>
<input class="input" type="text" name="surname"><br>
Slaptažodis:<br>
<input class="input" type="password" name="pass"><br>
<br>
<button class="button" type="submit" name="submit">Login</button>  
</form>
</body>
<?php include "footer.php";?>