<?php

// Konsep Variabel di PHP Itu Berdasarkan Dari Valuenya
// Konsep Ini Biasanya Dipakai Dalam Beberapa Bahasa Pemrograman Misalnya
// PHP, Javascript, Python, Go, Dll

// int nilai = 12; Salah Kalau di PHP

$nama = "Rivaldi Hidayat"; // Value Bertipe String
$umur = 20; // Value Bertipe Integer
$berat = 59.6; // Value Bertipe Float
$status_nikah = false; // Value Bertipe Boolean 

echo "Tipe Data Nama  : " . gettype($nama) . "<br>";
echo "Tipe Data Umur  : " . gettype($umur) . "<br>";
echo "Tipe Data Berat : " . gettype($berat) . "<br>";
echo "Tipe Data Status Nikah  : " . gettype($status_nikah) . "<br>";

// Konsep Variabel Itu Ada Beberapa Macam Dalam Penaamaan
// Contoh Variabel Dengan Dua Suku Kata Seperti Status Nikah
// Setelah Tanda Karakter Dollar Tidak Boleh Selain Karakter String

// $statusNikah;
// $StatusNikah;



?>