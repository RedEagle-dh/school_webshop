<?php

function getCurrentUserId()
{
    $userid = random_int(0, time());

    if (isset($_SESSION['userid'])) {
        $userid = (int)$_SESSION['userid'];

    }

    if (isset($_COOKIE['userid'])) {
        $userid = (int)$_COOKIE['userid'];

    }

    return $userid;
}

function isLoggedIn():bool {
    return isset($_SESSION['userid']);


}

function getUserData(string $username):array {
    $sql = "SELECT kundenid, passwort FROM kunde WHERE email = '".$username."'";
    $stmt = db_query($sql);
    if (false === $stmt) {
        return [];
    }
    if (0 === $stmt->num_rows) {
        return [];
    }
    $row = $stmt->fetch_row();
    return $row;

}