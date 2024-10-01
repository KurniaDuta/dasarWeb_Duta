<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array 1</title>
</head>
<body>
    <h2>Array Terindeks</h2>

    <?php
        $listDosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagus Nugraha"];

        for ($i=0; $i < count($listDosen); $i++) { 
            echo $listDosen[$i]."<br>";
        }
    ?>
</body>
</html>