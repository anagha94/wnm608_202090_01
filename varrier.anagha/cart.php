<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
		// include_once "parts/templates.php";
	//$cart = makeQuery(
		//makeConn(), 
		//"SELECT * FROM `products` WHERE `id` IN (5, 8, 7) ");


	$cart_items = getCartItems();

	// print_p($product);
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Page</title>
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
					<li><a href="index.php">Home</a></li>
					<li><a href="store.php">Store</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
			</nav>
		</div>
	</header>
	

	<div class="container">
		<h2>In Your Cart</h2>
		
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<?= array_reduce($cart_items, 'cartListTemplate') ?>
				</div>
			</div>

			<div class="col-xs-12 col-md-5">
				<div class="card soft flat">
					<?= cartTotals() ?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>