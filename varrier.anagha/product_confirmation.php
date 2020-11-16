<!DOCTYPE HTML>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Confirmation Page</title>

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
		<h2>Thank you!</h2>

		<p>Your order has been placed!</p>
		<p><a href="product_list.php">Place Another Order</a></p>

	</div>
</div>
</body>
</html>