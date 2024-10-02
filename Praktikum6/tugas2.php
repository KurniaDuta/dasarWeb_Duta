<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Data Siswa</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        <?php
        $siswa = [
            ["nama" => "Andi", "umur" => 15, "kelas" => "10A", "alamat" => "Malang"],
            ["nama" => "Siti", "umur" => 16, "kelas" => "10A", "alamat" => "Batu"],
            ["nama" => "Budi", "umur" => 15, "kelas" => "10B", "alamat" => "Dinoyo"],
            ["nama" => "Anton", "umur" => 25, "kelas" => "15A", "alamat" => "Dinoyo"]
        ];

        $totalUmur = 0;
        $jumlahSiswa = count($siswa);

        foreach ($siswa as $data) {
            echo "<tr>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['umur'] . "</td>";
            echo "<td>" . $data['kelas'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "</tr>";

            $totalUmur += $data['umur'];
        }

        $rataRataUmur = $totalUmur / $jumlahSiswa;
        ?>
    </table>

    <h3>Rata-rata Umur Siswa: <?php echo number_format($rataRataUmur, 2); ?> tahun</h3>
</body>
</html>
