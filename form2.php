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

    <title>Form Keterangan Asal - Usul | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="col-md-10">
      <br>

      <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Form Keterangan Asal-Usul</h4>

      <div class="row mx-auto">
  <div class="alert alert-danger"><strong>Pastikan data yang akan diisikan adalah benar, sebelum menekan tombol SIMPAN. Data yang akan diisikan harus dapat dipertanggungjawabkan. Apabila nantinya ada kekeliruan data yang dimasukkan segera hubungi FAQ KUA Online Register.</strong></div>

        <?php
$ambil = $koneksi->query("SELECT * FROM form WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$detail = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data" class="col-md-12 alert alert-success">
  <div class="form-group">
  <label>Kantor Desa/Kelurahan</label>
  <input type="text" readonly value="<?php echo $detail["desa_kelurahan"]?>"class="form-control">
</div>
  <div class="form-group">
    <label>Kecamatan</label>
  <input type="text" readonly value="<?php echo $detail["kecamatan"]?>"class="form-control">
</div>
<div class="form-group">
<label>Kabupaten/Kota</label>
<input type="text" readonly value="<?php echo $detail["kabkota"]?>"class="form-control">
</div>
<h4 class="form-group font-weight-bold">Data diri Pengaju</h4>
<div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" readonly value="<?php echo $detail["nama_lengkap"]?>"class="form-control">
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" readonly value="<?php echo $detail["tempat_lahir"]?>"class="form-control">
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" readonly value="<?php echo $detail["tanggal_lahir"]?>"class="form-control">
 </div>
 <div class="form-group">
  <label>Warganegara</label>
 <input type="text" readonly value="<?php echo $detail["warganegara"]?>"class="form-control">
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<input type="text" readonly value="<?php echo $detail["agama"]?>"class="form-control">
</div>
<div class="form-group">
  <label>Pekerjaan</label>
 <input type="text" readonly value="<?php echo $detail["pekerjaan"]?>"class="form-control">  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" readonly value="<?php echo $detail["tempat_tinggal"]?>"class="form-control"> 
 </div>
 <h4 class="from-group font-weight-bold">Data Orangtua Pengaju</h4>
 <div class="form-group font-weight-bold">
   <label>Ayah Kandung</label>
 </div>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama_ayah" required>
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_ayah" required>
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_ayah" required>
 </div>
 <div class="form-group">
  <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_ayah" required>
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="form-control" name="agama_ayah" required>
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
 <input type="text" class="form-control" name="pekerjaan_ayah" required>  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal_ayah" required>  
 </div>
 <div class="form-group font-weight-bold">
   <label>Ibu Kandung</label>
 </div>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama_ibu" required>
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_ibu" required>
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_ibu" required>
 </div>
 <div class="form-group">
  <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_ibu" required>
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="form-control" name="agama_ibu" required>
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
 <input type="text" class="form-control" name="pekerjaan_ibu" required>  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal_ibu" required>  
 </div>

 <button class="btn btn-primary" name="save">Simpan</button>

 </form>

<?php
if (isset($_POST['save'])) 
{
  $id_registrasi = $_SESSION["registrasi"]["id_registrasi"];
  $namalengkap_ayah  = $_POST['nama_ayah'];
  $tempatlahir_ayah = $_POST['tempatlahir_ayah'];
  $tanggallahir_ayah = $_POST['tanggallahir_ayah'];
  $warganegara_ayah = $_POST['warganegara_ayah'];
  $agama_ayah = $_POST['agama_ayah'];
  $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
  $tempattinggal_ayah = $_POST['tempattinggal_ayah'];
  $namalengkap_ibu  = $_POST['nama_ibu'];
  $tempatlahir_ibu = $_POST['tempatlahir_ibu'];
  $tanggallahir_ibu = $_POST['tanggallahir_ibu'];
  $warganegara_ibu = $_POST['warganegara_ibu'];
  $agama_ibu = $_POST['agama_ibu'];
  $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
  $tempattinggal_ibu = $_POST['tempattinggal_ibu'];
  
  
  $mysqli  = "INSERT INTO form2 (id_registrasi, nama_ayah_kandung, tempat_lahir_ayah_kandung, tanggal_lahir_ayah_kandung, warganegara_ayah_kandung, agama_ayah_kandung, pekerjaan_ayah_kandung, tempat_tinggal_ayah_kandung, nama_ibu_kandung, tempat_lahir_ibu_kandung, tanggal_lahir_ibu_kandung, warganegara_ibu_kandung, agama_ibu_kandung, pekerjaan_ibu_kandung, tempat_tinggal_ibu_kandung) VALUES ('$id_registrasi', '$namalengkap_ayah','$tempatlahir_ayah', '$tanggallahir_ayah', '$warganegara_ayah', '$agama_ayah', '$pekerjaan_ayah', '$tempattinggal_ayah', '$namalengkap_ibu','$tempatlahir_ibu', '$tanggallahir_ibu', '$warganegara_ibu', '$agama_ibu', '$pekerjaan_ibu', '$tempattinggal_ibu')";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
     echo "<script>alert('Data Form Keterangan Asal-Usul Disimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=form3.php'>";
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