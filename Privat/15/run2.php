<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Auris</title>
<meta charset="utf-8">


</head>
<body>


<?php
        // masyvas
        $mas = [
            'vln' => 'Vilnius',
            'kau' => 'Kaunas',
            'klp' => 'Klaipeda',
            'sia' => 'Siauliai',
            'pnv' => 'Panevezys'
            
    ];
        
        
        foreach($mas as $key=>$item){
        ?>
        <option value="<?php echo ($key.'=>'.$item); ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>


</body>
</html>