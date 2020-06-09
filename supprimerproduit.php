<?PHP
include "../core/bazart.php";
$prodC=new prodC();
if (isset($_POST["id_produit"])){
	$prodC->supprimerproduit($_POST["id_produit"]);

	header('Location: afficherlisteproduit.php');
}

?>