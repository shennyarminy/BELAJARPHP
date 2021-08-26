<!-- variable scope / lingkup variabel  -->

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
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) :?>
        <li>
            <a href="get1.php?nama=<?=$mhs["nama"];  ?>&NIM=<?= $mhs["NIM"] ?>&email= <?= $mhs["email"]?>&jurusan=<?=$mhs["jurusan"] ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach;  ?>
    </ul>
</body>
</html>