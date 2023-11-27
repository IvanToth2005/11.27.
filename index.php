
<?php

    
    
     
    require_once ('csv-tools.php');
    ini_set('memory_limit', '560M')
    $fileName = 'car-db.csv';
    $csvData = getCsvData($fileName);
    $arr = array('first'=>'a', 'second'=>'b', );
    $key = array_search ('a', $arr);
    if(empty($csvData)){
        echo "Nem található";
        return false;
    }
    $makers = getMakers($csvData);
    print_r($makers);
    $mysqli = new mysqli("localhost","my_user","my_password","my_db");


    
    


    


?>




