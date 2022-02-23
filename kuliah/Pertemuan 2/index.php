<?php

//Pertemuan 2 - PHP Dasar
// Sintaks PHP

/* 
Standar Output
echo, print
print_r
var_dump
*/

echo "Dimas Aditya" ;


//penulisan sintaks php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan tipe data
// variabel
// tidak boleh di awali dengan angka, tapi boleh mengandung angka


//Operator
// aritmatika
// + - * / %
$x = 10;
$y = 20;
echo $x * $y;


// Operator penggabung string / concatenation / concat
// . 
$nama_depan = "Dimas";
$nama_belakang = "Aditya";

echo $nama_depan . $nama_belakang;


// Assignment
// =, +=, -=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;

$nama = "Dimas";
$nama .= " ";
$nama .= "Aditya";
echo $nama;


// Perbandingan
//<, >, <=, >=, ==, !=
var_dump(1 == "1");

// identitas
// ===, !==

var_dump(1 === "1");


// logika
// &&, ||, !
$x = 30;
var_dump($x < 20 && $x % 2 == 0);


$nama = "Dimas Aditya";

echo "Halo, Nama saya $nama";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Belajar PHP </title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?> </h1>
    
</body>