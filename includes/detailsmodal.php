<?php 
require_once '../core/init.php';
$id = $_POST['id'];
$id = (int)$id;
$sql = "SELECT * FROM products WHERE id='$id' ";
$result = $db -> query($sql);
$product = mysqli_fetch_assoc($result);
$brand_id = $product['brand'];
$sql = "SELECT brand FROM brand WHERE id='$brand_id'";
$brand_query = $db -> query($sql);
$brand = mysqli_fetch_assoc($brand_query);
$sizestring = $product['sizes'];
?>

<!-- Details Modal -->
<?php ob_start(); ?>

<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" arial-labelledby="details-1" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button" data-dismiss="modal" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title text-center"><?php echo $product['title']; ?></h4>
				<?php echo $sizestring; ?>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="details img-responsive ">
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p><?php echo $product['description']; ?></p>

							<hr>
							<p>Price: $<?php echo $product['price']; ?></p>
							<p>Brand: <?php echo $brand['brand']; ?> </p>
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