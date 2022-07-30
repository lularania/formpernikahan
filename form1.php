<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION["registrasi"]) OR empty($_SESSION["registrasi"])) 
{
 echo "<script>alert('silahkan login terlebih dahulu');</script>";
 echo "<script>location='sign.php';</script>";
  exit();
$registrasi = $_GET["id"];
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

    <title>Form Keterangan Nikah | KUA Online Register</title>
  </head>
  <body>
    
    <?php include 'menu.php'; ?>
    <?php include 'sidebar.php'; ?>

    <div class="col-md-10">
      <br>

      <h4 class="text-center font-weight-bold mr-6 mt-4 mb-4">Form Keterangan Untuk Nikah</h4>

      <div class="row mx-auto">
        <div class="alert alert-danger"><strong>Pastikan data yang akan diisikan adalah benar, sebelum menekan tombol SIMPAN. Data yang akan diisikan harus dapat dipertanggungjawabkan. Apabila nantinya ada kekeliruan data yang dimasukkan segera hubungi FAQ KUA Online Register.</strong></div>

<form method="post" enctype="multipart/form-data" class="col-md-12 alert alert-success">
  <div class="form-group">
  <label>Kantor Desa/Kelurahan</label>
  <input type="text" class="form-control" name="desakelurahan" required>
</div>
  <div class="form-group">
    <label>Kecamatan</label>
  <input type="text" class="form-control" name="id_kecamatan" required>
</div>
<div class="form-group">
<label>Kabupaten/Kota</label>
<input type="text" class="form-control" name="kabkota" required>
</div>
<div class="form-group">
  <label>Nama Lengkap dan Alias</label>
  <input type="text" class="form-control" name="nama" required>
</div>
 <div class="form-group">
<label for="jeniskelamin">Jenis Kelamin</label>
<select class="form-control" name="jeniskelamin" required>
  <option value="">Pilih Jenis Kelamin</option>
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
</div>
<div class="form-group">
 <label>Tempat Lahir</label>
 <input type="text" class="form-control" name="tempatlahir" required>
 </div>
  <div class="form-group">
  <label>Tanggal Lahir</label>
 <input type="date" class="form-control" name="tanggallahir" required>  
 </div>
 <div class="form-group">
  <label>Warganegara</label>
 <input type="text" class="form-control" name="warganegara" required>
 </div>
<div class="form-group">
<label for="agama">Agama</label>
<select class="form-control" name="agama">
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
 <input type="text" class="form-control" name="pekerjaan" required>  
 </div>
 <div class="form-group">
  <label>Tempat Tinggal</label>
 <input type="text" class="form-control" name="tempattinggal" required>  
 </div>
 <div class="form-group">
  <label>Bin/Binti</label>
 <input type="text" class="form-control" name="binbinti" required>  
 </div>
 <div class="form-group">
<label for="statusperkawinan">Status Perkawinan</label>
<select class="form-control" name="statusperkawinan" required>
  <option value="">Pilih Status Perkawinan</option>
  <option value="belum menikah">Jejaka/Perawan</option>
  <option value="berpisah cerai">Duda/Janda Karena Perpisahan Pasangan</option>
  <option value="berpisah kematian">Duda/Janda Karena Kematian Pasangan</option>
  <option value="berpoligami">Sudah Memiliki Istri</option>
</select>
</div>

<div class="form-group">
  <label>Nama Istri/Suami Terdahulu (Jika tidak ada bisa diabaikan)</label>
 <input type="text" class="form-control" name="namasuamiistrisebelumnya">  
 </div>

 <button class="btn btn-primary" name="save">Simpan</button>
 
 </form>
<?php
if (isset($_POST['save'])) 
{
  $id_registrasi = $_SESSION["registrasi"]["id_registrasi"];
  $kadeskel = $_POST['desakelurahan'];
  $kecamatan = $_POST['id_kecamatan'];
  $kabkota = $_POST['kabkota'];
  $namalengkap  = $_POST['nama'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $tanggallahir = $_POST['tanggallahir'];
  $tempatlahir = $_POST['tempatlahir'];
  $warganegara = $_POST['warganegara'];
  $agama = $_POST['agama'];
  $pekerjaan = $_POST['pekerjaan'];
  $tempattinggal = $_POST['tempattinggal'];
  $binbinti = $_POST['binbinti'];
  $statusperkawinan = $_POST['statusperkawinan'];
  $namasuamiistrisebelumnya = $_POST['namasuamiistrisebelumnya'];
  
  $mysqli  = "INSERT INTO form (id_registrasi, desa_kelurahan, kecamatan, kabkota, nama_lengkap, jenis_kelamin, tempat_lahir, tanggal_lahir, warganegara, agama, pekerjaan, tempat_tinggal, bin_binti, status_pernikahan, suami_istri_terdahulu) VALUES ('$id_registrasi', '$kadeskel', '$kecamatan','$kabkota','$namalengkap','$jeniskelamin','$tempatlahir', '$tanggallahir', '$warganegara', '$agama', '$pekerjaan', '$tempattinggal', '$binbinti', '$statusperkawinan', '$namasuamiistrisebelumnya')";
  $result  = mysqli_query($koneksi, $mysqli);
  if ($result) {
    echo "<script>alert('Data Form Keterangan Nikah Disimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=form2.php'>";
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