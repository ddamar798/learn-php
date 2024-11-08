<?php
class connection {
    protected $hostname = "localhost",
              $username = "root",   
              $password = "",
              $databaseName = "test";
    public $connection; //akan menampung eksisting koneksi database

    public function __construct($hostname, $username, $password, $databaseName) {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->databaseName = $databaseName;
    }

    public function connect() {
        $this->connection = new mysqli(
            $this->hostname, 
        $this->username, 
        $this->password, 
        $this->databaseName
    );

        if ($this->connection->connect_error) {
            die("Connection failed: ". $this->connection->connect_error);
        }
        echo "Connected successfully";
    }
}