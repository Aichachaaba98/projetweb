<?PHP
include "../core/element_panierC.php";
include "../entities/element_panier.php";

$element_panierC1=new element_panierC();

if (isset($_POST['id_panier']) and isset($_POST['id_produit']))
{
	$element_panierC1->supprimerElement($_POST["id_panier"],$_POST["id_produit"]);
	header('Location: cart.php');

}

?>