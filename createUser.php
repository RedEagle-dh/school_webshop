<?php

session_start();
error_reporting(-1);

ini_set('display_errors','On');

define('CONFIG_DIR', __DIR__.'/config');
require_once 'functions/db_funktionen.php';

$emailadress = "tesst";
$password = password_hash("test", PASSWORD_DEFAULT);


$sql = "INSERT INTO kunde SET 
email = '".$emailadress."', 
passwort = '".$password."'";

db_query($sql);