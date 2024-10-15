<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
        echo "file berhasil diunggah.";
    } else {
        echo "file gagal diunggah.";
    }
}
