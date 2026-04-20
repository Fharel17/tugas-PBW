<h3>Soal 1: Jenis Kendaraan</h3>

<form method="POST" action="">
    <div class="form-group">
        <label for="roda">Masukkan Jumlah Roda:</label><br>
        <input type="number" id="roda" name="roda" min="1" required>
        <button type="submit" name="cek_roda">Cek Kendaraan</button>
    </div>
</form>

<?php
if (isset($_POST['cek_roda'])) {
    $jumlah_roda = $_POST['roda'];
    echo "<hr><p>Jumlah roda yang diinput: <strong>$jumlah_roda</strong></p>";

    switch ($jumlah_roda) {
        case 2:
            echo "<p>Jenis Kendaraan: <strong>Motor atau Sepeda</strong></p>";
            break;
        case 3:
            echo "<p>Jenis Kendaraan: <strong>Becak atau Bajaj</strong></p>";
            break;
        case 4:
            echo "<p>Jenis Kendaraan: <strong>Mobil</strong></p>";
            break;
        case 6:
        case 8:
            echo "<p>Jenis Kendaraan: <strong>Truk atau Bus</strong></p>";
            break;
        default:
            echo "<p>Jenis Kendaraan: <strong>Tidak terdaftar / Kendaraan khusus</strong></p>";
            break;
    }
}
?>