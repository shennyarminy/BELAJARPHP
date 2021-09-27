<?php 

$conn = mysqli_connect("localhost", "root", "", "buku"); 

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $bkus = [];
    while ($bku = mysqli_fetch_assoc($result)){
        $bkus[] = $bku;
    }
    return $bkus;
}
?>