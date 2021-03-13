<nav class="navbar navbar-default navbar-fixed-top" id="abc"  role="navigation">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		<div class="container sidebar-collapse col-md-offset-5" id="abc">
		<ul class="nav navbar-nav ">

			<li><a href="index.php">Beranda</a></li>
			<li><a href="menumakanan.php">Menu</a></li>
			<li><a href="pesanonline.php">Pesan Online</a></li>
			<li><a href="keranjang.php">Keranjang</a></li>
			<li><a href="checkout.php">Checkout</a></li>
			<li><a href="tentang.php">Tentang Kami</a></li>
			<?php 	if(isset($_SESSION["pelanggan"])): ?>
			
			 <li><a href="logout.php">Logout</a></li>
			
			<?php 	else: ?>
			
			 <li><a href="login.php">Login</a></li>
			
			<?php endif ?>
		</ul>
		</div>
	</nav>

	
	<section style="background-color: #9d562c; margin-top: 50px; padding: 10px; position: initial;">
	<div class="container" style="padding-bottom: -100px;">
	<ul class="nav navbar-nav">
	<li class="text-center"><img src="logo2.png" width="300" style="padding-bottom: -webkit-border-radius: 10px;
-moz-border-radius: 10px;"></li>
	
	<li><form class="navbar-form navbar-right" action="pencarian.php" method="get" style="margin-top: 40px;">
		<input type="text" name="keyword" class="form-control" placeholder="Cari..." style="width: 650px; height: 50px; background-color: #ffe5ac;">
		<button class="btn btn-primary" style="width: 80px; height: 50px;">Cari</button>	
	</form>
	</li>
	</ul>
	</div>
	</section>