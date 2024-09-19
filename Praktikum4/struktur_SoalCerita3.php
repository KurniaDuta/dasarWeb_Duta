<?php
function checkPrizeStatus($score) {
    $prizeStatus = ($score > 500) ? "YA" : "TIDAK";
    return $prizeStatus;
}

$score = 600;
echo "Total skor pemain adalah: $score <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . checkPrizeStatus($score) . "<br>";

$score = 500;
echo "Total skor pemain adalah: $score <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . checkPrizeStatus($score) . "<br>";
?>