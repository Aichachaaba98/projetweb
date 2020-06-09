<?PHP
include "../entities/produit.php";
include "../core/bazart.php";


/*
session_start();
if (isset($_SESSION["name"]))
	$name = $_SESSION["name"];
	$id_cin=$_SESSION["id"];

*/


echo ("page test");

$file_name = $_FILES['fileToUpload']['name'];
	$file_tmp_name = $_FILES ['fileToUpload']['tmp_name'];
	$file_dest = 'image/'.$file_name;
	
	move_uploaded_file($file_tmp_name, $file_dest);
if (
	isset($_POST['id_produit']) and isset($_POST['nom']) and isset($_POST['categorie'])
	and isset($_POST['description']) and isset($_POST['prix'])
	 
) {
	if (
		!empty($_POST['id_produit']) and !empty($_POST['nom']) and !empty($_POST['categorie'])
		and !empty($_POST['description']) and !empty($_POST['prix'])
	) {
		$pro1 = new produit($_POST['id_produit'], $_POST['nom'], $_POST['categorie'], $_POST['description'], $_POST['prix'],$file_dest);


		$prod1C = new prodC();
		$prod1C->ajouterproduit($pro1);
		header('Location: afficherlisteproduit.php');
	}
} else {
	echo "vérifier les champs";
}
//*/
