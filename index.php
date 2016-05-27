<!DOCTYPE html>
<html>
<head>
	<title>This is title</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js" ></script>
</head>
<body>
	<!-- top nav ba -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="contianer">
		<a href="index.php" class="navbar-brand">moss's shop</a>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
		
					</ul>
				</li>
				<li class="dropdown"></li>
				<li class="dropdown"></li>
			</ul>
		</div>
	</nav>

	<!-- Header -->
	<div id="headerWrapper">
		<div id="back-flower"></div>
		<div id="logotext"></div>
		<div id="fore-flower"></div>
	</div>

	<div class="container-fluid">
		<!-- left side bar -->
		<div class="col-md-2">
			Left side bar here
		</div>	
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

		<!-- right side bar -->
		<div class="col-md-2">
			Right side bar
		</div>
	</div>



	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate perferendis obcaecati iste, culpa est eum, facere dolore nam mollitia, repudiandae eaque consequuntur quibusdam et laudantium dolorum, illo possimus ab incidunt.
	</p>

	<footer class="text-center" id="footer">&copy; CopyRight 2013-2015 moss'shop</footer>

	<!-- Details Modal -->
	<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" arial-labelledby="details-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title text-center">Levis Jeans</h4>
				</div>

				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<div class="center-block">
									<img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive ">
								</div>
							</div>
							<div class="col-sm-6">
								<h4>Details</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod impedit dignissimos illo quae eos, nisi ipsum nihil nobis rerum! Maxime molestias delectus culpa, porro vitae nulla qui esse perferendis aliquam?</p>
							</div>
							<hr>
							<p>Price: $34.99</p>
							<p>Brand: Levis </p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity">
											Quantity:
										</label>
										<input type="text" name="quantity" class="form-control" id="quantity">										
									</div>
									<p>Available: 3</p>
								</div>
								<div class="form-group">
									<label for="size"></label>
									<select name="size" id="size" class="form-control">
										<option value=""></option>
										<option value="M"></option>
										<option value="S"></option>
										<option value="L"></option>
									</select>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal"> close </button>
					<button class="btn btn-warning" type="submit" ><span class="glyphicon  glyphicon-shopping-cart"></span>	Add To Cart</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
	jQuery(window).scroll(function(){
		var vscroll = jQuery(this).scrollTop();
		jQuery('#logotext').css({
			"tansform" : "translate(0px, "+vscroll/2+"px)"
		});

				var vscroll = jQuery(this).scrollTop();
		jQuery('#back-flower').css({
			"tansform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
		});

				var vscroll = jQuery(this).scrollTop();
		jQuery('#fore-flower').css({
			"tansform" : "translate(0px, -"+vscroll/2+"px)"
		});
	});

	</script>
</body>
</html>