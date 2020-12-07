<?php

// Secara Konsep Struktur Kontrol Dalam PHP Terbagi Menjadi Dua Bagian Besar Yakni IF dan Switch Case

// IF

$tinggi = 178;
$berat = 70;

// if($tinggi >= 170 && $berat >= 60){
//     echo "Berat Badan Ideal <br>";
// }else{
//     echo "Berat Badan Tidak Ideal <br>";
// }

// if($tinggi >= 170){
//     if($berat >= 60){
//         echo "Berat Badan dan Tinggi Badan Ideal";
//     }else{
//         echo "Berat Badan Tidak Ideal";
//     }
// }else{
//     echo "Berat Badan Tidak Ideal <br>";
// }

$menu = 2;
switch ($menu) {
    case 1:
        echo "Anda Telah Memilih Menu 1";
        break;
    case 2:
        echo "Anda Telah Memilih Menu 2";
        break;
    case 3:
        echo "Anda Telah Memilih Menu 3";
        break;
    default:
        # code...
        break;
}

?>