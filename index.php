
<?php

    
    
     
    require_once ('csv-tools.php');
    ini_set('memory_limit', '560M')
    $fileName = 'car-db.csv';
    $csvData = getCsvData($fileName);
    $arr = array('first'=>'a', 'second'=>'b', );
    $key = array_search ('a', $arr);
    $header = $csvData[0];
    $keyMaker = array_search('make', $header);
    $keyModell = array_search('model', $header);
    $result = [];
    if (!empty($csvData)) {
        $maker = '';
        $model = '';
        foreach($csvData as $idx => $line) {
            if ($idx == 0) {
                continue
            }
            if ($maker != $line[$idxMaker]){
                $maker = $line[$idxMaker];
            }
            if ($model != $line[$idxModel]) {
                $model = $line[$idxModel];
                $result[$maker][] = $model;
            }
        } 
        print_r($result);
    }



    
    


    


?>




