<?php 
print_r($_REQUEST);
require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';;
include 'includes/head.php';
$password = 'password';
$hashed = password_hash($password, PASSWORD_DEFAULT);
echo $hashed;

?>


<?php include 'includes/footer.php'; ?>