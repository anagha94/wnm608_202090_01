<!DOCTYPE HTML>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Checkout Page</title>

	<?php include "parts/meta.php"; ?>


</head>

<body>
	
<header class="navbar nav-material">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Boba Drive</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none nav">
				<ul class="container display-flex">
					<li><a href="#">Home</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="about.php">About</a></li>
					<li><form class="hotdog" style="margin: 1em;box-sizing: content-box;">
					<span>&#129380;</span>
					<input type="search" placeholder="Search for your favorite drink"></form>
					</li>
				</ul>
			</nav>
		</div>
	</header>


<div class="container">
	<div class="class soft">
		<h2>Product Checkout</h2>

		<div class="card soft">

			<h3>Address</h3>
			<form class="form">
				<div class="form-control">
					<label for="address-street" class="form-label">Street</label>
					<input id="address-street" type="text" placeholder="Street name" class="form-input">
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="address-city" class="form-label">City</label>
							<input id="address-city" type="text" placeholder="City" class="form-input">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="address-state" class="form-label">State</label>
							<input id="address-state" type="text" placeholder="State" class="form-input">
						</div>
					</div>
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="address-zip" class="form-label">Zip Code</label>
							<input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="address-country" class="form-label">Country</label>
							<input id="address-country" type="text" placeholder="Country" class="form-input">
						</div>
					</div>
				</div>


			<h3>Payment</h3>
			<form class="form">
				<div class="form-control">
					<label for="payment-name" class="form-label">Full Name</label>
					<input id="payment-name" type="text" placeholder="Name" class="form-input">
				</div>
				<div class="form-control">
					<label for="payment-number" class="form-label">Card Number</label>
					<input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
				</div>
				<div class="form-control">
					<div class="grid gap">
						<div class="col-xs-12 col-md-6">
							<label for="payment-expiration" class="form-label">Expiration</label>
							<input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
						</div>
						<div class="col-xs-12 col-md-6">
							<label for="payment-cvv" class="form-label">CVV</label>
							<input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
						</div>
					</div>
				</div>
				<div class="form-control">
					<label for="payment-zip" class="form-label">Zip Code</label>
					<input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
				</div>
				<div class="form-control">
					<a href="product_confirmation.php" class="form-button">Complete Checkout</a>
				</div>
			</form>
		</div>

	</div>
</div>
</body>
</html>