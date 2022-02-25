<?php

function getCurrentUserId()
{
    $userid = random_int(0, time());

    if (isset($_SESSION['userid'])) {
        $userid = (int)$_SESSION['userid'];

    } else {
        $_SESSION['userid'] = random_int(0, time());
    }

    if (isset($_COOKIE['userid'])) {
        $userid = (int)$_COOKIE['userid'];

    }

    

    return $userid;
}

function getCurrentUserName(int $userid) {
    
}

function isLoggedIn():bool {
    return isset($_COOKIE['userid']);
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

function getUserStatus(string $username) {
    $sql = "SELECT status FROM kunde WHERE email = '".$username."'";
    $result = db_query($sql);
    $enum = "";
    while ($row = mysqli_fetch_row($result)) {
        $enum = $row[0];
    }
    return $enum;
}