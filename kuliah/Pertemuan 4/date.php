<?php

    // // Date
    // // Untuk menampilkan tanggal dengan format tertentu
    

    // echo date("l, d M Y");


    // Time
    // UNIX Timestamp / Epoch Time
    // Detik yang sudah berlalu sejak 1 Januari 1970

    // echo time();

    // echo date("l", time()+60*60*24*100);




    // mktime
    // untuk membuat detik sendiri
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun

    // echo date("l", mktime(0,0,0,4,24,2001));

    // Strtotime
    echo date ("l", strtotime("24 April 2001"));


?>