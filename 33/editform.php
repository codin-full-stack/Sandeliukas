<?php include 'header.php'; ?>
<body>
    <div  class="panel">
    <div class="btnpanel">
    </div>
        <div  class="form">
        <form action="editpass.php" method="post">
            <div class="inputblock"> 
                <p2>Slaptažodis: </p2><br>
                <input class="inputfield" type="password" name="pass"><br>
            </div>
            <div class="inputblock"> 
                <p2>Naujas slaptažodis: </p2><br>
                <input class="inputfield" type="password" name="newpass"><br>
            </div>
            <div class="inputblock"> 
                <p2>Pakartoti slaptažodį: </p2><br>
                <input class="inputfield" type="password" name="passconf"><br>   
                </div>
            <div class="submitblock">
                <button type="submit" class="submitbtn">Taip</button>       
            </div>
        </form>
        </div>
    <div class="subpanel">
    </div>
    </div>
</body>
<?php include 'footer.php'; ?>
  