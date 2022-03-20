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
    $lieferkosten = (double) $_POST["lieferkosten"];
    $status = 'error';

    if(!empty($_FILES["image"]["name"])) {
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg');
        if(in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
            $newPID = getNewProductID();
            $sql = "INSERT INTO produkte (artnr, titel, beschreibung, preis, katid, picture, auflager, lieferkosten) VALUES ($newPID, '".$titel."', '".$beschreibung."', '".$preis."', '".$kategorie."', '".$imgContent."', '".$auflager."', '".$lieferkosten."');";
            $insert = db_query($sql);
            if($insert) {
                $status = 'success';
                $statusMsg = 'Erfolgreich hochgeladen!';
            } else {
                $statusMsg = 'Nicht hochgeladen, probiere es erneut!';

            }
        } else {
            $statusMsg = 'Sorry, nur JPG, JPEG oder PNG Dateien sind erlaubt!';

        }

    } else {
        $statusMsg = 'Bitte wähle eine Bilddatei zum hochladen aus.';
    }
}