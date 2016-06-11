<?php 
require_once 'core/init.php';
include 'includes/head.php'; 
include 'includes/navigation.php';
include 'includes/headerfull.php';
include 'includes/leftbar.php';

$sql = "SELECT * FROM products WHERE featured = 1";
$featured = $db -> query($sql);
echo BASEURL;
?>


<!-- main content -->
<div class="col-md-8">
	<div class="row">
		<h2 class="text-center">Featured Products</h2>
		<?php while($product = mysqli_fetch_assoc($featured)) : ?>
			
			<div class="col-md-3 text-center">
				<h4><?=$product['title']; ?></h4>
				<img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-thumb" />
				<p class="list-price text-danger">List Price: <s>$<?php echo $product['list_price']; ?></s></p>
				<p class="price">Our Price:$<?php echo $product['price']; ?></p>
				
				<button type="button" onclick="detailsmodal(<?=$product['id']; ?>)" class="btn btn-sm btn-success" > Details</button>

			</div>
		<?php endwhile; ?>

	</div>
</div>

<?php 
include 'includes/rightbar.php';
include 'includes/footer.php';
?>


