<!DOCTYPE HTML>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Added Confirmation Page</title>

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
	<div class="card soft">
		<h2>You added ____ to your cart</h2>

		
	<div class="display-flex">


		<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
		<div class="flex-stretch"></div>
		<div class="flex-none"><a href="product_cart.php">Go to Cart</a></div>

	</div>
</div>
</div>

</body>
</html>