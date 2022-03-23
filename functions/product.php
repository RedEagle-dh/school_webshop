<?php

function getAllProducts() {

    $sql = "SELECT artnr, titel, beschreibung, preis, picture, auflager, datum FROM produkte";
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
function getProductNameForAlert($prodid) {

    $sql = "SELECT titel FROM produkte WHERE artnr = $prodid";
    $result = db_query($sql);


    return mysqli_fetch_column($result);


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

function getProduct(int $productid, $userid)
{
    
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

    $sql = "SELECT artnr, titel, beschreibung, preis, picture, auflager FROM produkte WHERE titel LIKE '%" . $searchword . "%';";
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
    $sql = "SELECT artnr, titel, beschreibung, preis, picture, auflager FROM produkte, kategorien WHERE produkte.katid = kategorien.katid AND kategorien.katid = '" . $_GET['cat'] . "' AND auflager > 0";
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

function getCatCount() {
    $sql = "SELECT count(katid) FROM kategorien;";
    $result = db_query($sql);
    return mysqli_fetch_column($result);

}



function getSoldOutProducts() {
    $sql = "SELECT artnr, titel, beschreibung, preis, picture, auflager FROM produkte WHERE auflager = 0";
    $result = db_query($sql);

    if (!$result) {
        return [];
    }
    $soutt = mysqli_fetch_array($result);

    return $soutt;
}

function getProductCount() {
    $sql = "SELECT count(artnr) FROM produkte";
    $result = db_query($sql);
    $r = mysqli_fetch_column($result);

    return $r;
}

function getProductCountSoldOut() {
    $sql = "SELECT count(artnr) FROM produkte WHERE auflager = 0";
    $result = db_query($sql);
    $r = mysqli_fetch_column($result);

    return $r;
}

function getProductPercentegeOfCat($prodid) {
    $sql = "SELECT count(artnr) FROM produkte WHERE katid = $prodid;";
    $result = db_query($sql);
    $r = mysqli_fetch_column($result);
    return $r;
}


function getNewProductID() {
    $sql = "SELECT artnr FROM produkte ORDER BY artnr DESC limit 0,1";
    $r = db_query($sql);
    
    $ret = 1;
    if($r) {
        $ret = (int) mysqli_fetch_column($r) + 1;
    }

    return $ret;
}

function getCatIdAndName() {
    $sql = "SELECT katid, katname FROM kategorien";
    $r = db_query($sql);
    
    if(!$r) {
        return [];
    }
    $res = [];
    while ($row = mysqli_fetch_row($r)) {
        $res[] = $row;
    }
    return $res;
}

function getCatNameFromID($katid) {
    $sql = "SELECT katname FROM kategorien WHERE katid = $katid;";
    $r = db_query($sql);
    
    if(!$r) {
        return [];
    }
    
    return mysqli_fetch_column($r);
}

function getCatNameFromProdId($prodid) {
    $sql = "SELECT katname FROM produkte, kategorien WHERE produkte.katid = kategorien.katid AND produkte.artnr = $prodid;";
    $r = db_query($sql);
    
    if(!$r) {
        return [];
    }
    
    return mysqli_fetch_column($r);
}