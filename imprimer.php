<?php
include "../Cores/commandeC.php";
require ('db.php');


ob_start();
?>

<page backtop="20mm">
	 <h1> Liste des commandes: </h1>
		<table style="width:100%;border: 2px dashed;  " >
		<tr>

														  <th scope="col" style="padding-right: 30px">ID_COMMANDE</th>
													      <th scope="col" style="padding-right: 30px">LOGIN</th>
													      <th scope="col" style="padding-right: 30px">ID_PANIER</th>
													      <th scope="col" style="padding-right: 30px">DATE_COMMANDE</th>
													      <th scope="col" style="padding-right: 50px">ETAT</th>
													      <th scope="col" style="padding-right: 30px">MODE_PAYEMENT</th>
													  
													      
													  
													</tr>
													
		<?php
	$commandess=new commandeC();
$listcommandes=$commandess->recuperercommandes();
		foreach($listcommandes as $row) {
			?>

		  <tr>
												      <td > <?php echo $row["id_commande"] ; ?> </td> 
												      <td> <?php echo $row["login"] ; ?></td> 
												       <td> <?php echo $row["id_panier"] ; ?> </td> 
												      <td> <?php echo $row["date_commande"] ; ?> </td> 
                                                     <td> <?php echo $row["etat"] ; ?></td> 
													  <td> <?php echo $row["mode_payement"] ; ?> </td> 


 												      
												   
												              
												    </tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>