<?php

// class statics{
//     public static $angka = 1;
//     public static function halo(){
//         return "Halo dek1" . self::$angka;
//     }

// }

// echo statics::$angka;
// echo "<br/>";
// echo statics::halo();

class mobil{
    public static $warna = "putih";

    public static function ror(){
        return "Avansa warna " . self::$warna;
    }
}

echo mobil::$warna;
echo "<hr/>";
echo mobil::ror();