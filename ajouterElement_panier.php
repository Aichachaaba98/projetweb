<?PHP
include "../entities/element_panier.php";
include "../core/element_panierC.php";

if ( isset($_POST['id_produit']) )
{

$element_panier1=new element_panier(10,$_POST["id_produit"],1);//Partie2
/*
var_dump($panier1);
}
*/
//Partie3
$element_panier1C=new element_panierC();
$element_panier1C-> ajouterelement($element_panier1);
header('Location: cart.php');
	
}
else
{
	echo "vérifier les champs";
}


?>