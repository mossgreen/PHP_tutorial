<?php 
require_once '../../config.php';
require_once BASEURL.'core/init.php';

$name=sanitize($_POST['full_name']);
$email=sanitize($_POST['email']);
$street=sanitize($_POST['street']);
$street2=sanitize($_POST['street2']);
$city=sanitize($_POST['city']);
$state=sanitize($_POST['state']);
$zip_code=sanitize($_POST['zip_code']);
$country=sanitize($_POST['country']);
$errors = array();
$required = array(
		'full_name' => 'Full Name',
		'email'		=> 'Email',
		'street'	=> 'Street Adress',
		'city'		=> 'City',
		'state'		=> 'State',
		'zip_code'	=> 'Zip Code',
		'country'	=> 'Country',
	);

//check if all required fileds are filled out
foreach ($required as $filed => $display) {
	if(empty($_POST[$filed]) || $_POST[$filed] == ''){
		$errors[] = $display.' is required.';
	}
}
//check if valid email address
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$errors[] = 'Please enter a valid email.';
}

if(!empty($errors)){
	echo display_errors($errors);
}else{
	echo 'passed';
}

?>