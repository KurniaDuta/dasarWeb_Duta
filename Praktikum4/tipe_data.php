<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 50);
$e = $d - $c;

echo "Variabel a = {$a} <br>";
echo "Variabel b = {$b} <br>";
echo "Variabel c = {$c} <br>";
echo "Variabel d = {$d} <br>";
echo "Variabel e = {$e} <br>";

var_dump($e);
echo "<br><br>";


$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$average = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Average: {$average} <br>";

var_dump($average);
echo "<br><br>";

$namaDepan = "Ibnu";
$namaBelakang = 'Saputra';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . " " . $namaBelakang;

echo "Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: {$namaBelakang} <br>";

echo $namaLengkap;
echo "<br><br>";

$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>