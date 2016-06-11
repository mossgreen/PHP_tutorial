<?php 
require_once '../core/init.php';
if(!is_logged_in()){
	header('Location: login.php');
}

include 'includes/head.php';
include 'includes/navigation.php';
 // session_destroy();
$password = 'password';
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo $hashed;

?>
Administrator Home
<?php 
include 'includes/footer.php';
?>