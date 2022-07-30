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

    <title>Form Persiapan Pernikahan | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>

   <?php include 'sidebar.php'; ?>

    <div class="col-md-10">
      <br>

      <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Form Persiapan Pernikahan</h4>

      <div class="row mx-auto">
          <div class="alert alert-danger"><strong>Pastikan data yang akan diisikan adalah benar, sebelum menekan tombol SIMPAN. Data yang akan diisikan harus dapat dipertanggungjawabkan. Apabila nantinya ada kekeliruan data yang dimasukkan segera hubungi FAQ KUA Online Register.</strong></div>
        <?php
$ambil = $koneksi->query("SELECT * FROM form WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$detail = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data" class="col-md-12 alert alert-success">
  <div class="form-group">
  <label>Tanggal Pengisian Form</label>
  <input type="date" class="form-control" name="tanggal" required>
</div>
<div class="form-group">
    <label>Nama Lengkap dan Alias</label>
    <input type="text" class="form-control" name="nama" readonly value="<?php echo $detail["nama_lengkap"]?>">
</div>
<div class="form-group">
  <label>Nama Lengkap dan Alias Pasangany</label>
  <input type="text" class="form-control" name="namacalon" required>
</div>
 <div class="form-group">
  <label>Rencana Hari Pernikahan</label>
  <select class="form-control" name="hari" required>
  <option value="">Pilih Hari Pernikahan</option>
  <option value="minggu">Minggu</option>
  <option value="senin">Senin</option>
  <option value="selasa">Selasa</option>
  <option value="rabu">Rabu</option>
  <option value="kamis">Kamis</option>
  <option value="jumat">Jumat</option>
  <option value="sabtu">Sabtu</option>
</select>
</div>
<div class="form-group">
 <label>Rencana Tanggal Pernikahan</label>
 <input type="date" class="form-control" name="tanggal2" required>
 </div>
  <div class="form-group">
  <label>Rencana Jam Pernikahan</label>
 <input type="text" class="form-control" name="jam" required>  
 </div>
 <div class="form-group">
  <label>Mas Kawin Pernikahan</label>
 <input type="text" class="form-control" name="maskawin" required>  
 </div>
<div class="form-group">
  <label>Tempat Pernikahan</label>
 <input type="text" class="form-control" name="tempat" required>  
 </div>
 <div class="form-group">
  <label>Tanda Tangan Calon Mempelai</label>
 <input type="file" class="form-control" name="tandatangan" required>  
 </div>
 <br>
 <button class="btn btn-primary" name="save">Simpan</button>
  <br>
 <br>
 </form>

<?php
if (isset($_POST['save'])) 
{
  $id_registrasi = $_SESSION["registrasi"]["id_registrasi"];
  $tanggal = $_POST['tanggal'];
  $namacalon = $_POST['namacalon'];
  $hari = $_POST['hari'];
  $tanggal2  = $_POST['tanggal2'];
  $jam  = $_POST['jam'];
  $maskawin = $_POST['maskawin'];
  $tempat = $_POST['tempat'];
  $tandatangan = $_FILES['tandatangan']['name'];
  $lokasi = $_FILES['tandatangan']['tmp_name'];
  move_uploaded_file($lokasi, "../tandatangan_lembar_form7/".$tandatangan);
  $mysqli  = "INSERT INTO form7 (id_registrasi, tanggal_pengisian, nama_calon, hari_pernikahan, tanggal_pernikahan, jam_pernikahan, maskawin, tempat_pernikahan, tandatangan) VALUES ('$id_registrasi', '$tanggal','$namacalon','$hari','$tanggal2', '$jam', '$maskawin', '$tempat', '$tandatangan')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Data Form Persiapan Pernikahan Disimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=bukti.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($koneksi);
 }
?>
        </div>

  </body>
</html>