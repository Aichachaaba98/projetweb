<?php
include "../Cores/carteC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Listes des cartes </h1>
		<table style="width:200%;border: 2px dashed;font-size: 18px" >
		<tr>

														  <th scope="col">ID Carte</th>
													      <th scope="col">Login</th>
													      <th scope="col">Points</th>
													      										  
													      												    
													      
													</tr>
													
		<?php
	$c=new carteC();
$listcartes=$c->affichercartes();
		foreach($listcartes as $row) {
			?>
		  <tr>
												      <td> <?php echo $row["id_carte"] ; ?></td> 
												      <td> <?php echo $row["login"] ; ?></td> 
												       <td> <?php echo $row["points"] ; ?></td> 
												     											      
												   
												              
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
$pdf=new html2pdf('p','A5','fr','true','UTF-8');
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