<?php
// date
    // echo date("l, d M Y");
// 'l' untuk hari
// 'd' untuk date/tanggal
// 'M' bulan, sedangkan 'm' bulan dalam bentuk angka
// 'Y' untuk tahun

// Time 
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo date("d M Y", time()+60*60*24*1000);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("d M Y", mktime(0,0,0,8,25,1985));

//strtotime
echo date("l", strtotime("30 dec 1995"));
?>