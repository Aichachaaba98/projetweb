<?PHP
include "../entities/panier.php";
include "../entities/element_panier.php";
include "../core/panierC.php";
include "../core/element_panierC.php";

if ( isset($_POST['id_panier']) )
{

//Partie2
/*
var_dump($panier1);
}
*/
//Partie3
$PanierC1= new panierC();
$liste=$PanierC1-> AfficherPanier($id_panier);


foreach($liste as $row){
	?>
	<tr>
	<td><span><?PHP echo $row['id_panier']; ?></span></td>
	<td> <?PHP echo $row['id_produit']; ?> </td>
	<td><span>$<?PHP echo $row['quantite']; ?></span></td>
	</tr>
	
<?php	
}
else echo "NULL";

?>