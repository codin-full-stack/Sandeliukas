<html>
<body>


<?php

echo $_GET["a"].$_GET["zenklas"].$_GET["b"];

?>
=
<?php
eval ('$y = '.$_GET["a"].$_GET["zenklas"].$_GET["b"].';');

echo round($y,2);
?>

</body>
</html>