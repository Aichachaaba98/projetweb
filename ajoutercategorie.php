<?PHP
include "../entities/categorie.php";
include "../core/bazart.php";


/*
session_start();
if (isset($_SESSION["name"]))
	$name = $_SESSION["name"];
	$id_cin=$_SESSION["id"];

*/


echo ("page test");
if (
	  isset($_POST['id_categorie']) and isset($_POST['nom']) and isset($_POST['description']) )
	 
 {
	if (
		!empty($_POST['id_categorie']) and !empty($_POST['nom']) and !empty($_POST['description'])
		
	   )
	 {
		$categ1 = new categorie($_POST['id_categorie'], $_POST['nom'], $_POST['description']);


		$categ1C = new categC();
		$categ1C->ajoutercategorie($categ1);
		header('Location: afficherlistecategorie.php');
	}
} else {
	echo "vérifier les champs";
}
//*/
