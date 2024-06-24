<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
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
		<link rel="stylesheet" type="text/css" href="style.css">
		  
		<!-- ========== Start Stylesheet ========== -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/themify-icons.css" rel="stylesheet">
        <link href="assets/css/elegant-icons.css" rel="stylesheet">
        <link href="assets/css/flaticon-set.css" rel="stylesheet">
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet">
        <link href="assets/css/helper.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/unit-test.css" rel="stylesheet">
        <!-- ========== End Stylesheet ========== -->

		<style>
			
				.navbar .dropdownn ul {
				display: flex;
				position: absolute;
				left: 14px;
				top: calc(100% + 10px);
				margin: 0;
				padding: 10px 0;
				z-index: 99;
				opacity: 0;
				visibility: hidden;
				background: #0077B5;
				box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
				transition: 0.3s;
				}

				.navbar .dropdownn ul li {
				min-width:100px;
				color:#ffff;
				}

				.navbar .dropdownn ul  a {
				padding: 10px 20px;
				text-transform: none;
				color:#ffff;
				}

				.navbar .dropdown ul a i {
				font-size: 12px;
				}

				.navbar .dropdownn ul a:hover,
				.navbar .dropdown ul .active:hover,
				.navbar .dropdown ul li:hover>a {
				color: #ffbf00;
				}

				.navbar .dropdownn:hover>ul {
				opacity: 1;
				top: 100%;
				visibility: visible;
				}

				.navbar .dropdownn .dropdownn ul {
				top: 0;
				left: calc(100% - 30px);
				visibility: hidden;
				}

				.navbar .dropdownn .dropdownn:hover>ul {
				opacity: 1;
				top: 0;
				left: 100%;
				visibility: visible;
				}

		</style>
	</head>
<body>
<!-- <div class="wait overlay">
	<div class="loader"></div>
</div> -->
	<div class="navbar navbar-inverse navbar-fixed-top" style="background:#ffff; border-color:#fff; padding:2rem; color:black;" >
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">
					<img src="assets/img/logo.png" width="87" height="57" class="logo" alt="" style="margin-top:-2rem;">
				</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php" style="color: black;text-transform:uppercase; font-size:1.3rem;">Home</a></li>
				<li><a href="#about_us" style="color: black;text-transform:uppercase;font-size:1.3rem;"> About us</a></li>
				<li><a href="#our_products " style="color: black;text-transform:uppercase;font-size:1.3rem;">Products</a></li>
				<li><a href="#peppers_us" style="color: black;text-transform:uppercase;font-size:1.3rem;">Our peppers</a></li>
				<li><a href="#our_chocolates" style="color: black;text-transform:uppercase;font-size:1.3rem;">Our Chocolate</a></li>
				<li  class="dropdownn">
					<a href="#" style="color: black;text-transform:uppercase;font-size:1.3rem;">Pricing <i class="glyphicon glyphicon-chevron-right"></i></a>
					<ul>
						<li><a href="#our_prices" style="text-transform:uppercase;font-size:1.3rem;">Peppers</a></li>
						<li><a href="#our_prices" style="text-transform:uppercase;font-size:1.3rem;">Chocolate</a></li>
					</ul>
				</li>
				<li><a href="#contacts" style="color: black;text-transform:uppercase;font-size:1.3rem;">Contact us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown" style="color:black; background:#fff;"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading" style="background:#0077B5">
								<div class="row" style="color:#ffff">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">P.Image</div>
									<div class="col-md-3">P.Name</div>
									<div class="col-md-3">Price <?php echo CURRENCY; ?></div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; background:#fff;"><span class="glyphicon glyphicon-user" style="color:black;"></span> Login</a>
					<ul class="dropdown-menu" style="background:#0077B5;">
						<div style="width:300px; background:#0077B5;">
							<div class="panel panel-primary" style="background:#0077B5;">
								<div class="panel-heading" style="background:#0077B5;"> <strong>Login</strong></div>
								<div class="panel-heading" style="background:#0077B5;">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<input type="submit" class="btn btn-warning" style="padding:1.2rem; background: #003500;" value="login">
										<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;">Create Account Now</a>
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<?php include './inc/heros.php'; ?>	
<?php include './inc/about_us.php'; ?>	
<?php include './inc/slider.php'; ?>
<?php include './inc/categories.php'; ?>	
	<p><br/></p>
	<div id="our_prices">
		<div class="site-heading text-center" style="desplay: flex;">
			<h2 class="title">Our prices</h2>
			<div class="devider"></div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-0 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading" style="background:#0077B5;">Products</div>
					<div class="panel-body">
						<div id="get_product">
						</div>
					</div>
					<div class="panel-footer">&copy; <?php echo date("Y"); ?></div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	<?php include './inc/delevery-area.php'; ?>
	<?php include './inc/contact.php'; ?>
	<?php include './inc/footer.php'; ?>
</body>
</html>