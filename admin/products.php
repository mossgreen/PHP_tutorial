<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';;
include 'includes/head.php';
include 'includes/navigation.php'
$sql = "SELECT * FROM products WHERE deleted = 0"
$presults = $db -> query($sql);
?>

<h2 class="text-center">Products</h2>
<hr>

<table class="table table-bordered table-condensed table-striped">
	<thead>
		<th></th>
		<th>Product</th>
		<th>Price</th>
		<th>Categories</th>
		<th>Featured</th>
		<th>Sold</th>
	</thead>
	<tbody>
		<?php while($product = mysqi_fetch_assoc($presults)): ?>

			<tr>
				<td>
					<a href="" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>



<?php 
include 'includes/footer.php';

?>