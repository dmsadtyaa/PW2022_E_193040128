<?php 

// variabel Scope

// $x = 10;


// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPER GLOBALS
// variabel global milik PHP
// merupakan Array Associative

// echo $_SERVER["SERVER_NAME"];


// $_GET

// $_GET["nama"] = "Dimas Aditya";
// $_GET["nrp"] = "193040128";
// var_dump($_GET);


// $_GET

$mahasiswa = [ 
    [
      "nama" => "Dimas Aditya", 
      "nrp" => "193040128", 
      "jurusan" => "Teknik Informatika",
      "email" => "dimasaditya@gmail.com",
      "gambar" => "2.jpg"
    ],
    [
        "nama" => "Rafi Nuril", 
        "nrp" => "193040123", 
        "jurusan" => "Teknik Informatika",
        "email" => "rafinuril@gmail.com" ,
        "gambar" => "3.jpg"
      
    ]
      
    ];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <li>
           <a href="latihan2.php?nama=<?= $mhs["nama"]; ?> &nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"> <?= $mhs["nama"]; ?></a> 
        </li>
        <!-- <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>" > <li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
        </ul> -->
    <?php endforeach; ?>
    </ul>

</body>
</html>