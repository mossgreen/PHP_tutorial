<?php 
require_once '../core/init.php';
if(!is_logged_in()){
	header('Location: login.php');
}
include 'includes/head.php';
include 'includes/navigation.php';

$txn_id = sanitize((int)$_GET['txn_id']);
$txnQuery = $db -> query("SELECT * FROM transactions WHERE id ='{$txn_id}'");
$txn = mysqli_fetch_assoc($txnQuery);
$cart_id = $txn['cart_id'];
$cartQ = $db -> query("SELECT * FROM cart WHERE id = '{$cart_id}'");
$cart = mysqli_fetch_assoc($cartQ);
$items = json_decode($cart['items'], true);
$idArray = array();
$products = array();  
foreach ($items as $item) {
	$idArray[] = $item['id'];
}
$ids=implode(',',$idArray); 

$productQ = $db -> query(
	"SELECT i.id as 'id', i.title as 'title', c.id as 'cid', c.category as 'child', p.category as 'parent'
	FROM products i
	LEFT JOIN categories c ON i.categories = c.id
	LEFT JOIN categories p ON c.parent = p.id
	WHERE i.id IN ({$ids})
	");

while($p = mysqli_fetch_assoc($productQ)){
	foreach ($items as $item) {
		if($item['id'] == $p['id']){
			$x = $item;
			continue;
		}
	}
	$products[] = array_merge($x, $p); var_dump($products);
}
?>

<h2 class="text-center">Items Ordered</h2>
<table class="table table-condensed table-bordered table-striped">
	<thead>
		<th>Quantity</th>
		<th>Title</th>
		<th>Category</th>
		<th>Size</th>
	</thead>
	<tbody>
		<?php  foreach($products as $product): ?>
			<tr>
				<th><?=$product['quantity'];?></th>
				<th><?=$product['title'];?></th>
				<th><?=$product['parent'].' ~ '.$product['child'];?></th>
				<th><?=$product['size'];?></th>
			</tr>
		<?php  endforeach; ?>
	</tbody>

</table>




<?php  include 'includes/footer.php'; ?>