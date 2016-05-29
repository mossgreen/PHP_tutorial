<!-- Details Modal -->
<?php ob_start(); ?>
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" arial-labelledby="details-1" aria-hidden="true">
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

							<hr>
							<p>Price: $34.99</p>
							<p>Brand: Levis </p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="row">
										<div class="col-xs-4">
											<label for="quantity">
												Quantity:
											</label>
										</div>

										<div class="col-xs-4">
											<input type="text" name="quantity" class="form-control" id="quantity">
										</div>
										<div class="col-xs-4">
											<p>(Available: 3)</p>	
										</div>
									</div>

								</div>
								<br> <br>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-4">
											<label for="size">Size: </label>

										</div>
										<div class="col-xs-4">
											<select name="size" id="size" class="form-control">
												<option value=""></option>
												<option value="M">M</option>
												<option value="S">S</option>
												<option value="L">L</option>
											</select>
										</div>
										<div class="col-xs-4"></div>
									</div>
								</div>
							</form>
						</div>
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
<?php echo ob_get_clean(); ?>