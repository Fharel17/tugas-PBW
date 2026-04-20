<h3>Soal 3: Daftar Nama Hewan</h3>

<?php
// Array default
$hewan = ["Kucing", "Anjing", "Harimau", "Panda", "Koala"];

// Jika ada data hewan baru yang dikirim, tambahkan ke array
if (isset($_POST['tambah_hewan'])) {
    $hewan_baru = htmlspecialchars($_POST['nama_hewan']);
    if (!empty($hewan_baru)) {
        // Menambahkan elemen baru ke akhir array
        array_push($hewan, $hewan_baru); 
        echo "<p style='color: green;'>Hewan '$hewan_baru' berhasil ditambahkan (sementara)!</p>";
    }
}
?>

<form method="POST" action="">
    <div class="form-group">
        <label for="nama_hewan">Tambah Hewan Baru:</label><br>
        <input type="text" id="nama_hewan" name="nama_hewan" placeholder="Contoh: Gajah" required>
        <button type="submit" name="tambah_hewan">Tambah & Tampilkan</button>
    </div>
</form>

<hr>
<p><strong>Daftar Hewan Saat Ini:</strong></p>
<ul>
    <?php
    foreach ($hewan as $nama) {
        echo "<li>$nama</li>";
    }
    ?>
</ul>