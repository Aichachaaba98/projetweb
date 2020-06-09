<?php

include "../Entities/client.php";
require_once ('C:/wamp/www/Makhla_copy/sufee-admin-dashboard-master/Views/pdf/mc_table.php');


$e=0;
$i=0;
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Times","I",12);
$pdf->SetTextColor(124,112,103);
$pdf->MultiCell(0,10,"\n\n\n\n Liste des clients : \n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont("Times","",12);
$dbConnection = mysqli_connect('localhost', 'root', '', 'bazart');

$query  = "SELECT * FROM clients ";
$result = mysqli_query($dbConnection, $query);

if (mysqli_num_rows($result) > 0) {
  $pdf->Cell(24,10,"login",1,0);
  $pdf->Cell(30,10,"mdp",1,0);
  $pdf->Cell(40,10,"nom",1,0);
  $pdf->Cell(40,10,"prenom",1,0);
  $pdf->Cell(40,10,"tel",1,0);
  $pdf->Cell(40,10,"adresse",1,0);
  $pdf->Cell(50,10,"email",1,0);

echo"<br>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $id_carte = $row['login'];
        $login = $row['mdp'];
        $points=$row['nom'];
        $id_carte = $row['prenom'];
        $login = $row['tel'];
        $points=$row['adresse'];
        $points=$row['email'];


        if($e==0)
        {
$pdf->Ln();
        $pdf->Cell(24,10,"{$login} ",2,0);
        $pdf->Cell(30,10,"{$mdp} ",3,0);
        $pdf->Cell(40,10,"{$nom} ",5,1);
        $pdf->Cell(50,10,"{$prenom} ",6,0);
        $pdf->Cell(60,10,"{$tel} ",7,0);
        $pdf->Cell(70,10,"{$adresse} ",8,1);
        $pdf->Cell(80,10,"{$email} ",9,1);


        }



    } 

  }


$pdf->SetFont("Courier","B",9);

$pdf->output("clients.pdf","");


header("Content-Type: application/pdf");
header("Content-Disposition: attachment;filename=clients.pdf");
readfile("clients.pdf");
unlink("clients.pdf");
