<?php

include "../Entities/carte.php";
require_once ('C:/wamp64/www/Makhla/sufee-admin-dashboard-master/Views/pdf/mc_table.php');

$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des cartes  fidélité: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'makhla');

$query  = "SELECT * FROM carte ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"email",1,0);
  $pdf->Cell(30,10,"username",1,0);
  $pdf->Cell(40,10,"pointt",1,0);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $email = $row['email'];
        $username = $row['username'];
        $pointt=$row['pointt'];

        if($e==0)
        {

        $pdf->Cell(24,10,"{$email} ",2,0);
        $pdf->Cell(30,10,"{$username} ",3,0);
        $pdf->Cell(40,10,"{$pointt} ",5,1);

        }



    } }


$pdf->SetFont("Courier","B",9);

$pdf->output("carte.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=carte.pdf");
readfile("carte.pdf");
unlink("carte.pdf");
