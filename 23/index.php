<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Auris</title>
		<meta charset="utf-8">
	</head>
	<body>  
		<!-- <nav>  -->
			<div class='menu'>
				<?php
				include 'menu.php';
				?>
			</div>
		<!-- </nav> -->

			<?php 
				if (empty($_POST)) {
					include "input.php";
		
				} elseif (!empty($_POST)) {
					include "output.php";
				}

			?>
	</body>
</html>
