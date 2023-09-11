<?php
$mahasiswa = [
    ["ME Me?", "021548", "Teknik Informatika", "me?me@yahoo.com"],
    ["YOU You?", "163489", "Civil Engineering", "you?mine@gmail.com"],
    ["YOu & Me?", "249879", "Sistem Informasi", "you&me?maybe@yahoo.com"],

];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Diri</title>
</head>
<body>
    <h1>Data Diri</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?=$mhs[0]; ?></li>
        <li>NIS : <?=$mhs[1]; ?></li>
        <li>Jurusan : <?=$mhs[2]; ?></li>
        <li>Email : <?=$mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>