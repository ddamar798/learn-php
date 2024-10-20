<?php

session_start();

$_SESSION['email'] = $_POST['email'];
$_SESSION ['password'] = $_POST['password'];
$_SESSION ['repeat-password'] = $_POST ['repeat-password'];

if (isset($_SESSION['email']) and isset ($_SESSION['password']) 
and isset ($_SESSION['repeat-password'])){
    echo "register berhasil";
    echo "<a href=\"login.html\">Login!</a>";
}else {
    echo "register gagal";
}