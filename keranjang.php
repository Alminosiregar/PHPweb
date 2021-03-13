<?php 
session_start();
include 'koneksi.php';

if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
	echo "<script>alert('Keranjang Anda Kosong, Silahkan Belanja Terlebih Dahulu.');</script>";
	echo "<script>location='pesanonline.php';</script>";
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<style>
 		.table{
 			background-color: white;
 		}
		</style>
 	<title>Keranjang belanja</title>
 	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
 		<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 		<!-- Nav Bar -->
<?php include "menu.php"; ?>

	<!-- Konten -->
	<div class="flex-container">
<section class="konten">
	<div class="container" style="background-color: #fff1d2; padding-bottom: 30px; border-radius: 9px;  margin-top: 50px; margin-bottom: ">
		<h1>Keranjang Belanja</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Produk</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
					<?php 
					$ambil = $koneksi->query("SELECT * FROM produk
						WHERE id_produk = '$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah['harga_produk']*$jumlah;
					 ?>

				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah['nama_produk']; ?></td>
					<td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
					<td><a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Hapus</a></td>
				</tr>
				<?php $nomor++; ?>
				<?php endforeach ?>
			</tbody>
		</table>
		<a href="pesanonline.php" class="btn btn-default">Lanjut Balanja</a>
		<a href="checkout.php" class="btn btn-primary">Checkout</a>		

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