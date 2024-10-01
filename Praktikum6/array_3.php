<!DOCTYPE html>
<html lang="en">

<head>
    <title>Array 3</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>Multidimensional Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array(
            array("Avengers: Infinity War", 2018, 8.7),
            array("The Avengers", 2012, 8.1),
            array("Guardian of The Galaxy", 2014, 8.3),
            array("Iron Man", 2008, 7.3)
        );
        
        foreach ($movie as $film) {
            echo "<tr>";
            echo "<td>{$film[0]}</td>";
            echo "<td>{$film[1]}</td>";
            echo "<td>{$film[2]}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
