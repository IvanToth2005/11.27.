
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
    
    
    $mysqli = new mysqli("localhost","root",null,"cars");
    $mysqli->query("TRUNCATE TABLE makers;");


    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
    echo "Connected";
    
    $makers = getMakers($csvData);

    
    foreach ($makers as $maker){
        $mysqli->querry("INSERT INTO cars (name) VALUES ('$maker')");
        echo "$maker\n";
    }
    $result = $mysqli->querry("SELECT COUNT(id) as cnt FROM cars;");
    $row = $result->fetch_accoc();
    echo "{$row['$cnt']} sor van;\n"
    $mysqli->close();

?>




