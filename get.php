<?php
//  $nama = $_GET["nama"];
//  echo "Hallo " . $nama;

if(isset($_GET["nama"])){
    $nama = $_GET["nama"];
    echo "namanya adalah " . $nama;
}

 ?>

 <form action="get.php" method="GET">
    <input type="text" name="nama">
    <input type="submit" value="kirim">
 </form>