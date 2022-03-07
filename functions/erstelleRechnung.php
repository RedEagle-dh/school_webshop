<?php
/*A4 width : 219mm*/
define('EURO',chr(128));
$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();
/*output the result*/

/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial', 'B', 20);

/*Cell(width , height , text , border , end line , [align] )*/

$pdf->Cell(71, 10, '', 0, 0);
$pdf->Cell(59, 5, 'Rechnung', 0, 0);
$pdf->Cell(59, 10, '', 0, 1);

$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(71, 5, ' ', 0, 0);
$pdf->Cell(59, 5, '', 0, 0);
$pdf->Cell(59, 5, 'Details', 0, 1);

$pdf->SetFont('Arial', '', 10);

$pdf->Cell(130, 5, "Dave's Webshop GmbH", 0, 0);
$pdf->Cell(25, 5, 'Customer ID:', 0, 0);
$pdf->Cell(34, 5, $userid, 0, 1);

$pdf->Cell(130, 5, 'Eichenzell, 36124', 0, 0);
$pdf->Cell(25, 5, 'Invoice Date:', 0, 0);
$pdf->Cell(34, 5, $invoicedate, 0, 1);

$pdf->Cell(130, 5, 'Rheinstr. 20', 0, 0);
$pdf->Cell(25, 5, 'Invoice No:', 0, 0);
$pdf->Cell(34, 5, 'ORD001', 0, 1);

$pdf->Cell(130, 5, " ", 0, 0);
$pdf->Cell(25, 5, " ", 0, 0);
$pdf->Cell(34, 5, " ", 0, 1);

$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(130, 5, 'Bill To', 0, 0);
$pdf->Cell(59, 5, '', 0, 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(189, 10, '', 0, 1);


$pdf->SetFont('Arial', '', 10);
$pdf->Cell(130, 5, $rfname." ".$rlname, 0, 0);
$pdf->Cell(25, 5, ' ', 0, 0);
$pdf->Cell(34, 5, " ", 0, 1);

$pdf->Cell(130, 5, $rstate." ".$rzip, 0, 0);
$pdf->Cell(25, 5, ' ', 0, 0);
$pdf->Cell(34, 5, " ", 0, 1);

$pdf->Cell(130, 5, $rstreet." ".$rno, 0, 0);
$pdf->Cell(25, 5, " ", 0, 0);
$pdf->Cell(34, 5, " ", 0, 1);


$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(130, 5, " ", 0, 0);
$pdf->Cell(59, 5, '', 0, 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(189, 10, '', 0, 1);




$pdf->Cell(50, 10, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
/*Heading Of the table*/
$pdf->Cell(10, 6, 'Sl', 1, 0, 'C');
$pdf->Cell(80, 6, 'Description', 1, 0, 'C');
$pdf->Cell(23, 6, 'Qty', 1, 0, 'C');
$pdf->Cell(30, 6, 'Unit Price', 1, 0, 'C');
$pdf->Cell(20, 6, '19% MwSt.', 1, 0, 'C');
$pdf->Cell(25, 6, 'Total', 1, 1, 'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial', '', 10);

$i = 1;
foreach ($cartItems as $cartItem) {


    $pdf->Cell(10, 6, $i, 1, 0);
    $pdf->Cell(80, 6, $cartItem[1], 1, 0);
    $pdf->Cell(23, 6, $cartItem[6], 1, 0, 'R');
    $pdf->Cell(30, 6, ($cartItem[3]-($cartItem[3]*19/100)).EURO, 1, 0, 'R');
    $pdf->Cell(20, 6, ($cartItem[3]*19/100).EURO, 1, 0, 'R');
    $pdf->Cell(25, 6, ($cartItem[3]*$cartItem[6]).EURO, 1, 1, 'R');
    $i++;
}



$pdf->Cell(118, 6, '', 0, 0);
$pdf->Cell(25, 6, 'Subtotal', 0, 0);
$pdf->Cell(45, 6, getCartPrice().EURO, 1, 1, 'R');


$content = $pdf->Output("", "S");
return $content;
