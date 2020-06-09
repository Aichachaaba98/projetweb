<?PHP
include "../core/bazart.php";
$categC=new categC();
if (isset($_POST["id_categorie"])){
	$categC->supprimercategorie($_POST["id_categorie"]);

	header('Location: afficherlistecategorie.php');
}

?>