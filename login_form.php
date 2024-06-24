<?php
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}

if (isset($_POST["login_user_with_product"])) { 
	$product_list = $_POST["product_id"];
	$json_e = json_encode($product_list);
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

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
	</head>
<body>
<!-- <div class="wait overlay">
	<div class="loader"></div>
</div> -->
	<div class="navbar navbar-inverse navbar-fixed-top" style="background:#ffff; border-color:#0077B5; padding:2rem; color:black;">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">
				<img src="assets/img/logo.png" width="87" height="57" class="logo" alt="" style="margin-top:-2rem;">
				</a>
			</div>
			<ul class="nav navbar-nav">
			<li><a href="index.php" style="color: black;text-transform:uppercase; font-size:1.3rem; font-weight:bold;">Home</a></li>
				<li><a href="index.php#about_us" style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;"> About us</a></li>
				<li><a href="index.php#our_products " style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;">Products</a></li>
				<li><a href="index.php#peppers_us" style="color: black;text-transform:uppercase;font-size:1.3rem;font-weight:bold;">Our peppers</a></li>
				<li><a href="index.php#gallery" style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;">Our Chocolate</a></li>
				<li><a href="index.php#our_prices" style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;">Pricing</a></li>
				<li><a href="index.php#contacts" style="color: black;text-transform:uppercase;font-size:1.3rem;  font-weight:bold;">Contact us</a></li>
			</ul>
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
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading" style="background:#0077B5;">Customer Login Form</div>
					<div class="panel-body">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required/>
							<p><br/></p>
							<a href="#" style="color:#333; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right; background:#0077B5;" Value="Login">
							<!--If user dont have an account then he/she will click on create account button-->
							<div><a href="customer_registration.php?register=1">Create a new account?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















