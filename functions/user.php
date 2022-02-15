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