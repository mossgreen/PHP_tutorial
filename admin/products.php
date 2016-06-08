<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';;
include 'includes/head.php';
include 'includes/navigation.php';
if (isset($_GET['add'])) {
	$brandQuery = $db -> query("SELECT * FROM brand ORDER BY brand");
	$parentQuery = $db -> query("SELECT * FROM categories WHERE parent = 0 ORDER BY category");
	$sizesArray = array();
	if ($_POST) {
		$errors = array();
		if (!empty($_POST['sizes'])) {
			$sizeString = sanitize($_POST['sizes']);
			$sizeString = rtrim($sizeString,','); 
			$sizesArray = explode(',',$sizeString);
			$sArray = array();
			$qArray = array();
			foreach ($sizesArray as $ss ) {
				$s = explode(':', $ss);
				$sArray[] = $s[0];
				$qArray[] = $s[1];		}
			}else{ $sizesArray = array(); }

			$required = array('title', 'brand','price','parent','child','sizes');
			foreach($required as $field){
				if($_POST[$field] == ''){
					$errors[] = 'All Fields With and Astrisk are required.';
					break;
				}
			}

			if(!empty($_FILES)){
				var_dump($_FILES);
				$photo = $_FILES['photo'];
				$name = $photo['name'];
				$nameArray = explode('.',$name);
				$fileName = $nameArray[0];
				$fileExt = $nameArray[1];
				$mime = explode('/',$photo['type']);
				$mimeType = $mime[0];
				$mimeExt = $mime[1];
				$tmpLoc = $photo['tmp_name'];
				$fileSize = $photo['size'];
				$allowed = array('png','jpg','jpeg','gif');
				if($mimeType != 'image'){
					$errors[] = 'The file must be an image.';
				}
				if(!in_array($fileExt, $allowed)){
					$errors[] = 'The file extension must be a png, jpg, jpeg, or git.';
				}
				if($fileSize > 1000000){
					$errors[] = 'The files size must be under 1 MB.';
				}
				if($_fileExt != $mimeExt && ($mimeExt == 'jpeg' && $fileExt != 'jgp')){
					$errors[] = 'File extension does not match the file.';
				}
			}
			if(!empty($errors)){
				echo display_errors($errors);
			}else{
				//upload file and insert into database
			}
		}
		?>
		<h2 class="text-center">Add A New Product</h2>
		<hr>
		<form action="products.php?add=1" method="POST" enctype="multipart/form-data">
			<div class="form-group col-md-3">
				<label for="title">Title*:</label>
				<input class="form-control" type="text" name="title" id="title" value="<?=((isset($_POST['title']))?sanitize($_POST['title']):'');?>">
			</div>
			<div class="form-group col-md-3">
				<label for="brand">brand*:</label>
				<select class="form-control" id="brand" name="brand">
					<option value="" <?=((isset($_POST['brand']) && $_POST['brand'] == '')?' selected':'');?>></option>
					<?php while($brand = mysqli_fetch_assoc($brandQuery)): ?>
						<option value="<?=$brand['id'];?>" <?=((isset($_POST['brand']) && $_POST['brand'] == $brand['id'])?' selected':'');?>><?=$brand['brand'];?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="parent">Parent Category*:</label>
				<select name="parent" id="parent" class="form-control">
					<option value="" <?=((isset($_POST['parent']) && $_POST['parent'] == '')?' selected':'');?>></option>
					<?php while($parent = mysqli_fetch_assoc($parentQuery)): ?>
						<option value="<?=$parent['id'];?>" <?=((isset($_POST['parent']) && $_POST['parent'] == $parent['id'])?' select':'');?>><?=$parent['category'];?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="child">Child Category*:</label>
				<select name="child" id="child" class="form-control">

				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="price">Price*:</label>
				<input type="text" id="price" name="price" class="form-control" value="<?=((isset($_POST['price']))?sanitize($_POST['price']):'');?>">
			</div>
			<div class="form-group col-md-3">
				<label for="list_price">List Price:</label>
				<input type="text" id="list_price" name="list_price" class="form-control" value="<?=((isset($_POST['list_price']))?sanitize($_POST['list_price']):'');?>">
			</div>
			<div class="form-group col-md-3">
				<label>Quantity & Sizes*:</label>
				<button class=" form-control btn btn-default" onclick="jQuery('#sizesModal').modal('toggle');return false;">Quantity & Sizes</button>
			</div>
			<div class="form-group col-md-3">
				<label for="sizes">Sizes & Qty preview</label>
				<input type="text" name="sizes" id="sizes" class="form-control" value="<?=((isset($_POST['sizes']))?$_POST['sizes']:'');?>" readonly>
			</div>

			<div class="form-group col-md-6">
				<label for="photo">Product Photo:</label>
				<input type="file" class="form-control" name="photo" id="photo">
			</div>
			<div class="form-group col-md-6">
				<label for="description">Description:</label>
				<textarea name="description" id="description" cols="30" rows="6" class="form-control">
					<?=((isset($_POST['description']))?sanitize($_POST['description']):'');?>
				</textarea>
			</div>
			<div class="col-md-3 pull-right">
				<input type="submit" value="Add Product" class="form-control btn btn-success pull-right">
			</div>
			<div class="clearfix"></div>

		</form>

		<!-- Modal -->
		<div class="modal fade" id="sizesModal" tabindex="-1" role="dialog" aria-labelledby="sizesModalLabel">
			<div class="modal-dialog modal-lg"  >
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="sizesModalLabel">Size & Quantity </h4>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<?php for($i =1; $i <= 12;$i++):?>
								<div class="form-group col-md-4">
									<lable for="size<?=$i;?>">Size:</lable>
									<input type="text" name="size<?=$i;?>" id="size<?=$i;?>" value="<?=((!empty($sArray[$i-1]))?$sArray[$i-1]:'');?>" class="form-control">
								</div>
								<div class="form-group col-md-2">
									<lable for="qty<?=$i;?>">Quantify:</lable>
									<input type="number" name="qty<?=$i;?>" id="qty<?=$i;?>" value="<?=((!empty($qArray[$i-1]))?$qArray[$i-1]:'');?>" min="0" class="form-control">
								</div>

							<?php endfor; ?>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" onclick="updateSizes();jQuery('#sizesModal').modal('toggle');return false;">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		<?php }else{


			$sql = "SELECT * FROM products WHERE deleted = 0";
			$presults = $db -> query($sql);
			if(isset($_GET['featured'])) {
				$id = (int)$_GET['id'];
				$featured = (int)$_GET['featured'];
				$featuredSql = "UPDATE products SET featured = $featured WHERE id=$id ";
				$db -> query($featuredSql);
				header('Location: products.php');
			}
			?>

			<h2 class="text-center">Products</h2>
			<a href="products.php?add=1" class="btn btn-success pull-right" id="add-product-btn">
				Add Product
			</a>
			<div class="clearfix"></div>
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
					<?php while($product = mysqli_fetch_assoc($presults)): 
					$childID = $product['categories'];
					$catSql = "SELECT * FROM categories WHERE id=$childID";
					$result = $db -> query($catSql);
					$child = mysqli_fetch_assoc($result);
					$parentID = $child['parent'];
					$pSql = "SELECT * FROM categories WHERE id= '$parentID' ";
					$presult = $db -> query($pSql);
					$parent = mysqli_fetch_assoc($presult);
					$category = $parent['category'].'~'.$child['category'];
					?>
					<tr>
						<td>
							<a href="products.php?edit=<?=$product['id']?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="products.php?delete=<?=$product['id']?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
						</td>
						<td><?=$product['title'];?></td>
						<td><?=money($product['price']);?></td>
						<td><?=$category;?></td>
						<td>
							<a href="products.php?featured=<?=(($product['featured'] == 0)?'1':'0');?>&id=<?=$product['id'];?>" class="btn btn-xs btn-default ">
								<span class="glyphicon glyphicon-<?=(($product['featured'] == 1)?'minus':'plus');?>">
								</span>
							</a>
							&nbsp <?=(($product['featured'] == 1)?'Featured product':'');?>
						</td>
						<td></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>



		<?php }
		include 'includes/footer.php';

		?>