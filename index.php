
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
    if(empty($csvData)){
        echo "Nem található";
        return false;
    }
    $result = [];
    if (!empty($csvData)) {
        $maker = '';
        $model = '';
        $isHeader = true;
        foreach($csvData as $idx => $data) {
            if(!is_array($data)){
                continue;
            }
            /*if ($idx == 0) {
                continue
            }*/
            if ($isHeader) {
                $isHeader = false;
                continue;
            }
            if ($maker != $data[$idxMaker]){
                $maker = $data[$idxMaker];
            }
            if ($model != $data[$idxModel]) {
                $model = $data[$idxModel];
                $result[$maker][] = $model;
            }
        } 
        print_r($result);
    }



    
    


    


?>




