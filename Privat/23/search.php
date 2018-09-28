
<link rel="stylesheet" href="style.css">
<div class='menu'>
				<?php
				include 'menu.php';
				?>
</div>



<div class="myP2">
<?php


$file_to_search = ($_GET['name'].$_GET['surname'].'.json');
search_file('json',$file_to_search);




function search_file($dir,$file_to_search){

$files = scandir($dir);

foreach($files as $key => $value){

    $path = realpath($dir.DIRECTORY_SEPARATOR.$value);

    if(!is_dir($path)) {

        if($file_to_search == $value){
            echo "Rastas failas<br>";
            //echo $path.'<br>';
            echo $value.'<br>'.'<br>';
            $json = file_get_contents($dir.DIRECTORY_SEPARATOR.$value);
    
            //var_dump(json_decode($json, true));
            $masJson=(json_decode($json, true));
            
            foreach ($masJson as $key => $value){
                echo '<br>';
                if(is_array($value)){
                    foreach ($value as $key2=> $value2){
                        echo '  '.$value2;
                    }
                }
                else {
                    echo $value;
                }  
            }
            break;
        }

    } else if($value != "." && $value != "..") {

        search_file($path, $file_to_search);

    }  
    
 } 
 
}
?>
</div>

