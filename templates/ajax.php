<?php
require '../config/dbconfig.php';
include '../functions/user.php';
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



function getCartPrice()
{
    $userid = getCurrentUserId();
    $sql = "SELECT sum(produkte.preis*cart.amount) as gesamtpreis FROM cart, produkte WHERE productid = artnr AND userid = $userid;";
    $result = db_query($sql);

    while ($row = mysqli_fetch_row($result)) {
        $sum = $row[0];
    }
    if ($sum == 0) {
        return "0";
    } else {
        $erg = number_format($sum, 2);
        return $erg;
    }
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
    removeProductsById($_GET["removeid"], $_GET["pid"]);
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
        $sql = "DELETE FROM produkte WHERE artnr = '".$y[$i]."';";
        db_query($sql);
    }
    
    echo $id;
}