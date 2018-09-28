<?php
    function createMenu($fileJson){
        $masJson=(json_decode($fileJson, true));
        $masJson=$masJson['menu']['items'];
        foreach ($masJson as $key => $value){
            if(!empty($value)){
            ?>  
                <a href="<?php echo $value['id']."  "?>">
                <?php
                    if(!empty($value['label'])){
                        echo $value['label'];
                    }
                    else{
                        echo $value['id'];
                    } 
                ?>
                </a>
                <br>
            <?php	
            }
        }
    }


    function cityMas(){
               
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
            <option value="<?php echo $item; ?>">
            <?php echo $item; ?>
            </option>
            <?php
        }

    }

    function searchMas($masyvas){
        foreach ($masyvas as $raktas => $reiksme){
            echo '<br>';
            if(is_array($reiksme)){
                foreach ($reiksme as $raktas2=> $reiksme2){
                    echo '  '.$reiksme2;  
                }
            } else {
                echo $reiksme;
            }  
        }
    }

    

    function showJson($findFile){
        if(file_exists($findFile)){
            
            $json = file_get_contents($findFile);
            $masJson=(json_decode($json, true));

            searchMas($masJson);            
            
        }
        else {
            echo "Failas nerastas";
        }
    }

    function filePath($folder,$name,$surname){
        $find = ($folder.DIRECTORY_SEPARATOR.$name.$surname.'.json');
        return $find;
    }

    function encode($array){
        $jsondata = json_encode($array, JSON_PRETTY_PRINT);
        return $jsondata;
    }

    function createPerson($array,$file){
        //var_dump($array);
        $jsondata = encode($array);	
        $handle = fopen($file,'w+');
        fwrite($handle,$jsondata);
        fclose($handle);
    }

    function addPass($array,$masyvas,$data,$folder,$name,$surname){
        array_push($array,$masyvas);
        $data = encode($array);
        file_put_contents(filePath($folder,$name,$surname),$data);
        
    }

    function addJson($array,$masyvas,$data,$folder,$name,$surname){
        array_push($array,$masyvas);
        $data = encode($array);
        if(file_put_contents(filePath($folder,$name,$surname),$data)) {
            echo 'Pasisekė'.'<br>'.'<br>';
            echo 'Pridėta:';
            searchMas($masyvas);
        }
        else {
            echo "Nieko gero";
        }
    }

    function checkSession(){
               if (isset($_SESSION['id']))
        {      
            echo "Prisijungta: ".($_SESSION['name']).' '.$_SESSION['surname']."&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>Atsijungti</a><br>";
        }
        else
            echo "Neprisijungta<br><br>";
    }

    function isUserLogged() {
        if(isset($_SESSION['id'])) {
            return true;
        } else {
           return false;
        }
    }
?>