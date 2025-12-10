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
    <title>Tempat Kita Bercerita - Nusantara</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>
    <h1>Tempat Kita Bercerita</h1>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="tambah.php">Tambah Cerita</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<section class="hero">
    <h2>Suara dari Seluruh Penjuru Nusantara</h2>
    <p>Tempat untuk berbagi kisah, foto, dan kenangan.</p>
</section>

<section class="cerita-container">
    <h2>Cerita Terbaru</h2>
    <div class="list">

        <?php foreach ($ceritaList as $cerita): ?>
            <div class="card">
                <?php if ($cerita["foto"] != ""): ?>
                    <img src="<?= $cerita["foto"]; ?>" alt="">
                <?php endif; ?>

                <h3><?= $cerita["judul"]; ?></h3>
                <p><?= nl2br($cerita["isi"]); ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</section>

</body>
</html>