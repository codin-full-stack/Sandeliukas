<?php include 'header.php'; ?>
<div class="myP2">
<?php



        ?>
        <form action="postnewfin.php" method="post" enctype="multipart/form-data">
            
            Antraštė: <br>
            <input class="input" type="text" style="width:800px;height:50px;" required name="title" value="" ><br>
            Tekstas: <br>
            <textarea rows="30" name="content" id="content" cols="111"></textarea><br>
            Foto:<br>
            <input type="file" name="img" /><br>
            <?php echo $_SESSION['name'].' '.$_SESSION['surname'];?>
            <br>
            <?php echo date("Y-m-d");?>
            <br>
            <button type="submit" class="button">Taip</button>       
            
        </form>
        <?php



?>
</div>

<?php
include 'footer.php';
?>           