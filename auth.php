<?php 
// Cek apakah session sudah nyala atau belum, agar tidak bentrok
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Jika belum login, tendang ke halaman login
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dulu bro."));
    exit;
}
?>