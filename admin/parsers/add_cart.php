<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/tutorial/core/init.php';
$product_id = sanitize($_POST['product_id']);
$size = sanitize($_POST['size']);
$available = sanitize($_POST['available']);
$quantity = sanitize($_POST['quantity']);
$item = array();
$item[] = array(
	'id' 		=> $product_id,
	'size' 		=> $size,
	'quantity' 	=> $quantity,

	);

$domain = ($_SERVER['HTTP_HOST'] != 'localhost')?'.'.$_SERVER['HTTP_HOST']:false;
$query = $db -> query("SELECT * FROM products WHERE id = '{$product_id}'");
$product = mysqli_fetch_assoc($query);
$_SESSION['success_flash'] = $product['title'].' was added to your cart.';

//check to see if the cart cookie exists
if($cart_id != ''){



}else{
	//add the car to database and set cookie
	$items_json = json_encode($item);
	$cart_expire = date("Y-m-d H:i:s", strtotime("+30 days"));
	$db -> query("INSERT INTO cart (items, expire_date) VALUES ('{$items_json}','{$cart_expire}')");
	$cart_id = $db -> insert_id;
	setcookie(CART_COOKIE, $cart_id, CART_COOKIE_EXPIRE, '/', $domain, false);
}

?>