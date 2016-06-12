<?php 
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/headerpartial.php';

if($cart_id != ''){
	$cartQ = $db -> query("SELECT * FROM cart WHERE id = '$cart_id'");
	$result = mysqli_fetch_assoc($cartQ);
	$items = json_decode($result['items'], true);  
	$i = 1;
	$sub_total = 0;
	$item_count = 0;
}
?>

<div class="col-md-12">
	<div class="row">
		<h2 class="text-center">My Shopping Cart</h2><hr>
		<?php if($cart_id == ''): ?>
			<div class="bg-danger">
				<p class="text-center text-danger">
					You shopping cart is empty.
				</p>
			</div>
		<?php else: ?>
			<table class="table table-bordered table-condensed table-striped">
				<thead>
					<th>#</th>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Size</th>
					<th>Sub Total</th>
				</thead>
				<tbody>
					<?php 

					foreach ($items as $item){
						$product_id = $item['id'];
						$productQ = $db -> query("SELECT * FROM products WHERE id = '{$product_id}'");
						$product = mysqli_fetch_assoc($productQ);
						$sArray = explode(',',$product['sizes']);
						foreach($sArray as $sizeString){
							$s = explode(':',$sizeString);
							if($s[0] == $item['size']){
								$available = $s[1];

							}
						}
						?>
						<tr>
							<td><?=$i;?></td>
							<td><?=$product['title'];?></td>
							<td><?=money($product['price']);?></td>
							<td><?=$item['quantity'];?></td>
							<td><?=$item['size'];?></td>
							<td><?=money($item['quantity'] * $product['price']);?></td>
						</tr>

						<?php 
						$i++;
						$item_count += $item['quantity'];
						$sub_total += ($product['price'] * $item['quantity']);
					} 
					$tax = TAXRATE * $sub_total;
					$tax = number_format($tax, 2);
					$grand_total = $tax + $sub_total;


					?> 

				</tbody>
			</table>
			<table class="table table-bordered table-condensed text-right">
			<legend>Totals</legend>
				<thead class="totals-table-header">
					<th>Total Items</th>
					<th>Sub Total</th>
					<th>Tax</th>
					<th>Grand Total</th>
				</thead>
				<tbody>
					<tr>
						<td><?=$item_count;?></td>
						<td><?=money($sub_total);?></td>
						<td><?=money($tax);?></td>
						<td class="bg-success"><?=money($grand_total);?></td>
					</tr>
				</tbody>
			</table>

		<?php endif; ?>
	</div>
</div>



<?php include 'includes/footer.php'; ?>