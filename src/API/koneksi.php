<?php
function getConnection(){
    $host = "localhost:3307";     // Host database
    $user = "root";          // Username
    $pass = "";              // Password
    $db   = "Sukses";      // Nama database

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        die(json_encode([
            "status" => false,
            "message" => "Koneksi database gagal: " . mysqli_connect_error()
        ]));
    }

    return $conn;
}
?>
