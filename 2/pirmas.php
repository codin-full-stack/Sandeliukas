<html>
<body>

<?php echo $_GET["a"]; ?>
<?php echo $_GET["x"]; ?>
<?php echo $_GET["b"]; ?>
=
<?php
$n=$_GET["x"];

switch ($n) {
case "+" :
echo $_GET["a"]+$_GET["b"];
break;
case "-" :
echo $_GET["a"]-$_GET["b"];
break;
case "*" :
echo $_GET["a"]*$_GET["b"];
break;
case "/" :
echo $_GET["a"]/$_GET["b"];
break;
} ?><br>

</body>
</html>