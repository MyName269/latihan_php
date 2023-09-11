<!-- <?php
//perulangan yang dapat ditentukan berapa jumlah perulangannya
// for($i=0; $i < 5; $i++){
//    echo "Hello World! <br>";
    
// }
// periksa dulu baru jalankan
// $i = 0;
// while($i < 5){
//     echo "Hello World! <br>";
// }
// $i=2;
// do {
//     echo "Hello World! <br>";
//     $i++;
// } while($i<5);
// // jalankan dulu baru diselesaikan 


?>  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
    .warna-baris {
        background-color: blue;
    }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for($i=1;$i<=5;$i++) : ?>
        <?php if($i % 2 == 0) : ?>
        <tr class="warna-baris">
    <?php else : ?>
        </tr>
        <?php endif; ?>
            <?php for($j = 1; $j <= 5; $j++) : ?>
                <td><?= "$i, $j"; ?> </td>
            <?php endfor; ?>
    </table>
</body>
</html>