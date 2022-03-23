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

function getDescriptionName($kat)
{
    // CPU
    $sql = "SHOW FIELDS FROM " . getDescriptionTableName(getCatNameFromID($kat));
    $result = db_query($sql);
    $desc = [];

        while ($row = mysqli_fetch_row($result)) {
            $desc[] = $row;
    }
    return $desc;
}
function getDescriptionTableName($katname)
{
    $sql = "SELECT table_name FROM INFORMATION_SCHEMA.TABLES WHERE table_type = 'BASE TABLE' AND table_name LIKE '%$katname%';";
    $r = db_query($sql);
    return mysqli_fetch_column($r);
}

function getCatNameFromID($katid) {
    $sql = "SELECT katname FROM kategorien WHERE katid = $katid;";
    $r = db_query($sql);
    
    if(!$r) {
        return [];
    }
    
    return mysqli_fetch_column($r);
}
if (isset($_GET["kategorie"])) {


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
}
