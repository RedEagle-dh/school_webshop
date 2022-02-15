<?php

function getAllProducts() {

    $sql = "SELECT artnr, titel, beschreibung, preis, picture FROM produkte";
    $result = db_query($sql);

    if (!$result) {
        return [];
    }
    $products = [];
    while ($row = mysqli_fetch_row($result)) {
        $products[] = $row;
    }

    return $products;


}