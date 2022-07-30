<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION["registrasi"]) OR empty($_SESSION["registrasi"])) 
{
 echo "<script>alert('silahkan login terlebih dahulu');</script>";
 echo "<script>location='sign.php';</script>";
  exit();
}
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

    <title>Pemberitahuan Kehendak Nikah | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>

   <?php include 'sidebar.php'; ?>

    <div class="col-md-10">
      <br>
      <br>

      <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Pemberitahuan Kehendak Nikah</h4>

     <?php
$ambil = $koneksi->query("SELECT * FROM form7 WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$get = $koneksi->query("SELECT * FROM form WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$detail = $ambil->fetch_assoc();
$detail2 = $get->fetch_assoc();
?>

        <strong>Tanggal Pengisian Form: <?php echo $detail['tanggal_pengisian']; ?></strong> 
        <hr>

          <h6 class="alert alert-success"><strong>Assalamualaikum wr. wb.</strong></h6>
          <br>
          <h6 class="alert alert-success">Dengan ini kami memberitahukan bahwa kami bermaksud akan menyelenggarakan pernikahan antara <?php echo $detail2['nama_lengkap'];?> dengan <?php echo $detail['nama_calon']; ?> pada hari <?php echo $detail['hari_pernikahan'];?> tanggal <?php echo $detail['tanggal_pernikahan'];?> jam <?php echo $detail['jam_pernikahan']; ?> dengan mas kawin <?php echo $detail['maskawin']; ?> dengan bertempat di <?php echo $detail['tempat_pernikahan'];?>. <br>
            <br> Bersama ini kami telah mengisi formulir formulir yang diperukan untuk diperiksa, sebagai berikut: <br> 1. Form Keterangan Untuk Nikah <br> 2. Form Keterangan Asal-Usul <br> 3. Form Persetujuan Mempelai <br> 4. Form Keterangan Tentang Orangtua <br> 5. Surat Izin Orang Tua <br> 6. *) (jika ada) Form Keterangan Kematian Suami/Istri<br><br> Hanya dapat dihadiri dan dicatat pelaksanaannya sesuai dengan ketentuan perundang-undangan yang berlaku.<br><br>Wassalam<br>Yang memberitahukan Calon Mempelai atau Wali<br><br></h6>
            <img src="../formpernikahan/tandatangan_lembar_form7/<?php echo $detail['tandatangan']; ?>" width="500">

        </div>

  </body>
</html>