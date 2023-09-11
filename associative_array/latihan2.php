<?php

// Array Associative 
// definisiny sama seperti array numerik, 
// kecuali key-nya adalah string ynag kita buat sendiri
 
$mahasiswa = [
    [
        "nama" => "ME Me?",
        "nrp" => "021548",
        "jurusan" => "Teknik Informatika",
        "email" => "me?me@gmail.com",
        "gambar" => "gambar.jpg"
    ],
    [
        "nama" => "YOu & Me?",
        "nrp" => "249879",
        "jurusan" => "Civil Engineering",
        "email" => "you&me?maybe@yahoo.com",
        "gambar" => "gambar1.jpg"
    ]
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" width="250">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>
