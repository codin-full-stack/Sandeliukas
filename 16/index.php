<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>
   
<form method="post">
    <div id="myP1">
    Vardas: <br>
    <input type="text" name="vardas" value="Vardas"><br>
    Pavardė: <br>
    <input type="text" name="pavarde" value="Pavardė"><br>
    Amžius: <br>
    <input type="text" name="amzius" value="Amžius"><br>
    Miestas:<br>
    <select  name="miestas">
        <option selected="selected" value='Nieko nepasirnkta' >Pasirinkite miesta</option>
        <?php
        // masyvas
        $mas = [
                'vln' => 'Vilnius',
                'kau' => 'Kaunas',
                'klp' => 'Klaipeda',
                'sia' => 'Siauliai',
                'pnv' => 'Panevezys',
                'var'=> 'Varena',
                'pri'=> 'Prienai'
                
        ];

        foreach($mas as $key=>$item){
        ?>
                <option value="<?php echo ($key.'=>'.$item); ?>">
                <?php echo $item; ?>
                </option>
                <?php
                }
                ?>

    </select>
    </div>
   
    <br><br>
    <button type="submit" onclick="myFunction()" class="button">Taip</button>       

        <div id="myP2">
        <?php
           

            $mas = [
                    'vardas' => 'Vardas  ',
                    'pavarde' => 'Pavardė  ',
                    'amzius' => 'Amzius  ',
                    'miestas' => 'Miestas  '    
            ];
            foreach ($_POST as $key => $value){
                    echo  $mas[$key]." ".$value."<br>";        
            }
            ?>
        </div>

</form>


      
     



</body>
</html>
