<?php
$nialiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$nialiLulus = [];

foreach ($nialiSiswa as $niali) {
    if ($niali >= 70) {
        $nialiLulus[] = $niali;
    }
}

echo "daftar nilai siswa yang lulus: " . implode(", ", $nialiLulus);
?>