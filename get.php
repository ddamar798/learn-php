<?php
//  $nama = $_GET["nama"];
//  echo "Hallo " . $nama;

if(isset($_GET["name"])){
    $nama = $_GET["nama"];
    echo "namanya adalah " . $nama;
}

 ?>

 <form action="get.php" method="GET">
    <input type="text" name="name">
    <input type="submit" value="kirim">
 </form>
