<?php


class produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;

           public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = ""){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
           }

           public function getLabel(){
            return "$this->penulis, $this->penerbit";
           }

           public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str;
           }
}

class komik extends produk{
    public $jumlahHalaman;

    public function __construct($judul = "", $penulis = "", $penerbit = "", 
    $harga = "", $jumlahHalaman = ""){

        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }


public function getInfoProduk(){
    $str = "komik :"  . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
    return $str;
  }
}

class game extends produk{
    public $waktuMain;
    public function __construct($judul = "", $penulis = "", $penerbit = "", $harga = "", $waktuMain = 0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
}


public function getInfoProduk(){
$str = "Game :" . parent::getInfoProduk() . " ~ {$this->waktuMain} Menit";
return $str;
}
}

$produk1 = new komik("Cinta", "Firaun", "PT Mesir", "Rp. 35.000", 55);
$produk2 = new game("Free Fire","Garena","Garena", "0", 15);

echo $produk1->getInfoProduk() . "<br/>";
echo $produk2->getInfoProduk();