<?php 
session_start();
include 'koneksi.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<script>
	$(document).ready(function(){
    $("#div1").fadeIn();
});
</script>
	<style>
	
	  	div.img {
    		float: left;
		}
		div.img img {
 			width: 100%;
    		height: auto;
		}
		#gambar{
			width: 500px; 
			height: 300px;
		}

		#btn{
			width: 300px;
			height:100px;
			margin-top: 80px;
		}
		#coll:hover{
			background-color: white;
		}
		#coll{
			background-color: #fff1d2; 
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
	<div class="container" id="coll" data-toggle="collapse" data-target="#br">
<h2>Brownies</h2>
<div class="container collapse" id="br">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/brownis coklat(40k).jpg" id="gambar">
			</div>
		</div>

		<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/brownis dengan taburan coklat(40k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary taxt-center" id="btn">Pesan Sekarang</button></a>
	</div>
</div>
</div>
<br>
<br>
<div class="container" id="coll" data-toggle="collapse" data-target="#bolu" >
<h2>Bolu</h2>

<div class="container collapse" id="bolu">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/bolu gulung varian rasa coklat dan keju(35k).jpg" id="gambar">
			</div>
		</div>

		<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/bolu panggang segitiga(35k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary" id="btn">Pesan Sekarang</button></a>
	</div>
</div>
</div>
<br>
<br>
<div class="container" id="coll" data-toggle="collapse" data-target="#tart" >
<h2>Tart</h2>

<div class="container collapse" id="tart">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/tart besar (80k).jpg" id="gambar">
			</div>
		</div>

		<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/tart besar(80k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary" id="btn">Pesan Sekarang</button></a>
	</div>
</div>
</div>
<br>
<br>
<div class="container" id="coll" data-toggle="collapse" data-target="#bf" >
<h2>Black Forest</h2>

<div class="container collapse" id="bf">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/blackforest kecil (100k).jpg" id="gambar">
			</div>
		</div>

		<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/blackforest sedang(120 k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary" id="btn">Pesan Sekarang</button></a>
	</div>
</div>
</div>
<br>
<br>
<div class="container" id="coll" data-toggle="collapse" data-target="#donat" >
<h2>Donat</h2>

<div class="container collapse" id="donat">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/Donat botong(25k).jpg" id="gambar">
			</div>
		</div>

		<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/Donat Mini(20k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary" id="btn">Pesan Sekarang</button></a>
	</div>
</div>
</div>
<br>
<br>
<div class="container" id="coll" data-toggle="collapse" data-target="#sponge" >
<h2>Sponge</h2>

<div class="container collapse" id="sponge">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/sponge bulat full coklat(35k).jpg" id="gambar">
			</div>
		</div>

		<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/sponge petak  rasa keju dan coklat(40k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary" id="btn">Pesan Sekarang</button></a>
	</div>
</div>
</div>
<br>
<br>
<div class="container" id="coll" data-toggle="collapse" data-target="#roti" >
<h2>Roti Lainnya</h2>

<div class="container collapse" id="roti">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/roti abon(5k).jpg" id="gambar">
			</div>
		</div>

		<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/roti pandan dengan keju panggang(6k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary" id="btn">Pesan Sekarang</button></a>
	</div>
</div>
</div>
<br>
<br>
<div class="container" id="coll" data-toggle="collapse" data-target="#selai" >
<h2>Selai</h2>

<div class="container collapse" id="selai">
	<div class="row">
			<div class="col-md-4" >
				<div class="thumbnail img" style="background-color: #fff1d2;" id="div1">
						<img src="foto/selai untuk coklat(20k).jpg" id="gambar">
			</div>
		</div>
		
		<a href="pesanonline.php"><button class="btn btn-primary" id="btn">Pesan Sekarang</button></a>
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
