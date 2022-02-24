<?php
$userid = getCurrentUserId();
$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url, 'index.php');
$route = substr($url, $indexPHPPosition);
$route = str_replace('index.php', '', $route);


if (!$route) {
    $products = getAllProducts();
    $cartItemsCount = countCartItems($userid);
    require __DIR__ . '/sites/home.php';
    exit();
}

if (strpos($route, '/cart/add/') !== false) {
    if(!isLoggedIn()) {
        header("Location: /Webshop/index.php/login");
        exit();
    }
    addProductToCart($route, $userid);

    header("Location: /Webshop/index.php");
    exit();
}

if (strpos($route, '/cart') !== false) {

    $cartItems = getCartItemsForUser($userid);

    require 'templates/warenkorb.php';
    exit();


}

// Login überprüfung
if (strpos($route, '/login') !== false) {

    $isPost = strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
    $emailadress = "";
    $password = "";
    $errors = [];
    $hasError = false;

    if ($isPost) {

        $emailadress = filter_input(INPUT_POST, 'emailadress');
        $password = filter_input(INPUT_POST, 'password');


        if (false === (bool) $emailadress) {
            $errors[] = "Das Feld der Email Adresse ist leer";
        }
        if (false === (bool) $password) {
            $errors[] = "Das Feld des Passwortes ist leer";
        }

        $userData = getUserData($emailadress);
        if (0 === count($userData)) {
            $errors[] = "Email existiert nicht";
        }

        if ($password && isset($userData['passwort']) && false === password_verify($password, $userData['passwort'])) {
            $errors[] = "Passwort stimmt nicht";
        }
        if (0 === count($errors)) {
            $_SESSION['userid'] = (int)$userData[0];
            bindCartItemsToUser($_COOKIE['userid'], (int) $userData[0]);
            setcookie('userid', (int) $userData[0]);
            $redirectTarget = 'Webshop/index.php';
            if (isset($_SESSION['redirectTarget'])) {
                $redirectTarget = $_SESSION['redirectTarget'];
            }
            header("Location: ".$redirectTarget);
            exit();
        }
    }
    $hasError = count($errors) > 0;
    var_dump($errors);
    require 'templates/login.php';
    exit();
}



if (strpos($route, '/checkout') !== false) {

    if(!isLoggedIn()) {
        $_SESSION['redirectTarget'] = 'Webshop/index.php/checkout';
        header("Location: /Webshop/index.php/login");
        exit();
    } else {
        echo "eingeloggt";
    }

    exit();
}


if(strpos($route, '/register') !== false) {
    //header("Location: /Webshop/index.php/register");
    require 'templates/register.php';
    exit();
}