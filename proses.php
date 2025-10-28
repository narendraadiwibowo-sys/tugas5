<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Formulir</title>
</head>
<body>
    <h2>Hasil Pengisian Formulir</h2>

    <?php
        if (
            isset($_POST['nama']) && !empty($_POST['nama']) &&
            isset($_POST['alamat']) && !empty($_POST['alamat']) &&
            isset($_POST['tanggal_lahir']) && !empty($_POST['tanggal_lahir']) &&
            isset($_POST['jenis_kelamin']) && !empty($_POST['jenis_kelamin'])
        ) {
            $nama = htmlspecialchars($_POST['nama']);
            $alamat = htmlspecialchars($_POST['alamat']);
            $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
            $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);

            echo "<p><strong>Nama Lengkap:</strong> $nama</p>";
            echo "<p><strong>Alamat:</strong> $alamat</p>";
            echo "<p><strong>Tanggal Lahir:</strong> $tanggal_lahir</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
        } else {
            echo "<p>Maaf, terjadi kesalahan. Data tidak lengkap.</p>";
                }
    ?>

    <a href="form.html">Kembali ke Formulir</a>
</body>
</html>
