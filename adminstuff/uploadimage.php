<?php

$titel = "";
$beschreibung = "";
$preis = 0;
$kategorie = 0;
$auflager = 0;
$lieferkosten = 0;
$artnr = 0;




$status = $statusMsg = '';
if(isset($_POST["submit"])) {
    $titel = $_POST["produktname"];
    $beschreibung = $_POST["beschreibung"];
    $auflager = (int) $_POST["anzahl"];
    $preis = (double) $_POST["preis"];
    $kategorie = (int) $_POST["kategorie"];
    
    $descriptionNames = getDescriptionName($kategorie);
    

    $descspaltenpost = [];
    $k = 0;
    foreach ($descriptionNames as $name) {
        if ($k == (count($descriptionNames) - 2)) {
            break;
        } else {
            $end = str_replace(" ", "_", $name[0]);
            $end2 = str_replace(":", "", $end);
            $end3 = str_replace(".", "_", $end2);
            array_push($descspaltenpost, $_POST[$end3]);
            $k++;
        }
    }

    $earlystr = "";
    for ($i = 0; $i < count($descspaltenpost); $i++) {


        if (empty($earlystr)) {
            $earlystr = $earlystr . "'" . $descspaltenpost[$i] . "'";
        } else {
            $earlystr = $earlystr . ", " .  "'" . $descspaltenpost[$i] . "'";
        }
    }
    $newPID = getNewProductID();
    $earlystr = $earlystr . ", $newPID";


    $tablename = getDescriptionTableName(getCatNameFromID($kategorie));
    
    
    
    $lieferkosten = (double) $_POST["lieferkosten"];
    $status = 'error';

    if(!empty($_FILES["image"]["name"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg');
        if(in_array($fileType, $allowTypes)) {
            if(!empty($_POST["produktname"])) {
                if(!empty($_POST["preis"])) {
                    $image = $_FILES['image']['tmp_name'];
                    $imgContent = addslashes(file_get_contents($image));
                    $datum = new DateTime();
                    $datetime = $datum -> format('Y-m-d H:i:s');
                    
                    $sql = "INSERT INTO produkte (artnr, titel, beschreibung, preis, katid, picture, auflager, lieferkosten, datum) VALUES ($newPID, '".$titel."', '".$beschreibung."', '".$preis."', '".$kategorie."', '".$imgContent."', '".$auflager."', '".$lieferkosten."', '".$datetime."');";
                    $insert = db_query($sql);
                    $earlystmt = "INSERT INTO " . $tablename . " VALUES (" . $earlystr . ", null);";
                    
                    db_query($earlystmt);
                    //$sql = "INSERT INTO ".getDescriptionTableName()." VALUES (". $values .")";
                    if($insert) {
                        $status = 'success';
                        $statusMsg = 'Erfolgreich hochgeladen!';
                    } else {
                        $statusMsg = 'Nicht hochgeladen, probiere es erneut!';
        
                    }
                } else {
                    $statusMsg = "Bitte einen Preis wählen!";
                }
                
            } else {
                $statusMsg = "Bitte einen Namen wählen!";
            }
            
        } else {
            $statusMsg = 'Sorry, nur JPG, JPEG oder PNG Dateien sind erlaubt!';

        }

    } else {
        $statusMsg = "Bitte ein richtiges Bild hochladen.";
    }
}


