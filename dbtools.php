

<?php

function insertMaker($mysqli, $makers, $truncate = false){
    
    if ($truncate) {
        $mysqli->query("TRUNCATE TABLE makers;");

    }
    foreach ($makers as $maker){
        $mysqli->querry("INSERT INTO cars (name) VALUES ('$maker')");
        if (!$result) {
            echo "hiba történt";
            return $result;
        }
        
    }
    return $result;

}