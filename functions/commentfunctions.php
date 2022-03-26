<?php

function getCommentsForProduct($productid) {
    
    $sql = "SELECT message, rating, vorname, nachname, datum, kunde.kundenid, kundenbewertungen.id FROM kundenbewertungen, kunde WHERE kundenbewertungen.kundenid = kunde.kundenid AND productid = $productid";
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

function getCommentFromNotification($commentid) {
    
    $sql = "SELECT message, rating, vorname, nachname, datum, kunde.kundenid, kundenbewertungen.id FROM kundenbewertungen, kunde WHERE kundenbewertungen.kundenid = kunde.kundenid AND id = $commentid";
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

function getVerification($userid, $productid) {
    $sql = "SELECT id FROM verkäufe WHERE productid = $productid AND kundenid = $userid;";
    $result = db_query($sql);
    if(empty(mysqli_fetch_column($result))) {
        return false;
    } else {
        return true;
    }
}

function getRating($messageid) {
    $sql = "SELECT rating FROM kundenbewertungen WHERE id = $messageid;";
    $result = db_query($sql);
    return mysqli_fetch_column($result);
}

function getNotifications() {
    $sql = "SELECT count(gelesen) FROM kundenbewertungen WHERE gelesen = 0;";
    $result = db_query($sql);
    $res = mysqli_fetch_column($result);
    if ($res <= 9 && $res > 0) {
        return $res;
    } else if ($res == 0) {
        return 0;
    } else {
        return "9+";
    }
}

function getNotReadMessages() {
    $sql = "SELECT vorname, nachname, productid, datum, id FROM kundenbewertungen, kunde WHERE kunde.kundenid = kundenbewertungen.kundenid AND gelesen = 0";
    $result = db_query($sql);
    $res = [];
    if (!$result) {
        return [];
    }
    while($row = mysqli_fetch_row($result)) {
        $res[] = $row;
    }
    return $res;
}