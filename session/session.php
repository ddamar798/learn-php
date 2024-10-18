<?php

session_start();
$_SESSION ['username'] = $_POST ['username'];
$_SESSION['password'] = $_POST ['password'];

if (isset($_SESSION ['username']) and 
isset($_SESSION['password'])) {
    echo "login berasil!!";
    echo "<a href =\"halaman.php\"><button>Next Page</button></a>";
} else {
    "Anda Belum Login :( ";
}

