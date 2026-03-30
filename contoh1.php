<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Praktikum PHP</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .hasil-perhitungan {
            border: 1px solid black;
            padding: 20px;
            width: 450px;
            margin-top: 20px;
        }
        .hasil-perhitungan h3 {
            margin: 0 0 10px 0;
            font-family: serif;
        }
        hr {
            border-top: 1px solid black;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<?php
// 1. Pajak dijadikan konstanta (10% atau 0.1)
define('PAJAK', 0.10);

// 2. Informasi harga barang disimpan dalam array
$daftar_harga = array(
    "Keyboard" => 150000,
    "Mouse"    => 75000,
    "Monitor"  => 1200000
);

// Menentukan barang yang akan dihitung (sesuai contoh di gambar)
$nama_barang = "Keyboard";
$harga_satuan = $daftar_harga[$nama_barang];

// 3. Jumlah yang dibeli (dibuat variable)
$jumlah_beli = 2;

// 4. Perhitungan total menggunakan operator aritmatika
$total_sebelum_pajak = $harga_satuan * $jumlah_beli;
$nilai_pajak = $total_sebelum_pajak * PAJAK;
$total_bayar = $total_sebelum_pajak + $nilai_pajak;

// Fungsi bantuan untuk memformat angka menjadi format Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>

<div class="hasil-perhitungan">
    <h3>Perhitungan Total Pembelian (Dengan Array)</h3>
    <hr>
    Nama Barang: <?php echo $nama_barang; ?><br>
    Harga Satuan: <?php echo formatRupiah($harga_satuan); ?><br>
    Jumlah Beli: <?php echo $jumlah_beli; ?><br>
    Total Harga (Sebelum Pajak): <?php echo formatRupiah($total_sebelum_pajak); ?><br>
    Pajak (10%): <?php echo formatRupiah($nilai_pajak); ?><br>
    <strong>Total Bayar: <?php echo formatRupiah($total_bayar); ?></strong>
</div>

</body>
</html>