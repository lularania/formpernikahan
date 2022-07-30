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

    <title>Form Keterangan Kematian Suami/Istri | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="col-md-10">
      <br>
      <br>
      <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Keterangan Kematian Suami/Istri</h4>

      <div class="row mx-auto">
          <div class="alert alert-danger"><strong>Pastikan data yang akan diisikan adalah benar, sebelum menekan tombol SIMPAN. Data yang akan diisikan harus dapat dipertanggungjawabkan. Apabila nantinya ada kekeliruan data yang dimasukkan segera hubungi FAQ KUA Online Register.</strong></div>
    <?php
$ambil = $koneksi->query("SELECT * FROM form WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$detail = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data" class="col-md-12 alert alert-success">
 <div class="form-group font-weight-bold">
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
   <label>Yang bertanda tangan dibawah ini menerangkan dengan sesungguhnya bahwa :</label>
 </div>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama_mantan" required>
</div>
<div class="form-group">
  <label>Bin/Binti</label>
  <input type="text" class="form-control" name="bin_mantan" required>
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_mantan" required>
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_mantan" required>
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_mantan" required>
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="form-control" name="agama_mantan" required>
  <option value="">Pilih Agama</option>
  <option value="islam">Islam</option>
  <option value="katolik">Katolik</option>
  <option value="protestan">Protestan</option>
  <option value="hindu">Hindu</option>
  <option value="buddha">Buddha</option>
  <option value="khonghucu">Khonghucu</option>
</select>
</div>
<div class="form-group">
  <label>Pekerjaan Terakhir</label>
 <input type="text" class="form-control" name="pekerjaan_mantan" required>  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal Terakhir</label>
 <input type="text" class="form-control" name="tempattinggal_mantan" required>
 </div>
 <div>
   <label>Tanggal Meninggal Dunia</label>
   <input type="date" class="form-control" name="tanggal_meninggal" required>
 </div>
 <br>
 <div>
   <label>Tempat Meninggal Dunia</label>
   <input type="text" class="form-control" name="tempat_meninggal" required>
 </div>
 <br>
 <br>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama" readonly value="<?php echo $detail["nama_lengkap"]?>">
</div>
<div class="form-group">
  <label>Bin/Binti</label>
  <input type="text" class="form-control" name="bin" readonly value="<?php echo $detail["bin_binti"]?>">
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir" readonly value="<?php echo $detail["tempat_lahir"]?>">
 </div>
  <div class="form-group text-bold">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir" readonly value="<?php echo $detail["tanggal_lahir"]?>">
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara" readonly value="<?php echo $detail["warganegara"]?>">
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<input type="text" class="form-control" name="agama" readonly value="<?php echo $detail["agama"]?>">
</div>
<div class="form-group">
  <label>Pekerjaan</label>
 <input type="text" class="form-control" name="pekerjaan" readonly value="<?php echo $detail["pekerjaan"]?>">  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal" readonly value="<?php echo $detail["tempat_tinggal"]?>">  
 </div>
 <div class="form-group">
  <label>Tanda Tangan</label>
 <input type="file" class="form-control" name="tandatangan" required>  
 </div>
 <div class="form-group font-weight-bold">
   <label>Adalah suami/istri yang telah meninggal tersebut diatas.</label>
 </div>
 <br>
 <button class="btn btn-primary" name="save">Simpan</button>

 </form>
<?php
if (isset($_POST['save'])) 
{
  $id_registrasi = $_SESSION["registrasi"]["id_registrasi"];
  $namamantan  = $_POST['nama_mantan'];
  $binmantan = $_POST['bin_mantan'];
  $tanggallahirmantan = $_POST['tanggallahir_mantan'];
  $tempatlahirmantan = $_POST['tempatlahir_mantan'];
  $warganegaramantan = $_POST['warganegara_mantan'];
  $agamamantan = $_POST['agama_mantan'];
  $pekerjaanmantan = $_POST['pekerjaan_mantan'];
  $tempattinggalmantan = $_POST['tempattinggal_mantan'];
  $tanggal_meninggal = $_POST['tanggal_meninggal'];
  $tempat_meninggal = $_POST['tempat_meninggal'];
  $ttd = $_FILES['tandatangan']['name'];
  $lokasi = $_FILES['tandatangan']['tmp_name'];
  move_uploaded_file($lokasi, "../formpernikahan/tandatangan_lembar_form6/".$ttd);
  
  $mysqli  = "INSERT INTO form6 (id_registrasi, nama_mantan_pasangan, bin_mantan_pasangan, tempat_lahir_mantan_pasangan, tanggal_lahir_mantan_pasangan, warganegara_mantan_pasangan, agama_mantan_pasangan, pekerjaan_terakhir_mantan_pasangan, tempat_tinggal_terakhir_mantan_pasangan, tanggal_meninggal, tempat_meninggal, tanda_tangan) VALUES ('$id_registrasi','$namamantan','$binmantan','$tempatlahirmantan', '$tanggallahirmantan', '$warganegaramantan', '$agamamantan', '$pekerjaanmantan', '$tempattinggalmantan', '$tanggal_meninggal', '$tempat_meninggal', '$ttd')";

  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
     echo "<script>alert('Data Form Keterangan Kematian Suami/Istri Disimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=form7.php'>";
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