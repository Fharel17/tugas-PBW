<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum PHP Dinamis</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; color: #333; }
        .navigasi { margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #ccc; }
        .navigasi a { 
            text-decoration: none; padding: 8px 15px; 
            background-color: #007BFF; color: white; 
            border-radius: 4px; margin-right: 10px; display: inline-block; margin-bottom: 5px;
        }
        .navigasi a:hover { background-color: #0056b3; }
        .konten { padding: 20px; border: 1px dashed #999; border-radius: 5px; background: #f9f9f9; }
        .form-group { margin-bottom: 15px; }
        input[type="number"], input[type="text"] { padding: 8px; width: 200px; }
        button { padding: 8px 15px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #218838; }
    </style>
</head>
<body>

    <h2>Tugas Latihan Praktikum (Dinamis)</h2>
    
    <div class="navigasi">
        <?php
        // Membuat menu navigasi secara dinamis menggunakan array
        $daftar_menu = [
            'soal1' => 'Soal 1 (Switch)',
            'soal2' => 'Soal 2 (For)',
            'soal3' => 'Soal 3 (Array)',
            'soal4' => 'Soal 4 (Ternary)'
        ];

        foreach ($daftar_menu as $link => $judul) {
            echo "<a href='?halaman=$link'>$judul</a>";
        }
        ?>
    </div>

    <div class="konten">
        <?php
        if (isset($_GET['halaman'])) {
            $halaman = $_GET['halaman'];
            $file_tujuan = $halaman . ".php";

            // Validasi kunci array agar aman
            if (array_key_exists($halaman, $daftar_menu) && file_exists($file_tujuan)) {
                include $file_tujuan;
            } else {
                echo "<p style='color:red;'>Halaman tidak ditemukan!</p>";
            }
        } else {
            echo "<p>Silakan pilih menu di atas untuk mulai mencoba program.</p>";
        }
        ?>
    </div>

</body>
</html>