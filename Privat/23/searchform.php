<html>
        <head>
                <link rel="stylesheet" href="style.css">
                <title>Auris</title>
                <meta charset="utf-8">
                
                
                </head>
<body>
    <div class='menu'>
                    <?php
                    include 'menu.php';
                    ?>
    </div>
    <div id="myP1">  
            <form action="search.php" method="get">
                Vardas<br>
                <input type="text" name="name"><br>
                Pavarde<br>
                <input type="text" name="surname" ><br>
            <button type="submit" class="button">Ieskoti</button>
            </form>
        </div  >
</body>
</html>