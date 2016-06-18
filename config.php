<?php 
define('BASEURL', $_SERVER['DOCUMENT_ROOT'].'/guf03/tutorial/');

define('CART_COOKIE', 'SBwi72UCklwiqzz2');
define('CART_COOKIE_EXPIRE', time()+(86400*30));
define('TAXRATE', 0.15); //SALES tax rate, set to 0, if you are arn't changing tax

define('CURRENCY', 'usd');
define('CHECKOUTMODE','TEST');//change test to live when you are ready to go LIVE 

if(CHECKOUTMODE == 'TEST'){
	define ('STRIPE_PRIVATE','sk_test_8uVeJoUWMfiWRTCUlZv2Ikp5');
	define ('STRIPE_PUBLIC','pk_test_ia7siLMbc9oCQmOyGI9YxLbJ');
}

if(CHECKOUTMODE == 'LIVE'){
	define ('STRIPE_PRIVATE','sk_live_Ymc9OWz9lEWhXwM4ROYjwbqs');
	define ('STRIPE_PUBLIC','pk_live_1GqYgWlkKFRh8j9FbJryVBL2');
}
?>