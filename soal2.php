<h3>Soal 2: Mencetak Bilangan Genap</h3>

<form method="POST" action="">
    <div class="form-group">
        <label for="batas">Cetak bilangan genap sampai angka:</label><br>
        <input type="number" id="batas" name="batas" min="2" value="10" required>
        <button type="submit" name="cetak_genap">Cetak</button>
    </div>
</form>

<?php
if (isset($_POST['cetak_genap'])) {
    $batas = $_POST['batas'];
    echo "<hr><p>Bilangan genap dari 2 sampai $batas:</p>";

    for ($i = 2; $i <= $batas; $i += 2) {
        echo "<span style='padding: 5px; background: #e2e3e5; margin: 2px; border-radius: 3px;'>$i</span> ";
    }
}
?>