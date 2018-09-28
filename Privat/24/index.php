<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Anketa</title>
		<meta charset="utf-8">
	</head>
	<body>  
		<?php 
			include_once "menu.php";
			if (empty($_POST)) {
				include "input.php";
			} elseif (!empty($_POST)) {
				include "output.php";
			}
		?>
	</body>
</html>
