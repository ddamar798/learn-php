<?php

if(isset($_POST["ror"])){
    $nama = $_POST["ror"];
    echo "Hallo " . $nama;
}

?>

<form action="post.php" method="POST">
    <input type="text" name="ror">
    <input type="submit">
</form>
