<?php

function getInvoice($invoiceid)
{

    $sql = "SELECT pdf FROM rechnungen WHERE id = '" . $invoiceid . "';";
    $result = db_query($sql);
    $rs = mysqli_fetch_assoc($result);
    $content = ($rs['pdf']);
    header('Content-Type: application/pdf');
    header("Content-Length: " . strlen($content));
    header('Content-Disposition: attachment; filename=myfile.pdf');
    print $content;
}


function returnInvoice()
{
    $userid = getCurrentUserId();
    $sql = "SELECT * FROM rechnungen WHERE userid = '" . $userid . "';";
    $result = db_query($sql);
    if (!$result) {
        return [];
    }
    $rechnungen = [];
    while ($row = mysqli_fetch_row($result)) {
        $rechnungen[] = $row;
    }
    return $rechnungen;
}
