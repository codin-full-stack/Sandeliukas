<?php
include "header.php";?>
<div class="myP2">
<?php
    if(isUserLogged()) {
        $filename=filePath('json',$_SESSION['name'],$_SESSION['surname']);
        showJson ($filename);
    } else {
        echo 'Neprisijungta!';
}
?>
</div>
<?php include "footer.php";     
?>