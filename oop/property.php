<?php

class produk{
    public $judul = "judul", 
    $penulis = "penulis", 
    $penerbit = 'penerbit', 
    $harga = 0;
}

$produk1 = new produk();
$produk1->judul = 'kisah tirex';
$produk1->penulis = 'damarr';
$produk1->penerbit = 'PT Jaya mabur';
$produk1->harga = 50000;
var_dump($produk1);
//echo $produk1->judul, $produk1->penulis;

$produk2 = new produk();
$produk2->judul = 'cara jadi hengker';
$produk2->penulis = "ddamarr";
$produk2->penerbit = "PT Ceria Jaya";
$produk2->harga = 49500;
var_dump($produk2);