<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "ME Me?",
        "nrp" => "021548",
        "jurusan" => "Teknik Informatika",
        "email" => "me?me@gmail.com",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "YOu & Me?",
        "nrp" => "249879",
        "jurusan" => "Civil Engineering",
        "email" => "you&me?maybe@yahoo.com",
        "gambar" => "3.jfif"
    ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
        &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>
        &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?>
        </a>
    </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>