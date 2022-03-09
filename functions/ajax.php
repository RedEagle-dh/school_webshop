<?php

$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url, 'index.php');
$route = substr($url, $indexPHPPosition);
$route = str_replace('index.php', '', $route);



if(strpos($route, "/ajax.php?auswahl=3")) {
    $sql = "CREATE TABLE hah(id INT);";

    db_query($sql);
    echo "50";
}