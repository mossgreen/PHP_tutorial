<?php 
require_once 'core/init.php';
include 'includes/head.php'; 
include 'includes/navigation.php';
include 'includes/headerfull.php';
include 'includes/leftbar.php';

$sql = "SELECT * FROM products WHERE featured = 1";
$featured = $db -> query($sql);
?>

<!-- main content -->
<div class="col-md-8">
	<div class="row">
		<h2 class="text-center">
			Featured Products
		</h2>
		<?php while($product = mysqli_fetch_assoc($featured)) : ?>
			<!-- for debug ->
			<?php var_dump($product); ?>  -->  
			<div class="col-md-3">
				<h4><?php echo $product['title']; ?></h4>
				<img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-thumb" />
				<p class="list-price text-danger">List Price: <s>$<?php echo $product['list_price']; ?></s></p>
				<p class="price">Our Price:$134.99</p>
				<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#details-1"> Details</button>
			</div>
		<?php endwhile; ?>

	</div>
</div>

<?php 
include 'includes/detailsmodal.php';
include 'includes/rightbar.php';
include 'includes/footer.php';
?>


