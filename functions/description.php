<?php

function getDescriptionValue($productid, $kat)
{
    $sql = "SELECT * FROM " . getDescriptionTableName(getCatNameFromID($kat)) . ", produkte WHERE " . getDescriptionTableName(getCatNameFromID($kat)) . ".productid = produkte.artnr AND produkte.artnr = $productid;";
    try {
        $result = db_query($sql);
    
        $row = mysqli_fetch_array($result);
    
        return $row;
    } catch (Exception $e) {
        return null;
    }
    
    
}


function getDescriptionName($kat)
{
    // CPU
    $sql = "SHOW FIELDS FROM " . getDescriptionTableName(getCatNameFromID($kat));
    $result = db_query($sql);
    $desc = [];

        while ($row = mysqli_fetch_row($result)) {
            $desc[] = $row;
    }
    return $desc;
}



function getDescriptionTableName($katname)
{
    $sql = "SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE table_type = 'BASE TABLE' AND table_name LIKE 'description_$katname';";
    $r = db_query($sql);
    return mysqli_fetch_column($r);
}

function getCatNameFromID($katid) {
    $sql = "SELECT katname FROM kategorien WHERE katid = $katid;";
    $r = db_query($sql);
    
    if(!$r) {
        return [];
    }
    
    return mysqli_fetch_column($r);
}