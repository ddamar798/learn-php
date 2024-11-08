<?php

// masukan conection dari php supaya bisa di akses
require_once "connection.php";

class Database extends Connection{
    protected $tableName = "hero";

    public function __construct(){
        parent::__construct("localhost", "root", "root", "test");
    }

    public function getAllHeroes() {
        $query = "SELECT * FROM {$this->tableName}";
        $result = mysqli_query($this->connection, $query);
        return $result;       
    }

}

//proses pemanggilan
$db = new Database();
    $db->connect();
    $db->getAllHeroes();

    $data = $db->getAllHeroes();