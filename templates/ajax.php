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


function getCatNameFromProdId($prodid) {
    $sql = "SELECT katname FROM produkte, kategorien WHERE produkte.katid = kategorien.katid AND produkte.artnr = $prodid;";
    $r = db_query($sql);
    
    if(!$r) {
        return [];
    }
    
    return mysqli_fetch_column($r);
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
    $userid = $_GET["user"];

    if ($amount == 0) {


        $sql = "DELETE FROM cart WHERE productid = $id AND userid = $userid;";
        db_query($sql);
        $sql = "SELECT sum(lieferkosten) FROM produkte, cart WHERE cart.productid = produkte.artnr AND userid = $userid;";
        $result = db_query($sql);
        $preis = mysqli_fetch_column($result);
        if ($preis == 0) {
            $preis = 0;
        }
        echo "delete " . $preis;
        
        
    } else {
        if (getAufLager($id) < $amount) {
            echo "nomoreauflager";
        } else {
            $sql = "UPDATE cart SET amount = $amount WHERE productid = $id AND userid = $userid;";
            db_query($sql);
        }
    }
    

} else if (isset($_GET["check"]) & !isset($_GET["removeid"])) {
    
    checkBoxAdminPanel($_GET["check"]);


    // ADMINPANEL REMOVE
} else if (isset($_GET["removeid"])) {

    
    $prodid = $_GET["pid"];
    removeProductsById($_GET["removeid"], $prodid);










    // HOME
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
            if (getAufLager($productid) <= getAufLagerCurrentAnzahlFromProductInCart($productid, $userid)) {
                echo "nomoreauflager";
            } else {
                updateAmount($productid, +1, $userid);
                echo countCartItems($userid) . "*" . getProductNameForAlert($productid);
            }
            
        }
    }

       
    
    
    // ADMINPANEL 
} else if (isset($_GET["kategorie"])) {
    
    try {
        $dname = getDescriptionName($_GET["kategorie"]);

        for ($i = 0; $i < count($dname)-2; $i++) :
            $firstr = $dname[$i][0];
            $secstr = str_replace(":", "", $firstr);
            $thirdstr = str_replace(" ", "_", $secstr);
            $repstr = str_replace(".", "_", $thirdstr);
    
            echo '
            <div class="animated--grow-in kats">
            <div class="mb-3">
                <label class="goingdark">
                    <nobr>' . $dname[$i][0] . '</nobr>
                </label>
                <input type="text" class="form-control searchbar goingdark" name="' . $repstr . '">
    
            </div> 
            </div>';
        endfor;
    } catch (Exception $e) {
        return;
    }
    
} else if(isset($_GET["sendFeedback"])) {

    $message = $_GET["sendFeedback"];
    $rating = $_GET["rating"];
    $productid = $_GET["productidrating"];
    $userid = $_GET["userid"];
    $date = new DateTime();
    $dateString = $date -> format('Y-m-d H:i:s');

    $sql = "INSERT INTO kundenbewertungen SET kundenid = $userid , productid = $productid , message = '$message', rating = $rating, datum = '$dateString', gelesen = 0;";
    try {
        db_query($sql);
        echo "yes";
    } catch (Exception $e) {
        echo "no";
    }
    
    
    
} else if (isset($_GET["newcatname"])) {
    $anzahlTechFelder = $_GET["anzahlTechFelder"];
    $msg = $_GET["newcatname"];
    if (intval($anzahlTechFelder) > 0) {
        $presql = "";
        for ($i = 0; $i < $anzahlTechFelder; $i++) {
            $presql = $presql . "`" . $_GET["$i"] . ":` VARCHAR(300) NULL, ";
        }

        $tablenamefornewtable = "description_" . strtolower($msg);


        $sql = "CREATE TABLE `webshop`.`$tablenamefornewtable` (" . $presql . "`productid` INT NULL, `id` INT NOT NULL AUTO_INCREMENT, PRIMARY KEY (`id`), INDEX `fkname_idx` (`productid` ASC) VISIBLE, CONSTRAINT `fkname_" . $tablenamefornewtable . "` FOREIGN KEY (`productid`) REFERENCES `webshop`.`produkte` (`artnr`) ON DELETE CASCADE ON UPDATE NO ACTION);";
        db_query($sql);
    }

    $sql = "INSERT INTO kategorien SET katname = '$msg';";

    $res = db_query($sql);
    if (!$res) {
        echo "f";
    } else {
        echo "t";
    }
} else if (isset($_GET["removecatid"]) && isset($_GET["catid"])) {
    $catid = $_GET["catid"];
    removeCategoryById($_GET["removecatid"], $catid);

} else if (isset($_GET["productidforedit"])) {
    $fields = getProductFields($_GET["productidforedit"]);

    $str = "&" . $fields["titel"] . "&" . $fields["beschreibung"] . "&" . $fields["preis"] . "&" . $fields["auflager"] . "&" . $fields["lieferkosten"] . "&" . $fields["discount"];


    echo $str;
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
        $tablename = "description_".getCatNameFromProdId($y[$i]);
        $sql = "DELETE FROM ".$tablename." WHERE productid = '". $y[$i] . "';";
        db_query($sql);
        
        $sql = "DELETE FROM produkte WHERE artnr = '".$y[$i]."';";
        db_query($sql);
    }
    
    echo $id;
}

function removeCategoryById($id, $pids)
{

    // for schleife, zahlen aus id mit komma trennen und solange produkte aus datenbank entfernen


    $y = explode(',', $pids);

    for ($i = 0; $i < count($y); $i++) {

        $sql = "DELETE cart, produkte FROM cart INNER JOIN produkte ON cart.productid = produkte.artnr WHERE produkte.katid = '" . $y[$i] . "';";
        db_query($sql);
        $tablename = "description_" . getCatNameFromID($y[$i]);
        $sql = "DROP TABLE IF EXISTS " . $tablename . ";";
        db_query($sql);


        $sql = "DELETE FROM produkte WHERE katid = '" . $y[$i] . "';";
        db_query($sql);
        $sql = "DELETE FROM kategorien WHERE katid = '" . $y[$i] . "';";
        db_query($sql);
    }

    echo $id;
}

