<?php
session_start();
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style2.css">

    <title>Home | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>
 	
 	<?php include 'sidebar.php'; ?>

   
    <div class="col-md-10">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide6.jpg" class="d-block w-100" height="500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slide7.jpg" class="d-block w-100" height="500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/slide5.jpg" class="d-block w-100" height="500px" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

       <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Tata Cara Melakukan Registrasi</h4>

      <div class="row mx-auto">
        <?php 
    $ambil=$koneksi->query("SELECT * FROM tatacara");
    ?>
    <?php while ($tatacara = $ambil->fetch_assoc()) { ?>
        <div class="card mr-2 ml-2" style="width: 16rem;">
          <img src="tatacara/<?php echo $tatacara['foto_tatacara']; ?>" class="card-img-top" alt="..." height="300px">
          <div class="card-body bg-light">
            <h5 class="card-title"><?php echo $tatacara['nama_tatacara']; ?></h5>
            <p class="card-text"><?php echo $tatacara['deskripsi_tatacara'];?></p>

          </div>
        </div>
          <?php } ?>
      </div>
    </div>
    </div>

    <br>
    <br>

    <?php include 'footer.php'; ?>
  </body>
</html>