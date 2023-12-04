

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
function createMaker($mysqli, $maker) {
    $result = $mysqli->query("INSERT INTO makers (name) VALUES ('$maker')");
    if (!$result) {
        echo "Hiba történt";

    }
    return $result;
}

function updateMaker($mysqli, $data){
    $result = $mysqli->query("UPDATE makers SET {$data['name']}");
    if (!$result) {
        echo "Hiba történt";
        return $result;

    }
    $maker = getMakerByName($mysqli, $data['name']);
    return $result;
}



function getMakerByName($mysqli, $data['name']){

}
function getMaker($mysqli, $id) {
    $result = $result->query("SELECT * FROM makers WHERE id = $id");
    $maker = $result->fetch_assoc();
    return $maker;
}
function delMaker($mysqli, $id) {
    $result = $mysqli->query("DELETE makers Where id=$id");
    return $result;
}

function getAllMakers($mysqli){
    $result = $result->query("SELECT * FROM makers");
    $makers = $result->fetch_all(MYSQLI_ASSOC);
    return $makers;
}



