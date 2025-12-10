<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Cerita</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <h1>Tambah Cerita Baru</h1>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="tambah.php">Tambah Cerita</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<section class="form-box">
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        <label>Judul Cerita</label>
        <input type="text" name="judul" required>

        <label>Isi Cerita</label>
        <textarea name="isi" rows="6" required></textarea>

        <label>Foto (opsional)</label>
        <input type="file" name="foto">

        <button type="submit">Kirim Cerita</button>
    </form>
</section>

</body>
</html>