<?php include "header.php";?>
<body>
    <div  class="panel">
        <div class="btnpanel">
            <button class="btndefno" type="submit" name="submit" onclick="window.location.href='logform.php'">Login</button>  
            <button class="btndef" type="submit" name="submit" onclick="window.location.href='reg.php'">Register</button> 
        </div>

        <div  class="form">
        <form action="login.php" method="post"> 
            <div class="inputblock">           
                <p2>Vardas:</p2><br>
                <input class="inputfield" type="text" name="name"><br>
            </div>
            <div class="inputblock">   
                <p2>Pavardė:</p2><br>
                <input class="inputfield" type="text" name="surname"><br>
            </div>
            <div class="inputblock">   
                <p2>Slaptažodis:</p2><br>
                
                <input class="inputfield" type="password" name="pass"><br>
               
            </div>
            <div class="submitblock">
                <button class="forgotbtn" type="submit" name="submit">Forgot password?</button>  
                <button class="submitbtn" type="submit" name="submit">Signin</button>  
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
<?php include "footer.php";?>