<?php include 'header.php'; ?>
<div class="myP1">
<div class="myP2">
<br>


    <div class="box-user">
        <form method="get" >
            <div class="inputblock">
                <p2>Pasirinkti data: </p2>
                <input class="inputfield" type="date" name="day" value="<?php echo date("Y-m-d");?>">
            </div>
            <div class="submitblockpost">
                <button type="submit" class="submitbtnpost">Taip</button> 
            </div>
        </form>
        <br><br><br>
        <?php 
        if (((!empty($_GET['day']))) and ( $_GET['day']!==date("Y-m-d"))){
        echo "Iki  <b><font color='#E71D36' size='6'>".$_GET['day']."</font></b> liko ";
        $transdate = $_GET['day'];
        $y = date('Y', strtotime($transdate));
        $m = date('m', strtotime($transdate));
        $d = date('d', strtotime($transdate));

        $trans = date("H:i:s");
        $h = date('H', strtotime($trans));
        $m=$m-1;
        }
        
        ?>
        <script>
            var y = "<?php echo $y ?>";
            var m = "<?php echo $m ?>";
            var d = "<?php echo $d ?>";
            var h = "<?php echo $h ?>";
            var array= daysUntil(y,m,d,h)
            var header = " <b><font color='#E71D36' size='6'> " + array[0]  + ""
            header += "d.</font></b>  "
            document.write(header)
            var h = "0";
            var array= daysUntil(y,m,d,h)
            var header = " arba tiksliau <b><font color='#E71D36' size='6'> " + array[1]  + ""
            header += "val.</font></b>  Ne taip ir daug."
            document.write(header);

    
        </script>
        
    </div>

<div class="xmas">
</div>





</div>
</div>
<?php
include 'footer.php';
?>