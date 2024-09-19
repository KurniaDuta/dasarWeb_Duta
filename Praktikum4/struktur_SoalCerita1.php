<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$terendah = 2;
$tertinggi = 2;

foreach ($nilaiSiswa as $nilai) {
    echo "Nilai: $nilai <br>";
}

sort($nilaiSiswa);

$nilaiSum = 0;
for ($i = $terendah; $i < count($nilaiSiswa) - $tertinggi; $i++) {
    $nilaiSum += $nilaiSiswa[$i];
}

$average = $nilaiSum / (count($nilaiSiswa) - $terendah - $tertinggi);

echo "Rata-rata nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $average";
?>