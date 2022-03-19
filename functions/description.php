<?php

function getDescriptioncpuValue($productid)
{
    $sql = "SELECT * FROM description_cpu, produkte WHERE description_cpu.productid = produkte.artnr AND produkte.artnr = $productid;";
    $result = db_query($sql);
    $row = mysqli_fetch_array($result);
    
    return $row;
}

function getDescriptiongpuValue($productid)
{
    $sql = "SELECT * FROM description_gpu, produkte WHERE description_cpu.productid = produkte.artnr AND produkte.artnr = $productid;";
    $result = db_query($sql);
    $row = mysqli_fetch_array($result);
    
    return $row;
}

function getDescriptionmbValue($productid)
{
    $sql = "SELECT * FROM description_mb, produkte WHERE description_cpu.productid = produkte.artnr AND produkte.artnr = $productid;";
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
