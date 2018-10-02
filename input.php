<?php include 'header.php'; ?>

<body>
    <div  class="panel">

        <div class="btnpanel">
            <button class="btndef" type="submit" name="submit" onclick="window.location.href='logform.php'">Login</button>  
            <button class="btndefno" type="submit" name="submit" onclick="window.location.href='reg.php'">Register</button> 
        </div>
        <div  class="form">
        <form method="post" enctype="multipart/form-data">
            <div class="inputblock">
                <p2>Pasirinkti foto: </p2><br>
                <label class="cabinet">
                <input  class="file" type="file" name="img" /><br>
                </label>
            </div>
            <div class="inputblock">
                <p2>Vardas: </p2><br>
                <input class="inputfield" type="text" required name="vardas" ><br>
            </div>
            <div class="inputblock">
                <p2>Pavardė: </p2><br>
                <input class="inputfield" type="text" required name="pavarde" ><br>
            </div>
            <div class="inputblock">
                <p2>Amžius: </p2><br>
                <input class="inputfield" type="number"  max="99" name="amzius" ><br>
            </div>
            <div class="inputblock">
                <p2>Miestas: </p2><br>
                <select  name="miestas" class="inputfield">
                    <option  ></option>
                    <?php
                    $mas = cityMas();
                    ?>
                </select><br>
            </div>
            <div class="inputblock">
                <p2>Telefonas: </p2><br>
                <input class="inputfield" type="tel" name="telefonas"><br>
            </div>
            <div class="inputblock">
                <p2>Adresas: </p2><br>
                <input class="inputfield" type="text" name="adresas"><br>
            </div>
            <div class="inputblock">
                <p2>Mailas: </p2><br>
                <input class="inputfield" type="email" name="mailas"><br>
            </div>
            <div class="inputblock">
                <p2>Slaptažodis: </p2><br>
                <input class="inputfield" type="password" required name="pass"><br>
            </div>
            <div class="inputblock">  
                <p2>Pakartoti slaptažodį: </p2><br>
                <input class="inputfield" type="password" required name="passconf"><br>  
            </div>
            <div class="submitblock">
                <button class="forgotbtn" type="submit" name="submit"></button>
                <button type="submit" class="submitbtn" name="submit">Taip</button>       
            </div>

        </form>
        </div>
        <div class="subpanel">
            <button class="logofb" type="submit" name="submit"><b>f</b></button>  
            <button class="btnfb" type="submit" name="submit">Sign in with <b>Facebook</b></button>  

            <button class="logogoo" type="submit" name="submit"><b>g+</b></button>        
           
            <button class="btngoo" type="submit" name="submit">Sign in with <b>Google+</b></button>             
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
  