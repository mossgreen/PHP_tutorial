<?php 
	require_once 'core/init.php';
	include 'includes/head.php'; 
	include 'includes/navigation.php';
	include 'includes/headerfull.php';
	include 'includes/leftbar.php';

?>
	
		<!-- main content -->
		<div class="col-md-8">
			<div class="row">
				<h2 class="text-center">
					Featured Products
				</h2>
				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price">Our Price:$134.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>

				<div class="col-md-3">
					<h4>Hollister</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$24.99</s></p>
					<p class="price">Our Price:$19.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>

				<div class="col-md-3">
					<h4>Fancy Shoes</h4>
					<img src="images/products/women6.png" alt="Levis Jeans" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$59.99</s></p>
					<p class="price">Our Price:$49.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>

				<div class="col-md-3">
					<h4>Boys Hoodie</h4>
					<img src="images/products/boys1.png" alt="Boys Hoodie" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$24.99</s></p>
					<p class="price">Our Price:$19.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>

				<div class="col-md-3">
					<h4>girls dress</h4>
					<img src="images/products/girls3.png" alt="girls dress" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price">Our Price:$199.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>

				<div class="col-md-3">
					<h4>Purse</h4>
					<img src="images/products/women5.png" alt="Purse" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$204.99</s></p>
					<p class="price">Our Price:$199.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>

				<div class="col-md-3">
					<h4>Women's Shirt</h4>
					<img src="images/products/women3.png" alt="Women's Shirt" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$54.99</s></p>
					<p class="price">Our Price:$19.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>

				<div class="col-md-3">
					<h4>Woman's shirt</h4>
					<img src="images/products/women7.png" alt="Woman's shirt" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$59.99</s></p>
					<p class="price">Our Price:$49.99</p>
					<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
				</div>
			</div>
		</div>

		<?php 
			include 'includes/detailsmodal.php';
			include 'includes/rightbar.php';
			include 'includes/footer.php';
		 ?>


