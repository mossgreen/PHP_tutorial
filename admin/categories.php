<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';

$sql = "SELECT * FROM categories WHERE parent = 0";
$result  = $db -> query($sql);

?>

<h2 class="text-center">Categories</h2>

<div class="row">

	<!-- form -->
	<div class="col-md-6">
		<!-- category table -->
		<form class="form" action="categories.php" method="post">
			<div class="form-group">
				
				<label for="parent">Parent</label>
				<select name="parent" id="parent" class="form-control">
					<option value="0">Parent</option>
					<?php while($parent = mysqli_fetch_assoc($result)): ?>
						<option value="<?=$parent['id'];?>"><?=$parent['category'];?></option>
					<?php  endwhile; ?>
				</select>
			</div>
		</form>

	</div>

	<!-- category table -->
	<div class="col-md-6">
		<table class="table table-bordered">
			<thead>
				<th>Category</th>
				<th>Parent</th>
				<th></th>
			</thead>
			<tbody>
				<?php  
					
				$sql = "SELECT * FROM categories WHERE parent = 0";
				$result  = $db -> query($sql);

				while($parent = mysqli_fetch_assoc($result)):
					$parent_id = $parent['id'];
				$sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
				$cresult = $db -> query($sql2);
				?>

				<tr class="bg-primary">
					<td><?php echo $parent['category']; ?></td>
					<td>Parent</td>
					<td>
						<a href="categries.php?edit=<?php echo $parent['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="categries.php?delete=<?php echo $parent['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>
					</td>
				</tr>
				<?php while($child = mysqli_fetch_assoc($cresult)): ?>

					<tr class="bg-info">
						<td><?php echo $parent['category']; ?></td>
						<td><?php echo $parent['category']; ?></td>
						<td>
							<a href="categries.php?edit=<?php echo $child['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="categries.php?delete=<?php echo $child['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span></a>
						</td>
					</tr>

				<?php endwhile; ?>
			<?php endwhile; ?>
		</tbody>


	</table>

</div>



</div>

<?php  include 'includes/footer.php' ;?>