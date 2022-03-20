<?php

function getDescriptionValue($productid, $kat)
{
    if ($kat == 1) {
        $sql = "SELECT * FROM description_mb, produkte WHERE description_mb.productid = produkte.artnr AND produkte.artnr = $productid;";
        $result = db_query($sql);
        $row = mysqli_fetch_array($result);

        return $row;
    } else if ($kat == 2) {
        $sql = "SELECT * FROM description_cpu, produkte WHERE description_cpu.productid = produkte.artnr AND produkte.artnr = $productid;";
        $result = db_query($sql);
        $row = mysqli_fetch_array($result);

        return $row;
    } else if ($kat == 4) {
        $sql = "SELECT * FROM description_gpu, produkte WHERE description_gpu.productid = produkte.artnr AND produkte.artnr = $productid;";
        $result = db_query($sql);
        $row = mysqli_fetch_array($result);

        return $row;
    } else if ($kat == 5) {
        $sql = "SELECT * FROM description_ge, produkte WHERE description_ge.productid = produkte.artnr AND produkte.artnr = $productid;";
        $result = db_query($sql);
        $row = mysqli_fetch_array($result);

        return $row;
    } else if ($kat == 3) {
        $sql = "SELECT * FROM description_lap, produkte WHERE description_lap.productid = produkte.artnr AND produkte.artnr = $productid;";
        $result = db_query($sql);
        $row = mysqli_fetch_array($result);

        return $row;
    }
    
}


function getDescriptionName($kat)
{
    // CPU
    if ($kat == 2) {
        $sql = "SHOW FIELDS FROM description_cpu";
        $result = db_query($sql);
        $desc = [];

        while ($row = mysqli_fetch_row($result)) {
            $desc[] = $row;
        }



        return $desc;
    } else if ($kat == 4) {
        $sql = "SHOW FIELDS FROM description_gpu";
        $result = db_query($sql);
        $desc = [];

        while ($row = mysqli_fetch_row($result)) {
            $desc[] = $row;
        }



        return $desc;
    } else if ($kat == 1) {
        $sql = "SHOW FIELDS FROM description_mb";
        $result = db_query($sql);
        $desc = [];

        while ($row = mysqli_fetch_row($result)) {
            $desc[] = $row;
        }



        return $desc;
    } else if ($kat == 5) {
        $sql = "SHOW FIELDS FROM description_ge";
        $result = db_query($sql);
        $desc = [];

        while ($row = mysqli_fetch_row($result)) {
            $desc[] = $row;
        }



        return $desc;
    }else if ($kat == 3) {
        $sql = "SHOW FIELDS FROM description_lap";
        $result = db_query($sql);
        $desc = [];

        while ($row = mysqli_fetch_row($result)) {
            $desc[] = $row;
        }



        return $desc;
    }
    
}
