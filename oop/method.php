<?php
// class produc{
//     public $judul = "",
//     $penulis = "",
//     $penerbit = "",
//     $harga = 0;

//     public function getlable(){
//         return "$this->judul, $this->penulis, $this->penerbit, $this->harga";

//     }
// }

// $produk1 = new produc();
// $produk1->judul = "Sigma";
// $produk1->penulis = "ddamarr";
// $produk1->penerbit = "PT Damar549";
// $produk1->harga = 50.000;

// echo $produk1->getlable() . "<br/>";


// $produk2 = new produc();
// $produk2->judul = "Alok";
// $produk2->penulis = "Garena";
// $produk2->penerbit = "Garena";
// $produk2->harga = 0;

// echo $produk2->getlable();

class game{
    public $dev ="",
    $genre = "",
    $size = "";

    public function gamez(){
        return "$this->genre,$this->dev,$this->size";
}
}

$game1 = new game();
$game1->dev = "garena";
$game1->genre = "Battle Royale";
$game1->size = "700Mb";

echo $game1->gamez() . "<br/>";

$game2 = new game();
$game2->dev = "Moonton";
$game2->genre = "Moba";
$game2->size = "300Mb";

echo $game2->gamez();