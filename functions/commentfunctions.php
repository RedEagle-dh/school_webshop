<?php

function getCommentsForProduct($productid) {
    
    $sql = "SELECT message, rating, vorname, nachname, datum FROM kundenbewertungen, kunde WHERE kundenbewertungen.kundenid = kunde.kundenid AND productid = $productid";
    $result = db_query($sql);
    $out = [];
    if (!$result) {
        return [];
    }
    while($row = mysqli_fetch_row($result)) {
        $out[] = $row;
    }
    return $out;
}