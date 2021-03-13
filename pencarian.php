<?php include "koneksi.php"; ?>
<?php 
$keyword = $_GET["keyword"];

$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%'
	OR deskripsi_produk LIKE '%$keyword%'");
while($pecah = $ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}

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
	<title>Pencarian</title>
	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Nav Bar -->
	<?php include "menu.php"; ?>

	<!-- Konten -->
	<div class="flex-container">
	<br>
	<br>
	<br>
<div class="container" style="background-color: #fff1d2;">
	<h3>Hasil Pencarian : <?php echo $keyword ?></h3>
	<div class="row">
		<?php foreach ($semuadata as $key => $value): ?>

		<div class="col-md-3">
			<div class="thumbnail" style="background-color: #fff1d2;">
				<a href="detail.php?id=<?php  echo $value["id_produk"]; ?>" class="btn btn-default" style="background-color: #fff1d2;">
				<img src="foto_produk/<?php echo $value['foto_produk']; ?>" alt="" class="image-responsive" id="gambar">
				<div class="caprion">
					<h3><?php echo $value["nama_produk"] ?></h3>
					<h5>Rp <?php echo number_format($value['harga_produk']) ?></h5>
					
				</div>
				</a>
			</div>
		</div>
	<?php endforeach ?>
	</div>
</div>

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