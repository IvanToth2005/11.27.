<?php


class MakersDbTools {
    const DBTABLE = 'makers';
    private $mysqli;
    function __construct($host = 'localhost', $user = 'root', $password = null, $db = 'cars'){
        $this->mysqli = new mysqli($host, $user, $password, $db);
        if($this->mysqli->connect_errno) {
            throw new Exception($this->mysqli->connect_errno);

        }
    }
    function __destruct(){
        $this->mysqli->close();
    }

    function createMaker($maker) {
        $result = $mysqli->query("INSERT INTO makers (name) VALUES ('$maker')");
        if (!$result) {
            echo "Hiba történt";
    
        }
        return $result;
    }
}
