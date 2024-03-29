<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bio.css">
    <title>Form Biodata Diri</title>
</head>
<body>
    <div class="container">
        <h2>Form Biodata Diri</h2>
        <form method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"  placeholder="Masukkan alamat email" required><br>
            <label for="alamat">Alamat:</label><br>
            <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap" required></textarea><br>
            <button type="submit" name="simpan">Simpan</button>
        </form>
        <?php
        // Cek apakah tombol "Simpan" ditekan
        if(isset($_POST['simpan'])) {
            // Mengambil nilai dari input form
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            // Menampilkan hasil dalam tabel
            echo "<h2>Hasil Biodata Diri</h2>";
            echo "<table>";
            echo "<tr><th>Nama</th><th>Email</th><th>Alamat</th></tr>";
            echo "<tr><td>$nama</td><td>$email</td><td>$alamat</td></tr>";
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
