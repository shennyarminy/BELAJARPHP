<?php 
require 'functionss.php';
$buku = query("SELECT * FROM bukushenny");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- my css -->
  <!-- <link rel="stylesheet" href="style.css"> -->

  <title>My Portfolio | Shenny Berliana</title>
</head>

<body>
  <!-- navbar -->
  <div class="shadow-sm ">
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-dua">
        <a class="navbar-brand" href="#">Buletin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
  </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jombroton -->
  <!--  -->
  <section class="jumbotron text-center">
    <img src="img/1212.jpg" alt="Shenny" width="200" class="rounded-circle img-thumbnail shadow">
    <h1 class="display- ">Shenny Berliana</h1>
    <p class="lead">Dreamer | Novelovers | Romanaddict</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#2d3640" fill-opacity="1"
        d="M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,80C672,64,768,96,864,138.7C960,181,1056,235,1152,250.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- jombroton akhir -->


  <!-- About awal -->
  <section id="about">

    <div class="container-about text-light">
      <div class="row-mb text-center mb-4">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>

      <div class="row justify-content-center text-center fs-5">
        <div class="col-md-4">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse at, velit accusamus quo nisi ex fuga sed
            architecto. Eveniet, porro!</p>
        </div>
        <div class="col-md-4">
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis eveniet, eum, quam animi nisi quibusdam
            ducimus doloribus necessitatibus earum placeat fugiat itaque et ex debitis. Quae, maiores consectetur. Iure,
            fugit.</p>
        </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#586372" fill-opacity="1"
        d="M0,64L48,90.7C96,117,192,171,288,165.3C384,160,480,96,576,80C672,64,768,96,864,138.7C960,181,1056,235,1152,250.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
      </div>
    </div>
    
   
  </section>
  <!-- About akhir -->

<!-- body  -->
  </head>
  <link rel="stylesheet" href="style.css">
<body >
  <h1 class= "tabel">HALAMAN MAHASISWA</h1>
    <table border="5" cellpadding="10" cellspacing="0" align="center">
      <tr>
        <th >No</th>
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



<!-- akhir body  -->
  <!-- Project  -->
 
  <!-- akhir project  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>
<div></div>
<div></div>