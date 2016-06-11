<?php 
function display_errors($errors){
	$display = '<ul class="bg-danger">';
	foreach ($errors as $error) {
		$display .= '<li class="text-danger">'.$error.'</li>';
	}

	$display .= '</ul>';
	return $display;
}

function sanitize($dirty){
	return htmlentities($dirty, ENT_QUOTES, "UTF-8");
}

function money($number){
	return '$'.number_format($number, 2);
}

function login($user_id){
	$_SESSION['SBUser'] = $user_id;
	global $db;
	$date = date("Y-m-d H:i:s");
	$db -> query("UPDATE users SET last_login = '$date' WHERE id = '$user_id'");
	$_SESSION['success_flash'] = 'You are now logged in.';
	header('Location: index.php');
}

session_destroy();
?>