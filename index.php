
<?php   
    require_once ('csv-tools.php');
    require_once ('dbtools.php');
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
    


    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
    echo "Connected";
    
    $makers = getMakers($csvData);
    foreach ($makers as $maker) {
        //$mysqli->query("INSERT INTO makers (name) VALUES ('$maker')");
        $result = createMaker($mysqli, $maker);
        if (!$result){
            $errors[] = $maker;
        }
        echo "$maker\n";
    }
    $result = insertMakers($mysqli, $makers, true);
    
    
    //$result = $mysqli->querry("SELECT COUNT(id) as cnt FROM cars;");
    //$row = $result->fetch_accoc();
    $makers = getAllMakers($mysqli);
    $cnt = count($makers);
    echo "{$row['$cnt']} sor van;\n"
    $mysqli->close();

?>