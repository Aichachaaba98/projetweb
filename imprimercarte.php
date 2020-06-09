<?php

include "../Entities/carte.php";
require_once ('C:/wamp/www/Makhla_copy/sufee-admin-dashboard-master/Views/pdf/mc_table.php');


$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des cartes  fidelite: \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'bazart');

$query  = "SELECT * FROM carte ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"id_carte",1,0);
  $pdf->Cell(30,10,"login",1,0);
  $pdf->Cell(40,10,"points",1,0);

echo"<br>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $id_carte = $row['id_carte'];
        $login = $row['login'];
        $points=$row['points'];


        if($e==0)
        {
$pdf->Ln();
        $pdf->Cell(24,10,"{$id_carte} ",2,0);
        $pdf->Cell(30,10,"{$login} ",3,0);
        $pdf->Cell(40,10,"{$points} ",5,1);
        }



    } 

  }


$pdf->SetFont("Courier","B",9);

$pdf->output("carte.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=carte.pdf");
readfile("carte.pdf");
unlink("carte.pdf");
