<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Diskon UKT Mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        .form-input {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            width: 350px;
        }
        .form-input input {
            margin-bottom: 10px;
            width: 100%;
            padding: 5px;
        }
        .luaran-box {
            border: 1px solid black;
            padding: 15px;
            width: 450px;
            line-height: 1.8;
            font-family: monospace; /* Menggunakan font monospace agar rapi seperti di soal */
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="form-input">
        <h3>Form Input Data Mahasiswa</h3>
        <form method="POST" action="">
            <label>NPM:</label>
            <input type="text" name="npm" required placeholder="Contoh: 12345xxxx">
            
            <label>Nama:</label>
            <input type="text" name="nama" required placeholder="Contoh: FHAREL">
            
            <label>Program Studi:</label>
            <input type="text" name="prodi" required placeholder="Contoh: INFORMATIKA">
            
            <label>Semester:</label>
            <input type="number" name="semester" required placeholder="Contoh: 9">
            
            <label>Biaya UKT (Rp):</label>
            <input type="number" name="biaya_ukt" required placeholder="Contoh: 5900000">
            
            <button type="submit" name="hitung">Hitung Diskon</button>
        </form>
    </div>

    <?php
    // Mengecek apakah tombol 'Hitung Diskon' sudah ditekan
    if (isset($_POST['hitung'])) {
        
        // 1. Mengambil data dari form
        $npm = $_POST['npm'];
        // Mengubah nama dan prodi menjadi huruf kapital (UPPERCASE) sesuai format luaran
        $nama = strtoupper($_POST['nama']); 
        $prodi = strtoupper($_POST['prodi']);
        $semester = $_POST['semester'];
        $biaya_ukt = $_POST['biaya_ukt'];

        // 2. Logika Penentuan Diskon (Sesuai Syarat b dan c)
        $persen_diskon = 0;

        // Cek kondisi paling spesifik (UKT >= 5jt DAN Semester > 8) terlebih dahulu
        if ($biaya_ukt >= 5000000 && $semester > 8) {
            $persen_diskon = 15;
        } 
        // Jika tidak memenuhi syarat di atas, cek kondisi kedua (Hanya UKT >= 5jt)
        elseif ($biaya_ukt >= 5000000) {
            $persen_diskon = 10;
        } 
        // Jika tidak keduanya, tidak dapat diskon
        else {
            $persen_diskon = 0;
        }

        // 3. Proses Perhitungan Matematika
        $potongan_harga = $biaya_ukt * ($persen_diskon / 100);
        $total_bayar = $biaya_ukt - $potongan_harga;

        // Fungsi bantuan untuk memformat angka menjadi Rupiah (Rp. XXX.XXX,-)
        function formatRupiah($angka) {
            return "Rp. " . number_format($angka, 0, ',', '.') . ",-";
        }

        // 4. Menampilkan Luaran Sesuai Format yang Diharapkan
        echo "<h3>Luaran yang diharuskan</h3>";
        echo "<div class='luaran-box'>";
        echo "NPM : " . htmlspecialchars($npm) . "<br>";
        echo "NAMA : " . htmlspecialchars($nama) . "<br>";
        echo "PRODI : " . htmlspecialchars($prodi) . "<br>";
        echo "SEMESTER : " . htmlspecialchars($semester) . "<br>";
        echo "BIAYA UKT : " . formatRupiah($biaya_ukt) . "<br>";
        echo "DISKON : " . $persen_diskon . "% <br>";
        echo "YANG HARUS DIBAYAR : " . formatRupiah($total_bayar);
        echo "</div>";
    }
    ?>

</body>
</html>