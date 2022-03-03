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

function getProductFromCategory()
{

    $sql = "SELECT * FROM produkte, kategorien WHERE produkte.katid = kategorien.katid";
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

function getProduct(int $productid)
{
    $userid = getCurrentUserId();
    $sql = "SELECT * FROM cart WHERE userid = $userid AND productid = $productid;";
    $result = db_query($sql);
    $i = 0;
    if (!$result) {
        return $i;
    } else {
       
        while (mysqli_fetch_row($result)) {
            
            $i++;
        }

        return $i;
    }
}