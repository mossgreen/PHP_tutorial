<?php 
require_once '../core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';

//get brands from db
$sql = "SELECT * FROM brand ORDER BY brand";
$results = $db -> query($sql);

$errors = array();
//if add form is submited
if(isset($_POST['add_submit'])){
	$brand = $_POST['brand'];
	//check if brand is blank
	if($_POST['brand'] == ''){
		$errors[] .= 'You must enter a brand!';
	}
	//check if brand exists in database
	$sql = "SELECT * FROM brand WHERE brand = '$brand'";
	$result = $db -> query($sql);
	$count = mysqli_num_rows($result);
	if($count > 0){
		$errors[] .= $brand.' already exist, please choose another brand.';

	}

	//dispaly errors
	if(!empty($errors)){
		echo display_errors($errors);
	}else{
		// add brand to database

	}

}

?>
<h2 class="text-center">Brands</h2>
<hr>
<!-- Brand form -->
<div class="text-center">
	<form action="brands.php" method="post" class="form-inline">
		<div class="form-group">
			<label for="brand">Add A Brand:</label>
			<input type="text" name="brand" id="brand" class="form-control" value="<?php echo ((isset($_POST['brand']))?$_POST['brand']:''); ?>">
			<input type="submit" name="add_submit" value="Add Brand" class="btn   btn-success">
		</div>

	</form>
</div>

<hr>

<table class="table table-bordered table-striped table-auto">
	<thead>
		<th></th>
		<th>Brands</th>
		<th></th>
	</thead>
	<tbody>

		<?php while($brand = mysqli_fetch_assoc($results)): ?>
			<tr>
				<td><a href="brands.php?edit= <?php echo $brand['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span> </a></td>
				<td><?php echo $brand['brand']; ?></td>
				<td><a href="brands.php?delete=<?php echo $brand['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove-sign"></span> </a></td>
			</tr> 

		<?php endwhile; ?>
	</tbody>
</table>
<?php 
include 'includes/footer.php';
?>