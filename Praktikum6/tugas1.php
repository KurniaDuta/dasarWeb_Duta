<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <h2>Data Mahasiswa Array Multidimensi</h2>
    <?php
        $mahasiswa = array(
            array("Duta Kurnia", "2341720139", "TI", "dutakurnia@gmail.com"),
            array("Azizi Shafaa", "234183019", "AN", "azizi@gmail.com"),
            array("Cristiano Ronaldo", "2341720680", "TI", "cr7@gmail.com")
        );
    
        foreach ($mahasiswa as $mhs) {
            echo "<li>Nama: " . $mhs[0] . "</li>";
            echo "<li>NIM: " . $mhs[1] . "</li>";
            echo "<li>Jurusan: " . $mhs[2] . "</li>";
            echo "<li>Email: " . $mhs[3] . "</li>";
            echo "<br>";
        }
    ?>
</body>
</html>