<?php

// class mobil{
//     public $merek = "",
//     $cc = 0,
//     $jumlahPenumpang = 0;

//     public function __construct($merek, $cc, $jumlahpenumpang){
//         $this->merek = $merek;
//         $this->cc = $cc;
//         $this->jumlahPenumpang = $jumlahpenumpang;
//     }

//     public function getLabel(){
//         return "$this->merek, $this->cc, $this->jumlahPenumpang";
//     }
// }


// $mobil1 = new mobil("avansa" , 5000 , 6 );
// $mobil2 = new mobil("pajero", 10.000, 6);
// $mobil3 = new mobil ("Fortuner",10.000, 6);

// echo $mobil1->getLabel() . "<br/>";
// echo $mobil2->getLabel() ."<br/>";
// echo $mobil3->getLabel() ."<br/>";

class buku {
    public $judul = "",
    $penerbit= "", 
    $harga= 0;

    public function __construct( $judul, $penerbit, $harga ) {
        $this->judul = $judul; 
        $this->penerbit = $penerbit; 
        $this->harga=$harga; }

        public function get() { 
            return "$this->judul, $this->penerbit, $this->harga"; 
        }
    }

    $buku1 = new buku("Dino","Jurasix", 50.000);
    $buku2 = new buku("Kancil","PT Maria S.", 35.000);

    //var_dump($buku1);
    echo "Buku satu : " . $buku1->get() . "<br/>";
    echo "buku dua : ". $buku2->get();
