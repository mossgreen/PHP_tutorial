<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';

$sql = "SELECT * FROM categories WHERE parent = 0";
$result  = $db -> query($sql);

?>
<h2 class="text-center">Categories</h2>

<div class="row">
	<div class="col-md-6">
		

	</div>
	<div class="col-md-6">
		<table class="table table-bordered">
			<thead>
				<th>Category</th>
				<th>Parent</th>
				<th></th>
			</thead>
			<tbody>
			<?php  while($parent = mysqli_fetch_assoc($result)): ?>

					<tr class="bg-primary">
						<td>Shirts</td>
						<td>Men</td>
						<td>
							<a href="categries.php?edit=1" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="categries.php?delete=1" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>
						</td>
					</tr>

				<?php endwhile; ?>
			</tbody>


		</table>
		
	</div>



</div>

<?php  include 'includes/footer.php' ;?>