<?php

// $mahasiswa = [
//     ["DimasAditya", "193040128", "dimasaditya@gmail.com", "Teknik Informatika"],
//     ["Rafi Nuril", "193040123", "rafinuril@gmail.com", "Teknik Informatika"]

    
// ];

//asrray Associative
//definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri


$mahasiswa = [ 
            [
              "nama" => "Dimas Aditya", 
              "nrp" => "193040128", 
              "jurusan" => "Teknik Informatika",
              "email" => "DimaAditya@gmail.com",
              "gambar" => "1.jpg"
            ],
            [
                "nama" => "RafiNuril", 
                "nrp" => "193040123", 
                "jurusan" => "Teknik Informatika",
                "email" => "RafiNuril@gmail.com" ,
                "gambar" => "2.jpg"
              
            ]
              
            ];  

            
?>

<DOCTYPE html>
    <html>
        <head>
            <title>Daftar Mahasiswa</title>
        </head>
    
        <body>
            <h1>Daftar Mahasiswa</h1>
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
                <li>
                    <img src="img/<?=  $mhs["gambar"];  ?>">
                </li>
                <li>Nama :<?= $mhs["nama"]; ?></li>
                <li>NRP :<?= $mhs["nrp"]; ?></li>
                <li>Email :<?= $mhs["email"]; ?></li>
                <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            </ul>
            <?php endforeach; ?>

</body>
</html>