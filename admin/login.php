<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';;
include 'includes/head.php';

$email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
$email = trim($email);
$password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
$password = trim($password);
$errors = array();
?>
<style>
	body{
		background-image: url("/tutorial/images/headerlogo/background.png");
		background-size: 100vw 100vh;
	}
</style>
<div id="login-form">
	<div>
		<?php 
		if($_POST){
				//form validation
			if(empty($_POST['email']) || empty($_POST['password'])){
				$errors[] = 'You mush provide email and password.';
			}

				//validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors[] = 'You must into a valid Email.';
			}

				//password id more than 6 characters
			if(strlen($password) < 5){
				$errors[] = 'Password must be at least 6 characters.';
			}

				//check if email exists in the database
			$query = $db -> query("SELECT * FROM users WHERE email = '$email'");
			$user = mysqli_fetch_assoc($query);
			$userCount = mysqli_num_rows($query);echo $userCount;
			if($userCount < 1){
				$errors[] = 'That email doesn\'t exist in our database';
			}


				//check for errors
			if(!empty($errors)){
				echo display_errors($errors);
			}else{
					//log user in
			}
		}

		?>

	</div>
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