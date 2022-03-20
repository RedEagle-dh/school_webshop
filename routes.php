<?php
$userid = getCurrentUserId();
$url = $_SERVER['REQUEST_URI'];
$indexPHPPosition = strpos($url, 'index.php');
$route = substr($url, $indexPHPPosition);
$route = str_replace('index.php', '', $route);


if (!$route) {
    $products = getAllProducts();
    $cartItemsCount = countCartItems($userid);
    $soldoutprod = getSoldOutProducts();
    require __DIR__ . '/sites/home.php';
    exit();
}

if (strpos($route, '/cart/add/') !== false) {
    $productid = getProdcutIDThatWantsToBeAddedToCart($route);
    if(!isLoggedIn()) {
        header("Location: /Webshop/index.php/login");
        exit();
    }

    

    
        if (getProduct($productid) == 0) {
            addProductToCart($route, $userid);
        } else {
            updateAmount($productid, +1);
        }
    

    


    header("Location: /Webshop/index.php");
    exit();
}

if (strpos($route, '/cart') !== false) {

    $cartItems = getCartItemsForUser($userid);

    require 'sites/warenkorb.php';
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
    
    
    require 'sites/login.php';
    exit();
}



if (strpos($route, '/checkout') !== false) {

    if(getCartItemsForUser($userid) == null) {
        

        
    } else {
        $cartItems = getCartItemsForUser($userid);
        require 'sites/checkout.php';
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


    require 'sites/register.php';
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

    require 'sites/productsite.php';
    exit();
}

if (strpos($route, '/category') !== false) {
    require 'sites/category.php';
    exit();
}

if (strpos($route, '/throw') !== false) {
    $userid = getCurrentUserId();
    $productid = strval($_GET['id']);
    $sql = "SELECT sum(amount) FROM cart WHERE id = $productid;";
    $result = db_query($sql);
    $reg = "";
    while ($row = mysqli_fetch_row($result)) {
        $reg = $row[0];
    }
    if ($reg == 1) {
        $sql = "DELETE FROM webshop.cart WHERE id = $productid AND userid = $userid;";
        db_query($sql);
    } else {
        $anzahl = getProductFromBigID($productid) - 1;

        $sql = "UPDATE cart SET amount = $anzahl WHERE id = $productid AND userid = $userid;";
        db_query($sql);
    }

    header("Location: /Webshop/index.php/cart?");
    require 'sites/warenkorb.php';
    exit();
}

if (strpos($route, '/search') !== false) {
    
   
    require 'sites/searchsite.php';
    exit();


} 


if (strpos($route, '/admin') !== false) {
    
   
    require 'templates/adminpanel.php';
    exit();


} 

if (strpos($route, '/settings') !== false) {
    $cartItems = getCartItemsForUser();
    if (isset($_GET['update'])) {
        $message = "Updated Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else if (isset($_GET['dl'])) {
        $rnummer = $_GET['dl'];
        $sql = "SELECT max(id) FROM rechnungen WHERE rechnummer = '" . $rnummer . "';";
        $result = db_query($sql);
        $c = mysqli_fetch_row($result);
        getInvoice($c[0]);
    }
    require 'sites/settings.php';
    exit();


}
if (strpos($route, '/bought') !== false) {
    require("fpdf/fpdf.php");
    $invoicedate = date("d-m-Y");
    $rfname = filter_input(INPUT_POST, 'rfname');
    $rlname = filter_input(INPUT_POST, 'rlname');
    $rstreet = filter_input(INPUT_POST, 'rstreet');
    $rno = filter_input(INPUT_POST, 'rno');
    $raddress2 = filter_input(INPUT_POST, 'raddress2');
    $rcountry = filter_input(INPUT_POST, 'rcountry');
    $rstate = filter_input(INPUT_POST, 'rstate');
    $rzip = filter_input(INPUT_POST, 'rzip');
    
    $cartItems = getCartItemsForUser();
    $cartP = 0;
    $contentpdf = include 'functions/erstelleRechnung.php';

    if (isset($_GET['download'])) {
        $sql = "SELECT max(id) FROM rechnungen WHERE userid = '" . $userid . "';";
        $result = db_query($sql);
        $c = mysqli_fetch_row($result);
        getInvoice($c[0]);
    } else if (isset($_GET['create'])) {
        $data = getUserData(getEmailAdress());
        $year = date('Y');
        $month = date('m');
        $day = date('d');
        $sql = "SELECT max(rechnummer) FROM rechnungen WHERE userid = '" . $userid . "';";
        $result = db_query($sql);
        $c = mysqli_fetch_row($result);
        if ($c[0] == 0) {
            $c = 1;
            $rechname = $data[3] . "_" . $data[2] . "_" . $year . "_" . $month . "_" . $day . "_" . $c;
            $sql = "INSERT INTO rechnungen SET userid = $userid, pdf = '" . addslashes($contentpdf) . "', rechname = '" . $rechname . "', rechdatum = '" . $year . "." . $month . "." . $day . "', rechnummer = '" . $c . "';";
            db_query($sql);
        } else {
            $c[0]++;
            $rechname = $data[3] . "_" . $data[2] . "_" . $year . "_" . $month . "_" . $day . "_" . $c[0];
            $sql = "INSERT INTO rechnungen SET userid = $userid, pdf = '" . addslashes($contentpdf) . "', rechname = '" . $rechname . "', rechdatum = '" . $year . "." . $month . "." . $day . "', rechnummer = '" . $c[0] . "';";
            db_query($sql);
        }

        
        
        //$sql = "UPDATE produkte SET auflager = '49' WHERE (`artnr` = '1');";
        foreach ($cartItems as $cartItem) {
            $sql = "SELECT auflager FROM produkte WHERE artnr = '".$cartItem[0]."';";
            $result = db_query($sql);
            $r = (int) mysqli_fetch_column($result);
            
            
            $r = $r - $cartItem[6];
            
            $sql = "UPDATE produkte SET auflager = '".$r."' WHERE (artnr = '".$cartItem[0]."');";
            db_query($sql);
            $cartP = (double) getCartPrice();
            $sql = "DELETE FROM cart WHERE userid = $userid AND productid = $cartItem[0];";
            db_query($sql);
        }

        
        
        
    }
    $month = getActualMonth();
    $endprice = $cartP + (double) getMonthlyEarnings(getActualMonth());
    $sql = "UPDATE analytics SET $month = $endprice WHERE analyticid = 1";
    db_query($sql);
    


    require('sites/finishbuy.php');
    exit();
}



if (strpos($route, '/updateprofile') !== false) {

    $isPost = strtoupper($_SERVER['REQUEST_METHOD']) === 'POST';



    if ($isPost) {
        $emailadress = "";
        $password1 = "";
        $password2 = "";
        $vname = "";
        $nname = "";
        $stadt = "";
        $handy  = "";
        $plz = "";
        $strasse  = "";
        $hausnr  = "";
        $zusatzinf  = "";
        $land  = "";

        $emailadress = filter_input(INPUT_POST, 'emailadress');
        $vname = filter_input(INPUT_POST, 'fname');
        $nname = filter_input(INPUT_POST, 'lname');
        $stadt = filter_input(INPUT_POST, 'city');
        $handy = filter_input(INPUT_POST, 'handynummer');
        $plz = filter_input(INPUT_POST, 'zip');
        $strasse = filter_input(INPUT_POST, 'street');
        $hausnr = filter_input(INPUT_POST, 'hnr');
        $zusatzinf = filter_input(INPUT_POST, 'addinfo');
        $land = filter_input(INPUT_POST, 'country');


        
        

        // update pw
        $secondnewpw = filter_input(INPUT_POST, 'secondnewpw');
        $firstnewpw = filter_input(INPUT_POST, 'firstnewpw');
        $actualpw = filter_input(INPUT_POST, 'actualpw');

        if ($secondnewpw == null && $firstnewpw == null && $actualpw == null) {
            $sql = "UPDATE adressen, kunde SET strasse = '" . $strasse . "', hausnummer = '" . $hausnr . "', plz = '" . $plz . "', ort = '" . $stadt . "', land = '" . $land . "', addinfo = '" . $zusatzinf . "', vorname = '" . $vname . "', nachname = '" . $nname . "', email = '" . $emailadress . "', telefonnummer = '" . $handy . "' WHERE adressen.adresseid = kunde.adresseid AND kunde.kundenid = '" . $userid . "';";
            db_query($sql);
            header("Location: Webshop/index.php/settings?update=1");

        exit();
        } else {
            $errors = [];

            $userData = getUserData(getEmail());
            

            if ($actualpw && isset($userData[1]) && false === password_verify($actualpw, $userData[1])) {
                $errors[] = "Passwort stimmt nicht";
            }
            if ($firstnewpw != $secondnewpw) {
                $errors[] = "Passwörter stimmen nicht überein!";
            }
            if (0 === count($errors)) {
                $password = password_hash($secondnewpw, PASSWORD_DEFAULT);
                
                $sql = "UPDATE adressen, kunde SET strasse = '" . $strasse . "', hausnummer = '" . $hausnr . "', plz = '" . $plz . "', ort = '" . $stadt . "', land = '" . $land . "', addinfo = '" . $zusatzinf . "', vorname = '" . $vname . "', nachname = '" . $nname . "', email = '" . $emailadress . "', passwort = '".$password."', telefonnummer = '" . $handy . "' WHERE adressen.adresseid = kunde.adresseid AND kunde.kundenid = '" . $userid . "';";
                db_query($sql);
                header("Location: Webshop/index.php/settings?update=2");

            exit();
            }
        }
        
        
        
        
        
        
    }


    require 'sites/register.php';
    exit();
}



if (strpos($route, '/tos') !== false) {
    require('sites/tos.php');
    exit();


}

if (strpos($route, '/impressum') !== false) {
    require('sites/impressum.php');
    exit();


}