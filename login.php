<?php 
session_start();
include 'koneksi.php';

?>


<!DOCTYPE html>
<html>
<head>
	<style>
		.container{
			position: center;
		}	
		</style>
	<title>Login Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Nav Bar -->
	<?php include "menu.php"; ?>

<!-- Konten -->
<div class="flex-container">
	<div class="container" style="margin-top: 40px;">
		<div class="row center">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Login Pelanggan</h3>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
							<button class="btn btn-primary" name="login">Login</button>
							<button class="btn btn-succes" name="reg"><a href="daftar.php">Registrasi</a></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- footer -->

<?php include "footer.php"; ?>

</div>
<?php 

if (isset($_POST["login"])) {
	
	$email = $_POST["email"];
	$password = $_POST["password"];

	$ambil = $koneksi->query("SELECT * FROM pelanggan 
		WHERE email_pelanggan='$email' AND password_pelanggan = '$password'");

	$yangcocok = $ambil->num_rows;
	if ($yangcocok==1) {
		$akun = $ambil->fetch_assoc();


		$_SESSION["pelanggan"] = $akun;

		echo "<script>alert('Anda berhasil login')</script>";
		echo "<script>location='keranjang.php';</script>";
	}
	else{

		echo "<script>alert('Anda gagal login, Mohon periksa kembali akun Anda')</script>";
		echo "<script>location='login.php';</script>";
	}


}
 
 ?>

<!-- JQUERY SCRIPTS -->
    <script src="Admin/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="Admin/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="Admin/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="Admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="Admin/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="Admin/assets/js/custom.js"></script>
</body>
</html>