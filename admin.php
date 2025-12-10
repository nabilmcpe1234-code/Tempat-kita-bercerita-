<?php
$ceritaFile = "data/cerita.json";
$ceritaList = [];

if (file_exists($ceritaFile)) {
    $ceritaList = json_decode(file_get_contents($ceritaFile), true);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <h1>Panel Admin</h1>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="tambah.php">Tambah Cerita</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<section class="admin-box">
    <h2>Semua Cerita</h2>

    <?php foreach ($ceritaList as $cerita): ?>
        <div class="admin-item">
            <h3><?= $cerita["judul"]; ?></h3>
            <p><?= nl2br($cerita["isi"]); ?></p>
        </div>
    <?php endforeach; ?>

</section>

</body>
</html>