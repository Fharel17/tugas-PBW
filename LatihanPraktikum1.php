<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Input Nilai</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        .form-container {
            margin-bottom: 20px;
        }
        .hasil-luaran {
            border: 1px solid black;
            padding: 15px;
            width: 300px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3>Form Penilaian Mahasiswa</h3>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Nilai: <input type="number" name="nilai" required><br><br>
        <input type="submit" name="proses" value="Proses">
    </form>
</div>

<?php
// Mengecek apakah tombol 'Proses' pada form sudah ditekan
if (isset($_POST['proses'])) {
    // Mengambil data dari inputan form
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    
    $predikat = "";
    $status = "";

    // Menggunakan struktur if-elseif-else dan operator perbandingan (&&)
    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 65 && $nilai <= 74) {
        $predikat = "C";
        $status = "Lulus";
    } elseif ($nilai >= 50 && $nilai <= 64) {
        $predikat = "D";
        $status = "Tidak Lulus"; 
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $predikat = "E";
        $status = "Tidak Lulus";
    } else {
        $predikat = "Tidak valid";
        $status = "-";
    }

    // Menampilkan luaran sesuai format yang diharapkan
    echo "<div class='hasil-luaran'>";
    echo "Nama : " . htmlspecialchars($nama) . "<br>";
    echo "Nilai : " . htmlspecialchars($nilai) . "<br>";
    echo "Predikat : " . $predikat . "<br>";
    echo "Status : " . $status;
    echo "</div>";
}
?>

</body>
</html>