

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="contianer">
		<div class="navbar-header" >

			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-container">
				<span class="sr-only">Show the hide the navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index.php">
				<img src="../../tutorial/images/headerlogo/logo.jpg" id="mylogo">
			</a>
			
		</div>		<ul class="nav navbar-nav">

		<li>
			<a href="index.php">My Dashboard</a>
		</li>
		<li>
			<a href="brands.php">Brands</a>
		</li>
		<li>
			<a href="categories.php">Categories</a>
		</li>
		<li>
			<a href="products.php">Products</a>
		</li>
		<li>
			<a href="archived.php">Archived</a>
		</li>
		<?php if(has_permission('admin')): ?>
			<li>
				<a href="users.php">Users</a>
			</li>
		<?php endif; ?>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				Hello <?=$user_data['first'];?> ! 
				<span class="caret"></span>
			</a>
			<ul class="dropdown-menu" role="menu">
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Log Out</a></li>
			</ul>
		</li>

	</ul>
</div>
</nav>

