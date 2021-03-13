<?php 
session_start();

include 'koneksi.php';

if (!isset($_SESSION["pelanggan"])) {
	echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
	echo "<script>location='login.php';</script>";
}else if (empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
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
	</style>
	<title>Checkout</title>
	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Nav Bar -->
	<?php include "menu.php"; ?>

<!-- Konten -->
<div class="flex-container">
<section class="konten" style="padding-bottom: 30px;">
	<div class="container" style="background-color: #fff1d2;; padding-bottom: 30px; border-radius: 9px;
		 margin-top: 30px;">
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
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php $totalbelanja=0; ?>
				<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
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
				</tr>
				<?php $nomor++; ?>
				<?php $totalbelanja+=$subharga; ?>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total Belanja</th>
					<th>Rp. <?php echo number_format($totalbelanja); ?></th>
				</tr>
			</tfoot>
		</table>

		<form method="POST" action="checkout.php">
			
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" readonly value="<?php echo $_SESSION['pelanggan']
						['nama_pelanggan'] ?>" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" readonly value="<?php echo $_SESSION['pelanggan']
						['hp_pelanggan'] ?>" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<select class="form-control" name="id_ongkir">
						<option>Pilih Lokasi Pengiriman</option>
						<?php 
						$ambil = $koneksi->query("SELECT * FROM ongkir"); 
							while ($perongkir = $ambil->fetch_assoc()){
						 ?>
						<option value="<?php echo $perongkir["id_ongkir"] ?>">
							<?php echo $perongkir['nama_kota'] ?> - 
							Rp <?php echo number_format($perongkir['tarif']) ?>
						</option>  
					<?php } ?>
					</select>
				</div>
			</div>
			<button class="btn btn-primary" name="checkout">Checkout</button>
		</form>	

		<?php 
		if (isset($_POST['checkout'])) {
			$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
			$id_ongkir = $_POST['id_ongkir'];
			$tanggal_pembelian = date('Y-m-d');

			$ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
			$arrayongkir = $ambil->fetch_assoc();
			$tarif = $arrayongkir['tarif'];  
			$total_pembelian = $totalbelanja + $tarif;

			$koneksi->query("INSERT INTO pembelian (id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian)
				VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian')");
			
				$id_pembelian_barusan = $koneksi->insert_id;

				foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) 
				{
					$koneksi->query("INSERT INTO pembelian_produk 
						(id_pembelian,id_produk,jumlah)
						VALUES ('$id_pembelian_barusan','$id_produk','$jumlah')");
				}

				unset($_SESSION["keranjang"]);

				echo "<script>alert('Pembelian Sukses')</script>";
				echo "<script>location='pesanonline.php?id='</script>";

			}
		 ?>

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