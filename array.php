<?php

// array indeks dimulai dari 0 //

// $nama = [
//     "Damar",
//     "Rio",
//     "Doni",
//     "Roni",
// ];  

// echo $nama[0];      < = = Untuk Memangil Salah Satu data Array //
// var_dump ($nama);   < = = Untuk Memanggil seluruh data Array //

## ==================================================================================================
## ==================================================================================================

// $data = [
//      "nama" => ["Damar", "Doni", "Riski"],            //   <=
//       "skil" => ["memasak","merebus", "mengoreng"],   //   <=  "key" = > ["value"] 
//      "umur" => [16,13,25]                             //  <=
// ];

// echo $data ["nama"][0]; 
// var_dump ($data)

##=====================================================================================================
##                             BELAJAR LITERASI ARRAY DEGGAN FOREACH
##=====================================================================================================

$data = [
     "musim" =>["hujan", "Panas",'dingin'],
     "benua" => ["Asia", "Australia", "Eropa"],
];

foreach ($data as $key => $value) {
     foreach ( $value as $key => $data) {
          echo $data;
          echo "<br />";
     }
}
