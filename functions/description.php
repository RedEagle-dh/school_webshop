<?php

function getDescriptionValue($productid, $kat)
{
    $sql = "SELECT * FROM " . getDescriptionTableName(getCatNameFromID($kat)) . ", produkte WHERE " . getDescriptionTableName(getCatNameFromID($kat)) . ".productid = produkte.artnr AND produkte.artnr = $productid;";

    $result = db_query($sql);
    $row = mysqli_fetch_array($result);

    return $row;
    
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
    $sql = "SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE table_type = 'BASE TABLE' AND table_name LIKE '%$katname%';";
    $r = db_query($sql);
    return mysqli_fetch_column($r);
}

