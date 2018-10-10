<?php

    function connectDB(){
        
        $servername = "localhost";
        $username = "root";
        $password = "password";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$dbname);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    echo "Connected successfully";

    }

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

    function cities($key = null) {
        $mas = [
            'vln' => 'Vilnius',
            'kau' => 'Kaunas',
            'klp' => 'Klaipeda',
            'sia' => 'Siauliai',
            'pnv' => 'Panevezys',
            'var'=> 'Varena',
            'pri'=> 'Prienai'
        ];


        return (! empty($key) ? $mas[$key] : $mas);    
    }


    function cityMas($defaultKey = null){
               
        $mas = cities();
        
        foreach($mas as $key=>$item){
            ?>
            <option value="<?php echo $key; ?>" <?php echo (!empty($defaultKey) && $key == $defaultKey ? 'selected' : ''); ?>>
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
                    echo $raktas2.':  '.$reiksme2.' | ';  
                }
            } else {
                if (isset($_SESSION['id'])){
                    if ($masyvas['vardas']==$_SESSION['name']){
                    echo $raktas.':  '.$reiksme;
                
                    }
                    else {
                        if ($raktas!=='pass'){
                            echo $raktas.':  '.$reiksme;
                        }
                    
                    }
                }
                else   {
                    if ($raktas!=='pass'){
                        echo $raktas.':  '.$reiksme;
                    }
                }
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
            echo "Neprisijungta<br>";
    }

    function isUserLogged() {
        if(isset($_SESSION['id'])) {
            return true;
        } else {
           return false;
        }
    }

    function logIn($name,$surname,$pass){
        if (($name!=="") && ($surname!=="") && ($pass!=="") )
        {
            $pass=md5($pass);
            $filename=filePath('json',$name,$surname);
            if(file_exists($filename)){
                echo "Rastas vartotojas<br>";
                $json = file_get_contents($filename);
                $masJson=(json_decode($json, true));         
                if (($masJson['pass']==$pass) && ($masJson['vardas']==$name) && ($masJson['pavarde']==$surname)){
                    $_SESSION=[
                        'id'=>'1',
                        'name'=>$name,
                        'surname'=>$surname,
                        //'pass'=>$pass
                    ];
                    echo "<br>Prisijungimas pavyko<br><a href='admin.php'>Vartotojo zona</a>";
                } 
                else echo "Neteisingas slaptažodis";
            }
            else   
                echo "Nėra tokio vartotojo";

        }
        else {
            echo "Nesuvesti duomenys";
        }
    }

    function alert(){
        echo "<br><br>Prisijungta: ".($_SESSION['name']).' '.$_SESSION['surname']."<br><a href='editform.php'>Keisti slaptažodi</a><br>";
    }

    function goback()
    {
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }
 



?>