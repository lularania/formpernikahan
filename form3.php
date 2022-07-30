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

    <title>Form Persetujuan Mempelai | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="col-md-10">
      <br>

      <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Persetujuan Mempelai</h4>

      <div class="row mx-auto">
          <div class="alert alert-danger"><strong>Pastikan data yang akan diisikan adalah benar, sebelum menekan tombol SIMPAN. Data yang akan diisikan harus dapat dipertanggungjawabkan. Apabila nantinya ada kekeliruan data yang dimasukkan segera hubungi FAQ KUA Online Register.</strong></div>

<form method="post" enctype="multipart/form-data" class="col-md-12 alert alert-success">
 <div class="form-group font-weight-bold">
   <label>Calon Suami</label>
 </div>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama_suami" required>
</div>
<div class="form-group">
  <label>Bin</label>
  <input type="text" class="form-control" name="bin_suami" required>
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_suami" required>
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_suami" required>
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_suami" required>
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="form-control" name="agama_suami" required>
  <option value="">Pilih Agama</option>
  <option value="Islam">Islam</option>
  <option value="Katolik">Katolik</option>
  <option value="Protestan">Protestan</option>
  <option value="Hindu">Hindu</option>
  <option value="Buddha">Buddha</option>
  <option value="Khonghucu">Khonghucu</option>
</select>
</div>
<div class="form-group">
  <label>Pekerjaan</label>
 <input type="text" class="form-control" name="pekerjaan_suami" required>  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal_suami" required>  
 </div>
 <div>
   <label>Tanda Tangan</label>
   <input type="file" class="form-control" name="tandatangan_suami" required>
 </div>
 <br>
 <div class="form-group font-weight-bold">
   <label>Calon Istri</label>
 </div>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama_istri" required>
</div>
<div class="form-group">
  <label>Bin</label>
  <input type="text" class="form-control" name="bin_istri" required>
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_istri" required>
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_istri" required>
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_istri" required>
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="form-control" name="agama_istri" required>
  <option value="">Pilih Agama</option>
  <option value="Islam">Islam</option>
  <option value="Katolik">Katolik</option>
  <option value="Protestan">Protestan</option>
  <option value="Hindu">Hindu</option>
  <option value="Buddha">Buddha</option>
  <option value="Khonghucu">Khonghucu</option>
</select>
</div>
<div class="form-group">
  <label>Pekerjaan</label>
 <input type="text" class="form-control" name="pekerjaan_istri" required>  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal_istri" required>  
 </div>
 <div>
   <label>Tanda Tangan</label>
   <input type="file" class="form-control" name="tandatangan_istri" required>
 </div>
<br>
 <button class="btn btn-primary" name="save">Simpan</button>

 </form>
<?php
if (isset($_POST['save'])) 
{
  $id_registrasi = $_SESSION["registrasi"]["id_registrasi"];
  $nama_calon_suami  = $_POST['nama_suami'];
  $bin_calon_suami = $_POST['bin_suami'];
  $tanggallahir_calon_suami = $_POST['tanggallahir_suami'];
  $tempatlahir_calon_suami = $_POST['tempatlahir_suami'];
  $warganegara_calon_suami = $_POST['warganegara_suami'];
  $agama_calon_suami = $_POST['agama_suami'];
  $pekerjaan_calon_suami = $_POST['pekerjaan_suami'];
  $tempattinggal_calon_suami = $_POST['tempattinggal_suami'];
  $tandatangan_calon_suami = $_FILES['tandatangan_suami']['name'];
  $lokasi = $_FILES['tandatangan_suami']['tmp_name'];
  move_uploaded_file($lokasi, "../formpernikahan/tandatangan_calon_suami/".$tandatangan_calon_suami);
  $nama_calon_istri  = $_POST['nama_istri'];
  $bin_calon_istri = $_POST['bin_istri'];
  $tanggallahir_calon_istri = $_POST['tanggallahir_istri'];
  $tempatlahir_calon_istri = $_POST['tempatlahir_istri'];
  $warganegara_calon_istri = $_POST['warganegara_istri'];
  $agama_calon_istri = $_POST['agama_istri'];
  $pekerjaan_calon_istri = $_POST['pekerjaan_istri'];
  $tempattinggal_calon_istri = $_POST['tempattinggal_istri'];
  $tandatangan_calon_istri = $_FILES['tandatangan_istri']['name'];
  $lokasi2 = $_FILES['tandatangan_istri']['tmp_name'];
  move_uploaded_file($lokasi2, "../formpernikahan/tandatangan_calon_istri/".$tandatangan_calon_istri);
  
  $mysqli  = "INSERT INTO form3 (id_registrasi, nama_calon_suami, binti_calon_suami, tempat_lahir_calon_suami, tanggal_lahir_calon_suami, warganegara_calon_suami, agama_calon_suami, pekerjaan_calon_suami, tempat_tinggal_calon_suami, ttd_calon_suami, nama_calon_istri, binti_calon_istri, tempat_lahir_calon_istri, tanggal_lahir_calon_istri, warganegara_calon_istri, agama_calon_istri, pekerjaan_calon_istri, tempat_tinggal_calon_istri, ttd_calon_istri) VALUES ('$id_registrasi', '$nama_calon_suami', '$bin_calon_suami','$tempatlahir_calon_suami', '$tanggallahir_calon_suami', '$warganegara_calon_suami', '$agama_calon_suami', '$pekerjaan_calon_suami', '$tempattinggal_calon_suami', '$tandatangan_calon_suami', '$nama_calon_istri', '$bin_calon_istri','$tempatlahir_calon_istri', '$tanggallahir_calon_istri', '$warganegara_calon_istri', '$agama_calon_istri', '$pekerjaan_calon_istri', '$tempattinggal_calon_istri', '$tandatangan_calon_istri')";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
     echo "<script>alert('Data Form Persetujuan Mempelai Disimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=form4.php'>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($koneksi);
 }
?>
        </div>
        <br>
<br>
  </body>
</html>