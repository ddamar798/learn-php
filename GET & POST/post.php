<?php

// if(isset($_POST["ror"])){
//     $nama = $_POST["ror"];
//     echo "Hallo " . $nama;
// }

 

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    echo "Halloo " . $nama;
}
?>

<form action="post.php" method="POST">
    <input type="text" name="nama">
    <input type="submit">
</form>