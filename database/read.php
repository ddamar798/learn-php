<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$databaseName = "learn-php";

$connection = new mysqli($hostname, $user, $pass, $databaseName) or die("FAILED
CONNECT TO DATABASE.");

$sql = "SELECT `id`, `nama`, `role`, `level` FROM `learn-php`.`dataFreeFire` WHERE  `id`=1";
$query = $connection -> query($sql);

if ($query->num_rows != 0){
    //literasi data
    while($row = $query->fetch_assoc()){
        //var_dump($row);
        //echo $row ["nama"];
    }
}