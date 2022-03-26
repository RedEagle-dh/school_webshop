<?php
function getAllCategories() {

    $sql = "SELECT katid, katname FROM kategorien";
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



function getCatNameFromProdId($prodid) {
    $sql = "SELECT katname FROM produkte, kategorien WHERE produkte.katid = kategorien.katid AND produkte.artnr = $prodid;";
    $r = db_query($sql);
    
    if(!$r) {
        return [];
    }
    
    return mysqli_fetch_column($r);
}