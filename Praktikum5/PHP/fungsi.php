<?php
// function perkenalan($nama, $salam = "Assalamualaikum"){
//     echo $salam. ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br>";
//     echo "Senang berkenalan dengan Anda<br>";
// }

// perkenalan("Duta", "Halo");

// echo "<hr>";

// $saya = "Kurnia";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya);

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun";
?>