<?php
// function tampilkanHaloDunia(){
//     echo "Halo Dunia <br>";
//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

function tampilkanAngka (int $jumlah, int $index = 1) {
    echo "Perulangan ke-$index <br>";

    if ($index < $jumlah) {
        tampilkanAngka($jumlah, $index + 1);
    }
}
tampilkanAngka(20);
?>