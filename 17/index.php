<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Auris</title>
		<meta charset="utf-8">
	</head>
	<body>   
		<form method="post">
			<?php 
				if (empty($_POST)) {
					include "run2.php";
		
				} elseif (!empty($_POST)) {
					include "run.php";
				}

			?>
		</form>
	</body>
</html>
