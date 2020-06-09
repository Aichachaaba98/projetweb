<?php
include "../core/livraisonC.php";
include "../core/livreurC.php";

$livraison1C=new livraisonC();
$listelivraisons=$livraison1C->afficherlivraisons();

$livreur1C=new livreurC();


$db = config::getConnexion(); 
$liv = $db->query("select COUNT(*) from detail_livraison")->fetchColumn();
$livreur=$db->query("select * from livreur")->fetchAll();
ob_start();

?>

<page backtop="20mm">
	 <h1> Liste des livraisons: </h1>
		<table style="width:100%;border: 2px dashed;  " >
		<tr>
														<th scope="col" style="padding-right: 20px">ID_LIVRAISON</th>
														  <th scope="col" style="padding-right: 20px">ID_COMMANDE</th>
													      <th scope="col" style="padding-right: 20px">CIN LIVREUR</th>
													      <th scope="col" style="padding-right: 20px">DATE_LIVRAISON</th>
													      <th scope="col" style="padding-right: 20px">PRIX_TOTAL</th>
													      <th scope="col" style="padding-right: 20px">ETAT</th>
													      <th scope="col" style="padding-right: 20px">NOM_LIVREUR</th>
													  
													      
													  
													</tr>
													
		
	<?PHP
		 
                                            foreach($listelivraisons as $row){
                                                ?>
                                                <tr> 

		  	                                            <td><?PHP echo $row['id_livraison']; ?></td>
                                                        <td><?PHP echo $row['id_commande']; ?></td>
                                                        <td><?PHP echo $row['cin_livreur']; ?></td>
                                                        <td><?PHP echo $row['date_livraison']; ?></td>
                                                        <td><?PHP echo $row['total_livraison']; ?></td>
                                                        <td><?PHP echo $row['etat']; ?></td>
												     

 												       
                                                         <td style="padding: 20px">
                                                             
                                                               <?php $listelivreur=$livreur1C->recupererlivreur($row['cin_livreur']); 
                                                               foreach($listelivreur as $liv){ ?>
                                                          <?php echo $liv['nom']; ?>
                                                           <?php  }?>
                                                       </td>
												   
												              
												    </tr>
												    <?PHP
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