<?php

function getCurrentUserId()
{
    $userid = random_int(0, time());

    if (isset($_SESSION['userid'])) {
        $userid = (int)$_SESSION['userid'];

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

function getCurrentUserStatus() {
    $userID = getCurrentUserId();
    $sql = "SELECT status FROM kunde WHERE kundenid = '".$userID."'";
    $result = db_query($sql);
    $enum = "";
    while ($row = mysqli_fetch_row($result)) {
        $enum = $row[0];
    }
    return $enum;
}