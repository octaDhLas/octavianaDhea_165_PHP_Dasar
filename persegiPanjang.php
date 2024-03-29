<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hitung Luas Persegi Panjang</title>

</head>
<body>
    <div class="container">
        <h2>Hitung Luas Persegi Panjang</h2>
        <form method="post" action="">
            <label for="panjang"></label>
            <input placeholder="Masukkan nilai panjang" type="number" id="panjang" name="panjang" required><br><br>
            <label for="lebar"></label>
            <input placeholder="Masukkan nilai lebar" type="number" id="lebar" name="lebar" required><br><br>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        // Cek apakah tombol "Hitung" ditekan
        if(isset($_POST['hitung'])) {
            // Mengambil nilai panjang dan lebar dari input form
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            // Menghitung luas persegi panjang
            $luas = $panjang * $lebar;

            // Menampilkan hasil
            echo "<p>Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah: $luas</p>";
        }
        ?>
    </div>
</body>
</html>
