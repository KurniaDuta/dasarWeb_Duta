<?php
$nialiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$nialiLulus = [];

foreach ($nialiSiswa as $niali) {
    if ($niali >= 70) {
        $nialiLulus[] = $niali;
    }
}

echo "daftar nilai siswa yang lulus: " . implode(", ", $nialiLulus);

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6]
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] >= 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br>daftar karyawan yang memiliki pengalaman lebih dari lima tahun: " . implode(", ", $karyawanPengalamanLimaTahun);
?>