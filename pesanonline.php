<?php 
session_start();
include 'koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<style>
	
		div.img {
    		float: left;

		}
		div.img img {
 			width: 100%;
    		height: auto;
		}
		#gambar{
			width: 300px; 
			height: 300px;
		}

	</style>
	<title>Rosco Bakery</title>
	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Nav Bar -->
	<?php include "menu.php"; ?>

	<!-- konten -->
	<br>
	<br>
	<br>
	<div class="flex-container">
<section class="konten">
	<div class="container" style="background-color: #fff1d2;">

		<br>
		<div class="row">
			<?php $ambil = $koneksi->query("SELECT * FROM produk") ?>
			<?php while($perproduk = $ambil->fetch_assoc()){ ?>
			<div class="col-md-3" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
					<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" style="background-color: #fff1d2;">
						<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="" id="gambar">
					<div class="caption">
						<h3><?php echo $perproduk['nama_produk']; ?></h3>
						<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
					</div>
				</a>
				</div>
			</div>
		<?php } ?>
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
