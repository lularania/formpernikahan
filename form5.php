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

    <title>Form Izin Orang tua | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="col-md-10">
      <br>

      <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Izin Orangtua</h4>

      <div class="row mx-auto">
          <div class="alert alert-danger"><strong>Pastikan data yang akan diisikan adalah benar, sebelum menekan tombol SIMPAN. Data yang akan diisikan harus dapat dipertanggungjawabkan. Apabila nantinya ada kekeliruan data yang dimasukkan segera hubungi FAQ KUA Online Register.</strong></div>
       <?php
$ambil = $koneksi->query("SELECT * FROM form WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$get = $koneksi->query("SELECT * FROM form2 WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$got = $koneksi->query("SELECT * FROM form3 WHERE id_registrasi = '$_SESSION[id_registrasi]'");
$detail = $ambil->fetch_assoc();
$detail2 = $get->fetch_assoc();
$detail3 = $got->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data" class="col-md-12 alert alert-success">
 <div class="form-group font-weight-bold">
   <label>Ayah Kandung</label>
 </div>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" name="nama_ayah" readonly value="<?php echo $detail2["nama_ayah_kandung"]?>" class="form-control">
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_ayah" readonly value="<?php echo $detail2["tempat_lahir_ayah_kandung"]?>">
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_ayah" readonly value="<?php echo $detail2["tanggal_lahir_ayah_kandung"]?>">
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_ayah" readonly value="<?php echo $detail2["warganegara_ayah_kandung"]?>">
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<input type="text" class="form-control" name="agama_ayah" readonly value="<?php echo $detail2["agama_ayah_kandung"]?>">
</div>
<div class="form-group">
  <label>Pekerjaan</label>
 <input type="text" class="form-control" name="pekerjaan_ayah" readonly value="<?php echo $detail2["pekerjaan_ayah_kandung"]?>">  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal_ayah" readonly value="<?php echo $detail2["tempat_tinggal_ayah_kandung"]?>">  
 </div>
 <div>
   <label>Tanda Tangan</label>
   <input type="file" class="form-control" name="tandatangan_ayah">
 </div>
 <br>
 <div class="form-group font-weight-bold">
   <label>Ibu Kandung</label>
 </div>
  <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama_ibu" readonly value="<?php echo $detail2["nama_ibu_kandung"]?>">
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_ibu" readonly value="<?php echo $detail2["tempat_lahir_ibu_kandung"]?>">
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_ibu" readonly value="<?php echo $detail2["tanggal_lahir_ibu_kandung"]?>">
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_ibu" readonly value="<?php echo $detail2["warganegara_ibu_kandung"]?>">
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<input type="text" class="form-control" name="agama_ibu" readonly value="<?php echo $detail2["agama_ibu_kandung"]?>">
</div>
<div class="form-group">
  <label>Pekerjaan</label>
 <input type="text" class="form-control" name="pekerjaan_ibu" readonly value="<?php echo $detail2["pekerjaan_ibu_kandung"]?>">  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal_ibu" readonly value="<?php echo $detail2["tempat_tinggal_ibu_kandung"]?>">  
 </div>
 <div>
   <label>Tanda Tangan</label>
   <input type="file" class="form-control" name="tandatangan_ibu">
 </div>
<br>
<div class="form-group font-weight-bold">
   <label>Adalah ayah kandung dan ibu kandung dari :</label>
 </div>
 <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama" readonly value="<?php echo $detail["nama_lengkap"]?>">
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir" readonly value="<?php echo $detail["tempat_lahir"]?>">
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir" readonly value="<?php echo $detail["tanggal_lahir"]?>">
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara" readonly value="<?php echo $detail["warganegara"]?>">
 </div>
  <div class="form-group">
<label for="jeniskelamin">Jenis Kelamin</label>
<input type="text" class="form-control" name="jeniskelamin" readonly value="<?php echo $detail["jenis_kelamin"]?>">
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
<br>
<div class="form-group font-weight-bold">
   <label>memberikan izin kepadanya untuk melakukan pernikahan dengan :</label>
 </div>
  <div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama_calon" required>
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir_calon" required>
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir_calon" required>
 </div>
 <div class="form-group">
 <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara_calon" required>
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="form-control" name="agama_calon" required>
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
  <label>Pekerjaan</label>
 <input type="text" class="form-control" name="pekerjaan_calon" required>  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal_calon" required> 
 </div>
<br>
 <button class="btn btn-primary" name="save">Simpan</button>
 </form>
<?php
if (isset($_POST['save'])) 
{
  $id_registrasi = $_SESSION["registrasi"]["id_registrasi"];
  $ttd_ayah = $_FILES['tandatangan_ayah']['name'];
  $lokasi = $_FILES['tandatangan_ayah']['tmp_name'];
  move_uploaded_file($lokasi, "../formpernikahan/tandatangan_ayah_kandung/".$ttd_ayah);
  $ttd_ibu = $_FILES['tandatangan_ibu']['name'];
  $lokasi2 = $_FILES['tandatangan_ibu']['tmp_name'];
  move_uploaded_file($lokasi2, "../formpernikahan/tandatangan_ibu_kandung/".$ttd_ibu);
  $namalengkap_calon  = $_POST['nama_calon'];
  $tanggallahir_calon = $_POST['tanggallahir_calon'];
  $tempatlahir_calon = $_POST['tempatlahir_calon'];
  $warganegara_calon = $_POST['warganegara_calon'];
  $agama_calon = $_POST['agama_calon'];
  $pekerjaan_calon = $_POST['pekerjaan_calon'];
  $tempattinggal_calon = $_POST['tempattinggal_calon'];
  
  $mysqli  = "INSERT INTO form5 (id_registrasi, nama_calon, tempat_lahir_calon, tanggal_lahir_calon, warganegara_calon, agama_calon, pekerjaan_calon, tempat_tinggal_calon, ttd_ayah, ttd_ibu) VALUES ('$id_registrasi', '$namalengkap_calon', '$tempatlahir_calon', '$tanggallahir_calon', '$warganegara_calon', '$agama_calon', '$pekerjaan_calon', '$tempattinggal_calon', '$ttd_ayah', '$ttd_ibu')";
  
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    if($detail['status_pernikahan'] == "berpisah kematian") {
    echo "<script>alert('Data Form Izin Orangtua Disimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=form6.php'>";
  }
  else {
    echo "<script>alert('Data Form Izin Orangtua Disimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=form7.php'>";
  }
  } 
  else {
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

