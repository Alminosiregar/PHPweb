<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Navbar -->
<?php include "menu.php"; ?>

<!-- Konten -->
<div class="flex-container">
<div class="container" style="margin-top: 40px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Registrasi pelanggan</h3>
				</div>
				<div class="panel-body">
					<form method="post" class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-md-3">Nama</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Email</label>
							<div class="col-md-7">
								<input type="email" class="form-control" name="email" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Password</label>
							<div class="col-md-7">
								<input type="password" class="form-control" name="password" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Telp/hp</label>
							<div class="col-md-7">
								<input type="text" class="form-control" name="telepon" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
								<button class="btn btn-succes" name="daftar">Registrasi</button>
							</div>
						</div>
					</form>

					<?php 
					if (isset($_POST["daftar"]))
					{
						$nama = $_POST["nama"];
						$email = $_POST["email"];
						$password = $_POST["password"];
						$telepon = $_POST["telepon"];

						$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan = '$email'");
						$yangcocok = $ambil->num_rows;
						if($yangcocok==1)
						{
							echo "<script>alert('Pendaftaran Gagal. Email sudah digunakan')</script>";
							echo "<script>location='daftar.php?id='</script>";
						}
						else
						{
							$koneksi->query("INSERT INTO pelanggan
								(email_pelanggan,password_pelanggan,nama_pelanggan,hp_pelanggan) VALUES ('$email','$password','$nama','$telepon')");

							echo "<script>alert('Pendaftaran Berhasil, Silahkan Login.')</script>";
							echo "<script>location='login.php?id='</script>";
						}
					}

					 ?>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- footer -->

<?php include "footer.php"; ?>

</div>

</body>
</html>