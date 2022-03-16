<?php
    $mahasiswa = [
        ["Dimas Aditya", "193040128", "Teknik Informatika", "193040128@mail.unpas.ac.id"],

        ["Fauzan Kamal", "193040112", "Teknik Informatika", "193040112@mail.unpas.ac.id"],
        ["Gigih Dwi Saputra", "203040120", "Teknik Informatika", "193040120@mail.unpas.ac.id"]
  
];
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>