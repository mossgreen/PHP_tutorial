<?php 
require_once '../core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';

//get brands from db
$sql = "SELECT * FROM brand ORDER BY brands";
$result = $db -> query($sql);

?>
<h2 class="text-center">Brands</h2>

<table class="table table-bordered table-striped table-auto">
	<thead>
		<th></th>
		<th>Brands</th>
		<th></th>
	</thead>
	<tbody>

	<?php while($brand = msqli_fetch_assoc($result)): ?>
		<tr>
			<td><a href="brands.php?edit=1" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span> </a></td>
			<td><?php echo $brand['brand']; ?></td>
			<td><a href="brands.php?delete=1" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span> </a></td>
		</tr> 

	<?php endwhile(); ?>
	</tbody>
</table>
<?php 
include 'includes/footer.php';
?>