<?php

class produk{
    private $judul,
           $penulis,
           $penerbit, 
           $diskon,
            $harga;

           public function __construct($judul = "", $penulis = "", 
           $penerbit = "", $harga = "") {

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

           public function setJudul($judul){
            if(!is_string($judul)){
                throw new Exception("Judul Harus String!!");
            }
            $this->judul = $judul;
           }

           public function setPenulis($penulis){
            $this->penulis= $penulis;
           }

           public function setPenerbit($penerbit){
            $this->penerbit = $penerbit;
           }

           public function getJudul(){
            return $this->judul;
           }

           public function setDiskon( $diskon ) {
            $this->diskon = $diskon;
           }

           public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
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

$produk1 = new game("PUBG", "Tencent", "Tencent", "10000", "20",);

echo $produk1->getInfoProduk();
echo "<hr/>";

$produk1->setJudul("Free Fire");
echo $produk1->getJudul();

// $produk1->setDiskon(50);
// echo $produk1->getHarga();