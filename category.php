<?php 
require_once 'core/init.php';
include 'includes/head.php'; 
include 'includes/navigation.php';
include 'includes/headerfull.php';
include 'includes/leftbar.php';

if (isset($_GET['cat'])) {
	$cat_id = sanitize($_GET['cat']);
}else{
	$cat_id = '';
}

var_dump($cat_id);

$sql = "SELECT * FROM products WHERE categories = '$cat_id'";
$productQ = $db -> query($sql);
?>

<!-- main content -->
<div class="col-md-8">
	<div class="row">
		<h2 class="text-center" >
			Featured Products
		</h2>
		<?php while($product = mysqli_fetch_assoc($productQ)) : ?>
			<!-- for debug -> -->
			<!-- <?php var_dump($product); ?>    -->  
			<div class="col-md-3">
				<h4><?php echo $product['title']; ?></h4>
				<img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="img-thumb" />
				<p class="list-price text-danger">List Price: <s>$<?php echo $product['list_price']; ?></s></p>
				<p class="price">Our Price:$<?php echo $product['price']; ?></p>
				<button class="btn btn-sm btn-success" type="button"  onclick="detailsmodal(<?php echo $product['id']; ?>)" > Details</button>
			</div>
		<?php endwhile; ?>

	</div>
</div>

<?php 
include 'includes/rightbar.php';
include 'includes/footer.php';
?>


