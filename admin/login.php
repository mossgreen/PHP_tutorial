<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';;
include 'includes/head.php';

?>
<style>
body{
	background-image: url("/tutorial/images/headerlogo/background.png");
	background-size: 100vw 100vh;
}
</style>
<div id="login-form">
	<div></div>
	<h2 class="text-center">Login</h2><hr>
	<form action="login.php" method="POST">
		<div class="form-group">
			<label for="email">Email: </label>
			<input type="email" name="email" id="email" class="form-control" value="<?=$email;?>">
		</div>
		<div class="form-group">
			<label for="password">Password: </label>
			<input type="password" name="password" id="password" class="form-control" value="<?=$password;?>">
		</div>
		<div class="form-group">
			<input type="submit" value="Login" class="btn btn-primary">
		</div>

	</form>
	<p class="text-right"><a href="/tutorial/index.php" alt="home">Visite Site</a></p>
</div>


<?php include 'includes/footer.php'; ?>