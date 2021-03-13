<?php 
session_start();

include "koneksi.php"; 

//mendapatkan id produk dari url
$id_produk = $_GET["id"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
 		<!-- Nav Bar -->
<?php include "menu.php"; ?>

	<!-- Konten -->
	<div class="flex-container">
	<section class="konten" style="margin-top: 20px; ">
		<div class="panel col-md-10 col-md-offset-1" style="padding: 10px; background-color: #fff1d2" >
			<div class="row">
				<div class="col-md-6">
					<img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" width="500" height="500" >
				</div>
				<div class="col-md-3">
					<h2><?php echo $detail["nama_produk"]; ?></h2>
					<h4>Rp <?php echo number_format($detail["harga_produk"]);  ?></h4>

					<br>
					<h5>Jumlah :</h5>
					<form method="post">
						<div class="form-group">
							<div class="input-group">
								<input type="number" min="1" class="form-control" name="jumlah" value="0">
								<div class="input-group-btn">
									<button class="btn btn-primary" name="beli">Beli</button>
								</div>
							</div>
						</div>
					</form>

					<?php 

					if (isset($_POST["beli"]))
					{
						//mendapatkan jumlah yang di imput
						$jumlah = $_POST["jumlah"];
						//masukan di keranjang belanja
						$_SESSION["keranjang"][$id_produk] = $jumlah;

						echo "<script>alert('Produk Telah di Tambahkan ke keranjang Belanja');</script>";
						echo "<script>location='pesanonline.php';</script>";

					}
					 ?>

					<p><?php echo $detail["deskripsi_produk"]; ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->

<?php include "footer.php"; ?>

</div>

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