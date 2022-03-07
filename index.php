<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

const CONFIG_DIR = __DIR__ . '/config';
require 'includes.php';


$userid = getCurrentUserId();
$products = getAllProducts();
$produkteVonKategorie = getProductFromCategory();



$cartItemsCount = countCartItems($userid);


require __DIR__ . '/sites/home.php';
