<?php

session_start();

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link 
	rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
	integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
	crossorigin="anonymous" />
	<link rel="stylesheet" href="stylesign.css" />
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css" />

	<title>Login To KUA Online</title>
</head>
<body>
	<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post">
			<h1>Create Account</h1>
			<br>
			<span>Daftar dengan Akun KUA Online</span>
			<input type="text" class="form-control" name="nama" placeholder="nama" required />
			<input type="email" class="form-control" name="email" placeholder="email" required />
			<input type="password" class="form-control" name="password" placeholder="password" required />
			<input type="text" class="form-control" name="telepon" placeholder="no. telepon" required />
			<br>
			<button name="daftar">Sign Up</button>
		</form>
	</div>

	
	<div class="form-container sign-in-container">
		<form method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a onclick="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your KUA online account</span>
			<input type="email" class="form-control" name="email" placeholder="email"/>
			<input type="password" class="form-control" name="password" placeholder="password"/>
			<br>
			<button name="simpan">Sign In</button>
		</form>
	</div>
</body>

<?php
if(isset($_POST["simpan"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$ambil = $koneksi->query("SELECT * FROM registrasi WHERE email_register='$email' AND password_register='$password'");

	$akunyangcocok = $ambil->num_rows;

	if($akunyangcocok==1)
	{
		//anda sudah login
		$akun = $ambil->fetch_assoc();
		$_SESSION["id_registrasi"] = $akun["id_registrasi"];
		echo "<script>alert('login anda sukses');</script>";
		echo "<script>location='index.php';</script>";
		
	}
	else
	{
		echo "<script>alert('anda gagal login, periksa akun anda');</script>";
		echo "<script>location='sign.php';</script>";

	}
}

?>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>You Must Register to Access the Form!</h1>
				<p>Enter your personal details and join a member with KUA Online</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<?php
	if(isset($_POST["simpan"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$ambil = $koneksi->query("SELECT * FROM registrasi WHERE email_register='$email' AND password_register='$password'");

	$akunyangcocok = $ambil->num_rows;

	if($akunyangcocok==1)
	{
		//anda sudah login
		$akun = $ambil->fetch_assoc();
		$_SESSION["registrasi"] = $akun;
		echo "<script>alert('login anda sukses');</script>";
		echo "<script>location='form1.php';</script>";
	}
	else
	{
		echo "<script>alert('anda gagal login, periksa akun anda');</script>";
		echo "<script>location='sign.php';</script>";

	}
	
}

?> 
<?php
if (isset($_POST["daftar"])) 
					{
						$nama = $_POST["nama"];
						$email = $_POST["email"];
						$password = $_POST["password"];
						$telepon = $_POST["telepon"];

						$ambil = $koneksi->query("SELECT * FROM registrasi WHERE email_register='$email'");
						$yangcocok = $ambil->num_rows;

						if ($yangcocok==1)
						{
							echo "<script>alert('pendaftaran gagal, email sudah terdaftar');</script>";
							echo "<script>location='sign.php';</script>";
						}

						else
						{
							$koneksi->query("INSERT INTO registrasi (email_register, password_register, nama_register, telepon_register) VALUES ('$email', '$password', '$nama', '$telepon')");
							echo "<script>alert('pendaftaran sukses, silahkan login terlebih dahulu');</script>";
							echo "<script>location='sign.php';</script>";

						}

					}

					?>   


				</div>   
    <!-- JavaScript -->


    <!-- Place your kit's code here -->

    <!-- Google API
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    -->

<script src="main.js"></script>

</html>