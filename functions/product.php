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
    $sql = "SELECT amount FROM cart WHERE userid = $userid AND productid = $productid;";
    $result = db_query($sql);
    $i = 0;
    $amount = 0;
    if (!$result) {
        return $i;
    } else {
       
        while ($row = mysqli_fetch_row($result)) {
            $amount = $row[0];
            $i++;
        }

        return $amount;
    }
}

function getProductFromBigID(int $productid)
{
    $userid = getCurrentUserId();
    $sql = "SELECT amount FROM cart WHERE userid = $userid AND id = $productid;";
    $result = db_query($sql);
    $i = 0;
    $amount = 0;
    if (!$result) {
        return $i;
    } else {
       
        while ($row = mysqli_fetch_row($result)) {
            $amount = $row[0];
            $i++;
        }

        return $amount;
    }
}


function searchProduct()
{
    $searchword = $_POST['searchproduct'];

    $sql = "SELECT artnr, titel, beschreibung, preis, picture FROM produkte WHERE titel LIKE '%" . $searchword . "%';";
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


function getCat()
{
    $sql = "SELECT artnr, titel, beschreibung, preis, picture, produkte.katid FROM produkte, kategorien WHERE produkte.katid = kategorien.katid AND kategorien.katid = '" . $_GET['cat'] . "'";
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