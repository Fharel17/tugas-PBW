<?php
session_start();

// Kosongkan semua data session
session_unset();

// Hancurkan session
session_destroy();

// Menggunakan JavaScript sebagai jalur alternatif pengganti header()
echo "<script>
        window.location.href = 'login.php?message=" . urlencode("Anda telah berhasil logout.") . "';
      </script>";
exit;
?>