<?php
session_start();
error_reporting(-1);
ini_set('display_errors', 'On');

define('CONFIG_DIR', __DIR__.'/config');
require_once __DIR__.'/functions/db_funktionen.php';

$userid = random_int(0, time());
$cartItems = 0;

if (isset($_COOKIE['userid'])) {
  $userid = (int) $_COOKIE['userid'];
}

if (isset($_SESSION['userid'])) {
  $userid = (int) $_SESSION['userid'];
}

setcookie('userid', $userid, strtotime('+30 days'));

$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url, 'index.php');
$route = substr($url, $indexPHPPosition);
$route = str_replace('index.php', '', $route);

if (strpos($route,'/cart/add/') !== false) {
  $routeParts = explode('/', $route);
  $productId = (int) $routeParts[3];
  $sql = "INSERT INTO cart SET userid = $userid, productid = $productId, amount = 1, created = time(now())";
  $result = db_query($sql);


  header("Location: /Webshop/index.php");
  exit();
}

$sql = "SELECT artnr, titel, beschreibung, preis FROM produkte";
$result = db_query($sql);

$sql = "SELECT COUNT(id) FROM cart WHERE userid =".$userid;
$cartResult = db_query($sql);

$cartItems = mysqli_fetch_column($cartResult);




require __DIR__.'/sites/home.php';
