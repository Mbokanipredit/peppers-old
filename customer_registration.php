<?php
if (isset($_GET["register"])) {
	
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
				<a href="index.php" class="navbar-brand">
				<img src="assets/img/logo.png" width="87" height="57" class="logo" alt="" style="margin-top:-2rem;">
				</a>
			</div>
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
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading text-center" style="background:#0077B5">Customer Registration Form</div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control" required>
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Confirm Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Contact Number</label>
								<input type="text" id="mobile" name="mobile"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address 1</label>
								<input type="text" id="address1" name="address1"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address 2</label>
								<input type="text" id="address2" name="address2"class="form-control" required>
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;background:#0077B5" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















