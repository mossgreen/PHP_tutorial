<?php 
$sql = "SELECT * FROM categories WHERE  parent = 0";
$pquery = $db -> query($sql);
ob_start();
?>


<nav class="navbar navbar-default navbar-fixed-top" >
	<div class="contianer-fluid">
		<div class="navbar-header" >

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container">
				<span class="sr-only">Show the hide the navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">
				<img src="../tutorial/images/headerlogo/logo.jpg" id="mylogo">
			</a>
			
		</div>
		<div class="collapse navbar-collapse" id="navbar-container">
			<ul class="nav navbar-nav" >
				<?php while($parent = mysqli_fetch_assoc($pquery)): ?>
					<?php 
					$parent_id = $parent['id']; 
					$sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
					$cquery = $db -> query($sql2);
					?>

					<!-- menu items -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$parent['category']; ?><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<?php while($child = mysqli_fetch_assoc($cquery)): ?>
								<li><a href="category.php?cat=<?=$child['id'];?>"><?=$child['category']; ?></a></li>
							<?php endwhile; ?>
						</ul>
					</li>
				<?php endwhile; ?>
				
			</ul>

			<ul class="nav navbar-nav navbar-right" id="myBtn">

				<li>
					<a href="cart.php">
						<span class="glyphicon glyphicon-shopping-cart"></span> 
						My Cart
					</a>
				</li>
				<?php if(!isset($_SESSION['SBUser'])): ?>
					<li ><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

				<?php else: 
				$user_id = $_SESSION['SBUser'];
				?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Hello <?=$user_data['first'];?> ! 
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="userorders.php">User Orders</a></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul>
				</li>

			<?php endif; ?>
		</ul>
	</div>
</div>
</nav>
<?php ob_end_flush(); ?>