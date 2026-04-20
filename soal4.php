<h3>Soal 4: Cek Ganjil Genap</h3>

<form method="POST" action="">
    <div class="form-group">
        <label for="angka">Masukkan sebuah angka:</label><br>
        <input type="number" id="angka" name="angka" required>
        <button type="submit" name="cek_angka">Cek Angka</button>
    </div>
</form>

<?php
if (isset($_POST['cek_angka'])) {
    $angka = $_POST['angka'];

    // Ternary operator
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

    echo "<hr>";
    echo "<p>Angka <strong>$angka</strong> adalah bilangan <strong style='color: blue;'>$hasil</strong>.</p>";
}
?>