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

if (strpos($route, '/registercheck') !== false) {

    $isPost = strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';
    $emailadress = "";
    $passwordFromForm = "";
    $fname = "";
    $lname = "";
    $city = "";
    $phone  = "";
    $zip  = "";
    $street  = "";
    $hnr  = "";
    $addinfo  = "";
    $title  = "";
    $country  = "";


    if ($isPost) {
        $emailadress = filter_input(INPUT_POST, 'emailadress');
        $passwordFromForm = filter_input(INPUT_POST, 'password');
        $password = password_hash($passwordFromForm, PASSWORD_DEFAULT);
        $fname = filter_input(INPUT_POST, 'fname');
        $lname = filter_input(INPUT_POST, 'lname');
        $city = filter_input(INPUT_POST, 'city');
        $phone = filter_input(INPUT_POST, 'phone');
        $zip = filter_input(INPUT_POST, 'zip');
        $street = filter_input(INPUT_POST, 'street');
        $hnr = filter_input(INPUT_POST, 'hnr');
        $addinfo = filter_input(INPUT_POST, 'addinfo');
        $title = filter_input(INPUT_POST, 'title');
        $country = filter_input(INPUT_POST, 'country');
        var_dump($_SESSION['userid']);
        $sql = "INSERT INTO kunde SET email = '" . $emailadress . "', passwort = '" . $password . "', titel = '" . $title . "', vorname = '" . $fname . "', nachname = '" . $lname . "', telefonnummer = '" . $phone . "', adresseid = 3, zahlungsid = 1, wunschlistenid = 1, rechnungsid = 1, kundenid = '".$_SESSION['userid']."';";
        db_query($sql);
        $sql = "INSERT INTO adressen SET strasse = '" . $street . "', hausnummer = '" . $hnr . "', plz = '" . $zip . "', ort = '" . $city . "', land = '" . $country . "', addinfo = '" . $addinfo . "', adresseid = '".$_SESSION['userid']."';";
        

        
        db_query($sql);

        
    }


    require 'templates/register.php';
    exit();
}

if(strpos($route, '/register') !== false) {
    $_SESSION['redirectTarget'] = 'Webshop/index.php/register';
    header("Location: /Webshop/index.php/registercheck");
    
    exit();
}