<?php 
$mahasiswa = [
    [
        "nama" => "Shenny Berliana Arminy",
        "NIM" => "H110117144",
        "email" => "arminy.berliana@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "can yaman"

    ],

    [
        "nama" => "Zella Alqadrie",
        "NIM" => "H110117121",
        "email" => "zellaalqadrie@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "can yaman.png"
    ]
  
    ]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan </title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs):?>
    <ul>
        <li>
             <img src="img/<?= $mhs ["gambar"] ?>"  >
        </li>
        <li>Nama    :<?= $mhs ["nama"];  ?></li>
        <li>NIM     :<?= $mhs ["NIM"];  ?></li>
        <li>Jurusan :<?= $mhs ["jurusan"];  ?></li>
        <li>Email   :<?= $mhs ["email"];  ?></li>
    </ul>
    <?php endforeach;  ?>
</body>
</html>