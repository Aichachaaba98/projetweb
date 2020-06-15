<?PHP
include "../entities/offre.php";
include "../core/offreC.php";

if (isset($_POST['idOffre']) and isset($_POST["dateDebut"]) and isset($_POST["dateFin"]) and isset($_POST["description"])){
$offre1=new offre($_POST["idOffre"],$_POST["dateDebut"],$_POST["dateFin"],$_POST["description"]);
//Partie2
/*
var_dump($offre1);
}
*/
//Partie3
$offre1C=new offreC();
$offre1C->ajouteroffre($offre1);
header('Location: afficherOffre.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>