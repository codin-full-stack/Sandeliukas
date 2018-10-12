<?php include 'header.php'; ?>
<div class="myP2">
<?php



        ?>
        <form action="postnewfin.php" method="post" enctype="multipart/form-data">
            <div class="inputblockh"> 
            <p2>Antraštė: </p2><br>
            <input class="inputfieldh" type="text"  required name="title" value="" ><br>
            </div>
            <p2>Tekstas: </p2><br>
            <textarea rows="30" name="content" id="content" cols="111" class="inputfieldp"></textarea><br>
            <div class="inputblockpost">
            <p2>Pasirinkti foto: </p2><br>
                <label class="cabinetpost">
                   
                <input type="file" name="img" class="filepost" /><br>
                </label>
            </div>
            <p2><?php echo $_SESSION['name'].' '.$_SESSION['surname'];?></p2><br>
            <p2><?php echo date("Y-m-d");?></p2><br>
            <div class="submitblockpost">
                <button type="submit" class="submitbtnpost">Taip</button>       
            </div>
        </form>
        <?php



?>
</div>

<?php
include 'footer.php';
?>           