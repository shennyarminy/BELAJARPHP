<?php 
// koneksi ke database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;
    $Nama = htmlentities($data["Nama"]) ;
    $NIM = htmlspecialchars($data["NIM"]) ;
    $Email = htmlspecialchars($data["Email"]) ;
    $Jurusan = htmlspecialchars($data["Jurusan"]);
    $Gambar = htmlspecialchars($data["Gambar"]);


    $query = "INSERT INTO mahasiswa 
                VALUES 
                ('', '$Nama', '$NIM', '$Email', '$Jurusan', '$Gambar')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn; 
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn); 
}


function ubah($data) {
    global $conn; 
    $id = $data["id"];
    $Nama = htmlentities($data["Nama"]) ;
    $NIM = htmlspecialchars($data["NIM"]) ;
    $Email = htmlspecialchars($data["Email"]) ;
    $Jurusan = htmlspecialchars($data["Jurusan"]);
    $Gambar = htmlspecialchars($data["Gambar"]);


    $query = "UPDATE mahasiswa SET 
              Nama = '$Nama',
              NIM = '$NIM',
              Email = '$Email',
              Jurusan = '$Jurusan',
              Gambar = '$Gambar'
         WHERE id = $id
              ";
    mysqli_query($conn, $query);

   

    return mysqli_affected_rows($conn);
}
?>