<?php 
// koneksi ke DBMS 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// koneksi terlebih dahulu 
if( isset($_POST["submit"])){
//  ambil data dari tiap elemen dalam form 
    $Nama = $_POST["Nama"];
    $NIM = $_POST["NIM"];
    $Email = $_POST["Email"];
    $Jurusan = $_POST["Jurusan"];
    $Gambar = $_POST["Gambar"];
// melakukan insert query insert data 
$query = "INSERT INTO mahasiswa 
            VALUES 
            ('', '$Nama', '$NIM', '$Email', '$Jurusan', '$Gambar')
";
mysqli_query($conn, $query);

// cek apakah data berhasil ditambahkan atau tidak 
if (mysqli_affected_rows($conn) > 0){
    echo "berhasil";
} else {
    echo "gagal!";
    echo "<br>";
    echo mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa </h1>
    <form action="" method="post">
    <ul>
        <li>
            <label for="Nama"> Nama = </label>
            <input type="text" name="Nama" id="Nama">
        </li>
        <li>
            <label for="NIM"> NIM = </label>
            <input type="text" name="NIM" id="NIM">
        </li>
        <li>
            <label for="Email"> Email = </label>
            <input type="text" name="Email" id="Email">
        </li>
        <li>
            <label for="Jurusan"> Jurusan = </label>
            <input type="text" name="Jurusan" id="Jurusan">
        </li>
        <li>
            <label for="Gambar"> Gambar = </label>
            <input type="text" name="Gambar" id="Gambar">
        </li>
        <li>
           <button type="submit" name="submit">Tambah Data!</button>
        </li>
    </ul>
    </form>
</body>
</html>