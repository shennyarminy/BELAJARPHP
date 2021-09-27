<?php 
require 'functionss.php';
$buku = query("SELECT * FROM bukushenny");
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
  <h1>HALAMAN MAHASISWA</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Foto</th>
      </tr>
      

      <?php $i = 1;  ?>
      <?php foreach($buku as $bku) : ?>
      <tr>
        <td><?= $i; ?></td>

        <td><?= $bku ["nama_buku"]  ?></td>
        <td><?= $bku["pengarang"] ?></td>
        <td><?= $bku["tahun"]?></td>
        <td><img src="img/<?php echo $bku ["gambar"];?>" width="50"></td>
        
      </tr>
        <?php $i++;  ?>
    <?php endforeach;  ?>
    </table>

</head>
</body>
  </html>