<?php

function getDescriptionValue($productid)
{
    $sql = "SELECT * FROM description_cpu WHERE id = $productid;";
    $result = db_query($sql);
    $descval = [];
    $arr = array();
    $i = 0;
    while ($row = mysqli_fetch_row($result)) {
             
        $descval[] = $row[1];
    }
    
    return $descval;
}

function getDescriptionName()
{
    $sql = "SHOW FIELDS FROM description_cpu";
    $result = db_query($sql);
    $desc = [];
    
    while ($row = mysqli_fetch_row($result)) {
        $desc[] = $row;
    }

    

    return $desc;
}


function getArrayKeyValue() {
    $arr = array();
    $arr["id"] = 1;
    $arr["prozessorserie"] = getDescriptionValue("1");

    return $arr;
}