<?php
    $pattern = '/[a-z]/';
    $text = 'This is a Sample text.';
    if (preg_match($pattern, $text)) {
        echo "Huruf kecil ditemukan";
    } else {
        echo "Huruf kecil tidak ditemukan";
    }
    echo "<br>";
    $pattern2 = '/[0-9]/';
    $text2 = 'There are 123 apples';
    if (preg_match($pattern2, $text2, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak ada yang cocok";
    }
    echo "<br>";
    $pattern3 = '/apple/';
    $replacement = 'banana';
    $text3 = 'I like apple pie';
    $new_text = preg_replace($pattern3, $replacement, $text3);
    echo $new_text;
    echo "<br>";
    $pattern4 = '/go*d/';
    $text4 = 'god is good.';
    if (preg_match($pattern4, $text4, $matches)) {
        echo "Cocokkan: " . $matches[0];
    } else {
        echo "Tidak cocok";
    }
    echo "<br>";
    
?>