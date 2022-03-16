<?php

function getDescriptionValue($productid)
{
    $sql = "SELECT * FROM description_cpu, produkte WHERE description_cpu.productid = produkte.artnr AND produkte.artnr = $productid;";
    $result = db_query($sql);
    $row = mysqli_fetch_array($result);
    
    return $row;
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
