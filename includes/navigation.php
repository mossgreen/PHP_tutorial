<?php 
$sql = "SELECT * FROM categories WHERE  parent = 0";
$pquery = $db -> query($sql);


?>


<nav class="navbar navbar-default navbar-fixed-top">
	<div class="contianer">
		<a href="index.php" class="navbar-brand">moss's shop</a>
		<ul class="nav navbar-nav">

			<?php while($parent = mysqli_fetch_assoc($pquery)): ?>
				<?php $parent_id = $parent['id']; ?>



				<!-- menu items -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $parent['category']; ?><span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>
				

			<?php endwhile; ?>
		</ul>
	</div>
</nav>