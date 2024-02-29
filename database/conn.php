<?php
    $host = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = "icebsh";
    $conn = mysqli_connect($host,$user,$pass,$db);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // echo "Koneksi berhasil";

    // Tutup koneksi
    // $conn->close();

?>