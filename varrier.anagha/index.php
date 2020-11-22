<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Boba Drive</title>

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="lib/css/styleguide.css">
	<link rel="stylesheet" href="lib/css/gridsystem.css">
	<link rel="stylesheet" href="css/storetheme.css">


	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
					<li><a href="cart.php">Cart</a></li>
					<li><form class="hotdog" style="margin: 1em;box-sizing: content-box;">
					<span>&#129380;</span>
					<input type="search" placeholder="Search for your favorite drink"></form>
					</li>
				</ul>
			</nav>
		</div>
	</header>



	<section class="container" style="max-width: 2000px;">

		<div class="full-image" style="background-image:url('img/boba1.jpg')"><br>
	</section>

	<section class="container">

		<h3 id="overlayfigure">Popular Choices</h3>

		<div class="grid gap">
			<div class="col-xs-12 col-md-4">
				<figure class="figure product-overlay">
					<img src="img/boba2.jpg" alt="">
					<figcaption>
						<div class="caption-body">
							<div>Product Name</div>
							<div>$3.99</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure product-overlay">
					<img src="img/boba2.jpg" alt="">
					<figcaption>
						<div class="caption-body">
							<div>Product Name</div>
							<div>$3.99</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="col-xs-12 col-md-4">
				<figure class="figure product-overlay">
					<img src="img/boba2.jpg" alt="">
					<figcaption>
						<div class="caption-body">
							<div>Product Name</div>
							<div>$3.99</div>
						</div>.[=]
					</figcaption>
				</figure>
			</div>
		</div>
	</section>

	<section class="container" style="max-width: 2000px;">

		<div class="view-window" style="background-image:url('img/boba1.jpg')">
	</section>

		<div class="card soft">
			<div class="form-control display-flex flex-align-center">
					<div class="flex-stretch">
						<label class="form-label"></label>
					</div>
					<div class="flex-none">
						<label class="form-label">Join us and earn reward points!</label>
					</div>
					<div class="flex-stretch">
						<input type="email" placeholder="youremail@email.com" class="form-input">
					</div>
					<div class="flex-stretch">
						<label class="form-label"></label>
					</div>
			</div>
		</div>
	
</body>
</html>