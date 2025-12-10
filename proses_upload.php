<?php
$judul = $_POST["judul"];
$isi   = $_POST["isi"];

$uploadDir = "uploads/";
$fotoPath = "";

if (!empty($_FILES["foto"]["name"])) {
    $fileName = time() . "_" . basename($_FILES["foto"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile)) {
        $fotoPath = $targetFile;
    }
}

$ceritaFile = "data/cerita.json";

$data = [];
if (file_exists($ceritaFile)) {
    $data = json_decode(file_get_contents($ceritaFile), true);
}

$data[] = [
    "judul" => $judul,
    "isi"   => $isi,
    "foto"  => $fotoPath
];

file_put_contents($ceritaFile, json_encode($data, JSON_PRETTY_PRINT));

header("Location: index.php");
exit;
?>