<?php include "header.php";?>
<body>
    <div  class="panel">
    <div class="btnpanel">
    </div>
        <div  class="form">
        <form action="search.php" method="get">
            <div class="inputblock"> 
                <p2>Vardas</p2><br>
                <input class="inputfield" type="text" name="name"><br>
            </div>
            <div class="inputblock"> 
                <p2>Pavarde</p2><br>
                <input class="inputfield" type="text" name="surname" ><br>
            </div>

            <div class="submitblock">
                <button class="forgotbtn" type="submit" name="submit"></button>  
                <button type="submit" class="submitbtn">Ieskoti</button>
            </div>
        </form>
        </div>
     
    <div class="subpanel">
    <input class="inp" type="text" name="name"><br>
    <button class="btn">taip</button>  
    <button class="btn" onclick="displayDate()">taip</button>
    </div>
    </div>
    <script>
    document.querySelector(".btn").addEventListener("click", displayDate);

    function displayDate() {
        document.querySelector(".subpanel").innerHTML = Date();
    }
    </script>
</body>
<?php include "footer.php";?>
