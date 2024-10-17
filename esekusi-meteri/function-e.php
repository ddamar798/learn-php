<?php

// function data (...$input){
//     $result = 0;
//     foreach ($input as $value) {
//         $result = $result - $value;
//     }
//     return $result;
// }
// echo data(34,34,523);

function ror($nama,$usia){
    $bio = $nama . $usia;
    return $bio;
}
echo ror("damar " , 16);