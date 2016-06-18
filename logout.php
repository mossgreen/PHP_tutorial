<?php 
require_once 'config.php';
require_once BASEURL.'core/init.php';
unset($_SESSION['SBUser']);
header('Location: login.php');
?>