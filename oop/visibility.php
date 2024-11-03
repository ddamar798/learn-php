<?php

class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

           public function __construct($judul = "", $penulis = "", 
           $penerbit = "", $harga = "") {

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

           public function getKonten(){
            return "$this->judul , $this->penerbit";
}

public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getKonten()} (Rp. {$this->harga})";
    return $str;
}
}

class komik extends produk{
    public $jmlhHalaman;

    public function __construct ($judul = "", $penulis = "", $penerbit = "", $harga = "", $jmlhHalaman = "") {
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlhHalaman = $jmlhHalaman;
}
public function getInfoProduk(){
    $str = "komik :" . parent::getInfoProduk() . " - {$this->jmlhHalaman} Halaman.";
    return $str;
}
}

class game extends produk{
    public $waktuMain;

    public function __construct ($judul = "", $penulis = "", $penerbit = "", $harga = 0, $waktuMain = ""){
        parent::__construct($judul,$penulis,$penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoproduk(){
        $str = "Game :". parent::getInfoProduk() . " ~ {$this->waktuMain} Menit.";
        return $str;
    }
}

$produk1 = new game("PUBG", "Tencent", "Tencent", "0", "20");

echo $produk1->getInfoproduk();