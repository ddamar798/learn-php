<?php

class statics{
    public static $angka = 1;
    public static function halo(){
        return "Halo dek1" . self::$angka;
    }

}

echo statics::$angka;
echo "<br/>";
echo statics::halo();