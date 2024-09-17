<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan = $hasilTambah <br>";
echo "Hasil pengurangan = $hasilKurang <br>";
echo "Hasil kali = $hasilkali <br>";
echo "Hasil bagi = $hasilBagi <br>";
echo "Sisa Bagi = $sisaBagi <br>";
echo "Hasil pangkat = $pangkat <br>";

$sama = $a == $b;
$tidakSama = $a != $b;
$lebihKecil = $a < $b;
$lebihBesar = $a > $b;
$lebihKecilSama = $a <= $b;
$lebihBesarSama = $a >= $b;

echo "Hasil Sama = $sama <br>";
echo "Hasil Tidak Sama = $tidakSama <br>";
echo "Hasil Lebih Kecil = $lebihKecil <br>";
echo "Hasil Lebih Besar = $lebihBesar <br>";
echo "Hasil Lebih Kecil Sama = $lebihKecilSama <br>";
echo "Hasil Lebih Besar Sama = $lebihBesarSama <br>";

$and = $a && $b;
$or = $a || $b;
$notA = !$a;
$notB = !$b;

echo "Hasil AND = $and <br>";
echo "Hasil OR = $or <br>";
echo "Hasil NOT A = $notA <br>";
echo "Hasil NOT B = $notB <br>";

$a += $b;
echo "Hasil A += B = $a <br>";
$a -= $b;
echo "Hasil A -= B = $a <br>";
$a *= $b;
echo "Hasil A *= B = $a <br>";
$a /= $b;
echo "Hasil A /= B = $a <br>";
$a %= $b;
echo "Hasil A %= B = $a <br>";

$hasilIdentik = $a === $b;
echo "Hasil Identik = $hasilIdentik <br>";

$tidakIdentik = $a !== $b;
echo "Hasil Tidak Identik = $tidakIdentik <br>";
?>