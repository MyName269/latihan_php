<?php
function salam($waktu, $nama){
    return "Selamat $waktu, $nama";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Me?"); ?></h1>
</body>
</html>