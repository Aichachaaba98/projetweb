<?PHP
include "../core/livraisonC.php";
include "../entities/livraison.php";
$livraisonC=new livraisonC();
if (isset($_POST["id_livraison"])){
	$livraisonC->supprimerlivraison($_POST["id_livraison"]);
	header('Location: a.php');
}

?>