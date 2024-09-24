<?php
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];

$mataKuliah = 'Matematika';

$studentCount = count($daftarNilai[$mataKuliah]);

$scoreSum = array_sum(array_column($daftarNilai[$mataKuliah], 1));

$averageScore = $scoreSum / $studentCount;

echo "Rata-rata nilai mata kuliah $mataKuliah: $averageScore <br>";
echo "Daftar mahasiswa yang lulus: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    if ($nilai[1] > $averageScore) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>