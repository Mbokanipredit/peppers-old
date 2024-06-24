<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
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
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top"style="background:#0076; border-color:#fff; padding:2rem; color:black;">
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
				<li><a href="#peppers_us" style="color: black;text-transform:uppercase;font-size:1.3rem;">Our peppers</a></li>
				<li><a href="profile.php#index.php#gallery" style="color: black;text-transform:uppercase;font-size:1.3rem; font-weight:bold;">Our Chocolate</a></li>
				<li  class="dropdownn">
					<a href="#" style="color: black;text-transform:uppercase;font-size:1.3rem;">Pricing <i class="glyphicon glyphicon-chevron-right"></i></a>
					<ul>
						<li><a href="profile.php#our_prices" style="text-transform:uppercase;font-size:1.3rem;">Peppers</a></li>
						<li><a href="profile.php#our_prices" style="text-transform:uppercase;font-size:1.3rem;">Chocolate</a></li>
					</ul>
				</li>
				<li><a href="index.php#contacts" style="color: black;text-transform:uppercase;font-size:1.3rem;  font-weight:bold;">Contact us</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Customer Order details</h1>
						<hr/>
						<?php
							include_once("db.php");
							$user_id = $_SESSION["uid"];
							$orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,o.trx_id,o.p_status,p.product_title,p.product_price,p.product_image FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
							$query = mysqli_query($con,$orders_list);
							if (mysqli_num_rows($query) > 0) {
								while ($row=mysqli_fetch_array($query)) {
									?>
										<div class="row">
											<div class="col-md-6">
												<img style="float:right;" src="product_images/<?php echo $row['product_image']; ?>" class="img-responsive img-thumbnail"/>
											</div>
											<div class="col-md-6">
												<table>
													<tr><td>Product Name</td><td><b><?php echo $row["product_title"]; ?></b> </td></tr>
													<tr><td>Product Price</td><td><b><?php echo  CURRENCY." ".$row["product_price"]; ?></b></td></tr>
													<tr><td>Quantity</td><td><b><?php echo $row["qty"]; ?></b></td></tr>
													<tr><td>Transaction Id</td><td><b><?php echo $row["trx_id"]; ?></b></td></tr>
												</table>
											</div>
										</div>
									<?php
								}
							}
						?>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
















































