<?php 
// koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data dari tabel mahasiswa / query data mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if(!$result){
    echo mysqli_error($conn);
}
//ambil data mahasiswa dari object result 
// mysqli_fetch_row() = mengembalikan array numerik 
// mysqli_-fetch_assoc() = mengembalikan array assoc (menggunakan string)
// mysqli_fetch_array() = bisa mengembalikan array numerik maupun assoc [data yang dikembalikan lebih berat ]
// mysqli_fetch_object() memanggil dalam objek $mhs -> email (lebih ribet )

// while ($mhs = mysqli_fetch_assoc($result))
// var_dump($mhs["Nama"]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
<h1>Halaman Mahasiswa</h1>    
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>

    </tr>
    <?php $i = 1;  ?>
    <?php while($row = mysqli_fetch_assoc ($result)):  ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?php echo $row["Gambar"]  ;?>" width="50"></td>
        <td> <?= $row["NIM"] ?></td>
        <td><?= $row["Nama"] ?></td>
        <td><?= $row["Email"] ?></td>
        <td><?= $row["Jurusan"] ?></td>
    </tr>
    <?= $i++; ?>
    <?php endwhile;  ?>
</table>

</body>
</html>