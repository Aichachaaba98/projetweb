<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";

if (isset($_POST['idpromotion']) and isset($_POST["dateDebut"]) and isset($_POST["dateFin"]) and isset($_POST["valeur"])){
$promotion1=new promotion($_POST["idpromotion"],$_POST["dateDebut"],$_POST["dateFin"],$_POST["valeur"]);
//Partie2
/*
var_dump($promotion1);
}
*/
//Partie3
$promotion1C=new promotionC();
$promotion1C->ajouterpromotion($promotion1);
header('Location: afficherPromotion.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>