<?php 
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';

$firstname = ((isset($_POST['firstname']))?sanitize($_POST['firstname']):'');
$firstname = trim($firstname);
$lastname = ((isset($_POST['lastname']))?sanitize($_POST['lastname']):'');
$lastname = trim($firstname);
$full_name = $firstname." ".$lastname;
$firstname = ((isset($_POST['firstname']))?sanitize($_POST['firstname']):'');
$email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
$email = trim($firstname);

$phonetype = ((isset($_POST['phonetype']))?sanitize($_POST['phonetype']):'');
$phonetype = trim($phonetype);
$phonenumber = ((isset($_POST['phonenumber']))?sanitize($_POST['phonenumber']):'');
$phonenumber = trim($phonenumber);
$password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
$password = trim($password);
$confirm_password = ((isset($_POST['confirm_password']))?sanitize($_POST['confirm_password']):'');
$confirm_password = trim($confirm_password);
$new_hashed = password_hash($password, PASSWORD_DEFAULT);
$errors = array();

?>

<?php 
if($_POST){
	
	//form validation
	if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email'])|| empty($_POST['password'])|| empty($_POST['confirm_password'])|| empty($_POST['phonetype'])|| empty($_POST['phonenumber'])){
		$errors[] = 'You must fill out all fields.';
	}



	//password id more than 6 characters
	if(strlen($password) < 6){
		$errors[] = 'Password must be at least 6 characters.';
	}


	if($password != $confirm_password ){
		$errors[] = 'Your password is not match ';
	}


	//check for errors
	if(!empty($errors)){
		echo display_errors($errors);
	}else{

		$db -> query("INSERT INTO users (full_name,email,password,phonetype,phonenumber)VALUES('{$full_name}','{$email}','{$new_hashed}','{$phonetype}','{$phonenumber}')");
		$_SESSION['success_flash'] = 'You are registed.';
		header('Location: index.php');
	}
}

?>

<div class="panel-body">
	<div class="form col-md-8">
		<form action=" register.php" method="POST" class="form-validate form-horizontal" id="register_form" >
			<div class="form-group ">
				<label for="firstname" class="control-label col-lg-2">First Name<span class="required">*</span></label>
				<div class="col-lg-10">
					<input class=" form-control" id="firstname" name="firstname" type="text" />
				</div>
			</div>

			<div class="form-group ">
				<label for="lastname" class="control-label col-lg-2">Last Name <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="lastname" name="lastname" type="text" />
				</div>
			</div>

			<div class="form-group ">
				<label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="email" name="email" type="text" />
				</div>
			</div>
			<div class="form-group ">
				<label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="password" name="password" type="password" />
				</div>
			</div>
			<div class="form-group ">
				<label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="confirm_password" name="confirm_password" type="password" />
				</div>
			</div>
			<div class="form-group ">
				<label for="email" class="control-label col-lg-2">Phone Type <span class="required">*</span></label>
				<div class="col-lg-10">
					<select name="phonetype" class="col-lg-4">
						<option value="">Select Phone Type...</option>
						<option value="M">Home</option>
						<option value="F">Office</option>
						<option value="F">Mobile</option>
					</select>
				</div>
			</div>
			<div class="form-group ">
				<label for="phonenumber" class="control-label col-lg-2">Phone Number <span class="required">*</span></label>
				<div class="col-lg-10">
					<input class="form-control " id="phonenumber" name="phonenumber" type="text" />
				</div>
			</div>


			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<a href="index.php" class="btn btn-default">Cancel</a>
					<input type="submit" value="Submit" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>

<!-- <script type="text/javascript" src="js/jquery.validate.min.js"></script> -->
<!-- <script type="text/javascript" src="js/form-validation-script.js"></script> -->