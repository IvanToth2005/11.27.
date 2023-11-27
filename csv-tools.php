<?php

    $fileName = 'car-db.csv'; 

    function getCsvData($fileName, $withHeader = true){

        if (!file_exists($fileName)){
            echo "$filename nem található";
            return false;
        }
        if ($withHeader) {
            $lines[] = $header;
        }
        else {
            $lines = [];
        }
        while (! feof($csvFile)) {
            $line = fgetcsv($csvFile);
            $lines = $line;
        }
        fclose($csvFile);
        return $lines;
        



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