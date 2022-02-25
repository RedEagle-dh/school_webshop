<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

const CONFIG_DIR = __DIR__ . '/config';
require 'includes.php';


$userid = getCurrentUserId();
$products = getAllProducts();
$_SESSION['userid'] = $userid;
var_dump($_SESSION['userid']);
//setcookie('userid', $userid, strtotime('+30 days'));





$cartItemsCount = countCartItems($userid);


require __DIR__ . '/sites/home.php';
