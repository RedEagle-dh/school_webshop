<?php

if(getCurrentUserStatus() != 'ADMIN') {
    header("Location: /Webshop/404");
    exit();
} else {

    require 'adminstuff/admindashboard.php';
    exit();
}