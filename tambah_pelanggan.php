<?php 
include 'auth.php'; 
include 'koneksi_db.php';
include 'nav.php';

// Proses saat tombol submit ditekan
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    
    // Pastikan tidak kosong (bisa disesuaikan dengan kolom di database Anda)
    if (!empty($nama)) {
        // Query untuk menyimpan data
        // Asumsi: kolom ID otomatis bertambah (Auto Increment)
        $query = "INSERT INTO pelanggan (Nama) VALUES ('$nama')";
        
        if ($conn->query($query) === TRUE) {
            $pesan = "Pelanggan bernama $nama berhasil ditambahkan!";
            $tipe_pesan = "success";
        } else {
            $pesan = "Gagal menambahkan pelanggan: " . $conn->error;
            $tipe_pesan = "danger";
        }
    } else {
        $pesan = "Nama pelanggan tidak boleh kosong!";
        $tipe_pesan = "warning";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Pelanggan Baru</title>
</head>
<body>

<div class="container mt-4">
    <h2>Tambah Pelanggan Baru</h2>

    <?php if (isset($pesan)): ?>
        <div class="alert alert-<?= $tipe_pesan ?>">
            <?= $pesan ?>
        </div>
    <?php endif; ?>

    <form method="post" action="tambah_pelanggan.php">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
        </div>

        <button type="submit" name="submit" class="btn btn-success">Simpan Pelanggan</button>
        <a href="buat_pesanan.php" class="btn btn-secondary">Kembali ke Pesanan</a>
    </form>
</div>

</body>
</html>