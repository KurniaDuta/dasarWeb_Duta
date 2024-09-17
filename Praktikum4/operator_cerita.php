<?php
$kapasitas = 45;
$terisi = 28;
$persentasiKosong = (($kapasitas - $terisi) / $kapasitas) * 100;

echo "Persentasi kursi kosong: {$persentasiKosong}%";
?>