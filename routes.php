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

        if ($password && isset($userData[1]) && false === password_verify($password, $userData[1])) {
            $errors[] = "Passwort stimmt nicht";
        }
        if (0 === count($errors)) {
            if (isset($_SESSION['userid'])) {
                unset($_SESSION['userid']);
            }


            $_SESSION['userid'] = (int)$userData[0];

            
            
            header("Location: /Webshop/#");
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
        $cartItems = getCartItemsForUser($userid);
        require 'templates/checkout.php';
        exit();
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
        
        
        $sqlreadadressid = "SELECT adresseid FROM kunde ORDER BY adresseid ASC";
        $result = db_query($sqlreadadressid);
        $id = "";
        while ($row = mysqli_fetch_row($result)) {
            $id = $row[0];
        }

        $newadressid = $id[0] + 1;
        
        if (isset($_SESSION['userid'])) {
            echo $_SESSION['userid'];
        }
        $sql = "INSERT INTO kunde SET email = '" . $emailadress . "', passwort = '" . $password . "', titel = '" . $title . "', vorname = '" . $fname . "', nachname = '" . $lname . "', telefonnummer = '" . $phone . "', adresseid = '" . $newadressid . "', zahlungsid = 1, wunschlistenid = 1, rechnungsid = 1;";
        db_query($sql);
        $sql = "INSERT INTO adressen SET strasse = '" . $street . "', hausnummer = '" . $hnr . "', plz = '" . $zip . "', ort = '" . $city . "', land = '" . $country . "', addinfo = '" . $addinfo . "', adresseid = '" . $newadressid . "';";
        db_query($sql);
        $_SESSION['redirectTarget'] = 'Webshop/#';
        header("Location: Webshop/index.php/login");
        exit();

        
    }


    require 'templates/register.php';
    exit();
}

if(strpos($route, '/register') !== false) {
    $_SESSION['redirectTarget'] = 'Webshop/index.php/register';
    header("Location: /Webshop/index.php/registercheck");
    
    exit();
}


if (strpos($route, '/signout') !== false) {
    session_destroy();
    

    if (isset($_SESSION['userid'])) {
        unset($_SESSION['userid']);
    }
    
    header("Location: /Webshop/#");
    
    exit();
}


if (strpos($route, '/productsite') !== false) {

    require 'templates/productsite.php';
    exit();
}

if (strpos($route, '/category') !== false) {
    require 'templates/category.php';
    exit();
}

if (strpos($route, '/throw') !== false) {
    $sql = "DELETE FROM webshop.cart WHERE id = '" . $_GET['id'] . "';";
    db_query($sql);

    header("Location: /Webshop/index.php/cart?");
    require 'templates/warenkorb.php';
    exit();
}

if (strpos($route, '/search') !== false) {
    
   
    require 'templates/searchsite.php';
    exit();


} 


if (strpos($route, '/admin') !== false) {
    
   
    require 'templates/adminpanel.php';
    exit();


} 

if (strpos($route, '/settings') !== false) {
    
   
    require 'templates/settings.php';
    exit();


} 


