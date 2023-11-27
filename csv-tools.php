<?php

    $fileName = 'car-db.csv'; 

    function getCsvData($fileName){

        if (!file_exists($fileName)){
            echo "$filename nem található";
            return false;
        }
        $csvFile = fopen($fileName, 'r')
        $lines = [];
        while (! feof($csvFile)) {
            $line = fgetcsv($csvFile);
            $lines = $line;
        }
        fclose($csvFile);
        return $lines;
        



    }



    function getMakers($csvData) {
        $header = $csvData[0];
        $keyMaker = array_search('make', $header);
        //$keyModell = array_search('model', $header);
        
        //$result = [];
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
                /*
                
                if ($model != $data[$idxModel]) {
                    $model = $data[$idxModel];
                    $result[$maker][] = $model;
                }
                */
                
            } 
            return $makers;
    }




    }
    //$csvData = getCsvData($fileName);
    /*     
    if (file_exists($fileName)) {
        $csvFile = fopen('car-db.csv', 'r');
        $header = fgetcsv($csvFile);
        $lines = [];
    }
    */


?>