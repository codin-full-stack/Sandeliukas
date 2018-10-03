<html>
<body>

<?php echo $_POST["v"]; ?>
<n/>
<?php echo $_POST["p"]; ?>
<n/>
<?php echo $_POST["d"]; ?>
<n/>
<?php echo $_POST["c"]; ?>

<n/>
<?php
$m = array($_POST["v"],$_POST["p"],$_POST["d"],$_POST["c"]);
 var_dump ($m); 
 print_r ($m);
 ?>

<title><?php print $_POST["v"]; ?> <?php echo $_POST["p"]; ?></title>

</body>
</html>