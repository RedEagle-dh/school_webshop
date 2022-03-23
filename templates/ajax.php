<?php
require '../config/dbconfig.php';
include '../functions/user.php';
include '../functions/product.php';
include '../functions/description.php';
include '../functions/cartFunctions.php';

function db_connect()
{

    $dbh = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die(db_fehler("connect"));

    return $dbh;
}

//Abfragefunktion mit Verbindungsaufbau
function db_query($sql)
{
    //if (TESTMODUS) {echo $sql;}
    $dbh = db_connect();
    $result = mysqli_query($dbh, $sql);

    db_close($dbh);
    return $result;
}

// Verbindungsabbau
function db_close($dbh)
{
    mysqli_close($dbh);
}






function getCategoryID($prodid)
{
    $sql = "SELECT katid FROM produkte WHERE produkte.artnr = $prodid;";
    $result = db_query($sql);
    $r = mysqli_fetch_column($result);
    return $r;
}


if (isset($_GET['productid'])) {
    $id = $_GET['productid'];
    $amount = $_GET['amount'];
    // TODO irgendwie die userid übergeben
    $userid = getCurrentUserId();


    if ($amount == 0) {
        $sql = "DELETE FROM cart WHERE productid = $id AND userid = 11;";
        db_query($sql);
        $sql = "SELECT sum(lieferkosten) FROM produkte, cart WHERE cart.productid = produkte.artnr AND userid = 11;";
        $result = db_query($sql);
        $preis = mysqli_fetch_column($result);
        if ($preis == 0) {
            $preis = 0;
        }
        echo "delete " . $preis;
    } else {
        $sql = "UPDATE cart SET amount = $amount WHERE productid = $id AND userid = 11;";
        db_query($sql);
    }

} else if (isset($_GET["check"]) & !isset($_GET["removeid"])) {
    checkBoxAdminPanel($_GET["check"]);

} else if (isset($_GET["removeid"])) {
    $prodid = $_GET["pid"];
    removeProductsById($_GET["removeid"], $prodid);
} else if (isset($_GET["addtocartid"])) {
    $productid = $_GET["addtocartid"];
    $userid = $_GET["userid"];
    if($_GET["loggedin"] == 0) {
        echo "redtologin";
    } else {
        if (getProduct($productid, $userid) == 0) {
            addProductToCart($productid, $userid);
            echo countCartItems($userid) . "*" . getProductNameForAlert($productid);
        } else {
            updateAmount($productid, +1, $userid);
            echo countCartItems($userid) . "*" . getProductNameForAlert($productid);
        }
    }

        
}






function checkBoxAdminPanel($anzahl)
{
    echo $anzahl;
}

function removeProductsById($id, $pids)
{
    
    // for schleife, zahlen aus id mit komma trennen und solange produkte aus datenbank entfernen
    
    $y = explode(',', $pids);
    
    for($i = 0; $i < count($y); $i++) {
        $sql = "DELETE FROM cart WHERE productid = '" . $y[$i] . "';";
        db_query($sql);
        $sql = "";
        switch (getCategoryID($y[$i])) {
            case "1":
                $sql = "DELETE FROM description_mainboards WHERE productid = '" . $y[$i] . "';";
                break;
            case "2":
                $sql = "DELETE FROM description_cpu WHERE productid = '" . $y[$i] . "';";
                break;
            case "3":
                $sql = "DELETE FROM description_laptops WHERE productid = '" . $y[$i] . "';";
                break;
            case "4":
                $sql = "DELETE FROM description_gpu WHERE productid = '" . $y[$i] . "';";
                break;
            case "5":
                $sql = "DELETE FROM description_gehäuse WHERE productid = '" . $y[$i] . "';";
                break;
        }
        db_query($sql);
        
        $sql = "DELETE FROM produkte WHERE artnr = '".$y[$i]."';";
        db_query($sql);
    }
    
    echo $id;
}