<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="styleTugas3.css">
    <script src="../Praktikum5/praktik_jQuery/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                if ($("#data").is(":visible")) {
                    $("#data").slideUp("slow");
                } else {
                    $("#data").slideDown("slow");
                }
            });
        });
    </script>
</head>

<body>
    <h2>Data Siswa</h2>
    <div id="flip" style="cursor: pointer;"><strong>Klik di sini untuk menampilkan atau menyembunyikan data</strong></div>
    <div id="data" style="display: none;">
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
    </div>
    </table>

    <h3>Rata-rata Umur Siswa: <?php echo number_format($rataRataUmur, 2); ?> tahun</h3>
</body>

</html>