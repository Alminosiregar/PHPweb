<?php 
session_start();
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.carousel-inner > .item > img {
      width: 100%;
      position: center;

  }
  .panel{
  	width: 300px; 	
  }
  .item{
  	width: 100%;
  }
  .myCarousel{
  	width: 300px;
  }
	</style>
	<title>Rosco Bakery</title>
	<link rel="stylesheet" type="text/css" href="Admin/assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- Nav Bar -->
	<?php include "menu.php"; ?>
	
	<!-- Konten -->
<div class="flex-container">

<div class="container col-md-offset-2 col-md-8">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <div class="ok">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg">
      </div>

      <div class="item ">
        <img src="2.jpg">
      </div>
    
      <div class="item">
        <img src="3.jpg">
      </div>

      <div class="item">
        <img src="41.jpg">
      </div>
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
