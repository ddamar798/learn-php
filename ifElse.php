<?php
$uang = 50000;
$harga = 45000;
$kembalian = $uang - $harga;
$kurang = $harga - $uang;

if($uang < $harga){
 echo "uang anda kurang Rp." . $kurang ;
}
elseif($uang > $harga){
   echo "Kembalian anda adlah Rp." . $kembalian;
}
elseif($uang == $harga){
   "Uang anda pas";
}
else {
   echo "Peambayaran gagal" ;
}

?>