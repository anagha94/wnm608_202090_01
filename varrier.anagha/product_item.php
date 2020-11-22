<?php 

	include_once "lib/php/functions.php";
		// include_once "parts/templates.php";
	$product = makeQuery(
		makeConn(), 
		"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];

	 // print_p($_SESSION);
	$images = explode(",", $product->images);

	$image_elements = array_reduce($images,function($r,$o){
		return $r. "<img src='img/$o'>";
	})

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>item</title>


	<?php include "parts/meta.php"; ?>


	<script src="js/product_thumbs.js"></script>
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
		<div class="grid gap">
			<div class="col-xs-12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/<?= $product->thumbnail ?>" alt="">
					</div>
					<div class="images-thumb">
						<?= $image_elements ?>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-5">
				<form class="card soft flat" method="post" action="cart_action.php?action=add-to-cart">


					<input type="hidden" name="product-id" value="<?= $product->id ?>">


					<div class="card-section">
						<h2 class="prodcut-name"><?= $product->name ?></h2>
						<div class="product-price">&dollar;<?= $product->price ?></div>
					</div>

					<div class="card-section">
						<div class="form-control">
						<label for="product-amount" class="form-label">Amount</label>
						<div class="form-select">
							<select id="product-amount" name="product-amount">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
							</select>
						</div>
					</div>
						<div class="form-control">
						<label for="product-color" class="form-label">Color</label>
						<div class="form-select">
							<select id="product-color" name="product-color">
								<option>red</option>
								<option>green</option>
								
								
							</select>
						</div>
					</div>
				</div>

			<div class="card-section">
				<input type="submit"  class="form-button" value="Add To Cart">
			</div>
		</form>

	</div>
</div>

<div class="card soft dark">
			<p><?= $product->description ?></p>
		</div>
	</div>
	
<?php include "parts/footer.php"; ?>
	
</body>
</html>
