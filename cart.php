<?php

require "config/constants.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Penjas Peppers</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>
<!-- <div class="wait overlay">
	<div class="loader"></div>
</div> -->
	<div class="navbar navbar-inverse navbar-fixed-top" style="background:#ffff; border-color:#0077B5; padding:2rem; color:black;">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
				<img src="assets/img/logo.png" width="87" height="57" class="logo" alt="" style="margin-top:-2rem;">
				</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php" style="color: black;text-transform:uppercase; font-size:1.3rem; font-weight:bold;">Home</a></li>
				<li><a href="index.php#about_us" style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;"> About us</a></li>
				<li><a href="index.php#our_products " style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;">Products</a></li>
				<li><a href="#peppers_us" style="color: black;text-transform:uppercase;font-size:1.3rem;font-weight:bold;">Our peppers</a></li>
				<li><a href="index.php#gallery" style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;">Our Chocolate</a></li>
				<li><a href="index.php#our_prices" style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;">Pricing</a></li>
				<li><a href="index.php#contacts" style="color: black;text-transform:uppercase;font-size:1.3rem;  font-weight:bold;">Contact us</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading" style="background:#0077B5">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout"></div>
						
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
</body>	
</html>
















		