<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['id_panier']) and isset($_POST['id_produit']) and isset($_POST['quantite']))
{
$p1=new panier($_POST['id_panier'],$_POST['id_produit'],$_POST['quantite']);
//Partie2
/*
var_dump($panier1);
}
*/
//Partie3
$panier1C=new panierC();
$panier1C->ajouterPanier($p1);
header('Location: afficherPanier.php');
	
}
else
{
	echo "vérifier les champs";
}


?>