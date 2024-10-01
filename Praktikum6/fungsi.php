<?php
function perkenalan($nama, $salam){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Duta", "Halo");
echo "<hr>";
$saya = "Kurnia";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);
?>