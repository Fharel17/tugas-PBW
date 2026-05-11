<?php

// Membuat koneksi ke database MySQL dengan parameter:host, username, password, dan nama database
$conn = new mysqli('localhost', 'root', '','praktikum9');

// Mengecek apakah terjadi kesalahan saat mencoba melakukankoneksi
if ($conn->connect_error) {
// Jika koneksi gagal, hentikan program dan tampilkan pesanerror
die("Connection failed: " . $conn->connect_error);
}

?>