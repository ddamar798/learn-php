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
var_dump($produk1);
//echo $produk1->judul, $produk1->penulis;

$produk2 = new produk();
$produk2->judul = 'cara jadi hengker';
$produk2->penulis = "ddamarr";
var_dump($produk2);