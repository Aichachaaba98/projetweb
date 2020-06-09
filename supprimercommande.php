<?PHP
include "../Cores/produitC.php";
include "../Cores/commandeC.php";
include "../Entities/commande.php";
session_start();
$_SESSION['id']=2;
if(isset($_SESSION['id']))
{
$commandeC=new commandeC();
if (isset($_POST["id_commande"]))
{
	$commande=$commandeC->recuperercommande($_POST["id_commande"]);
	$info=$commande->fetch();
	$commande=new commande($info["id_commande"],$info["login"],$info["id_panier"],$info["date_commande"],$info["etat"],$info["mode_payement"]);


	//$annuler="Anuulee";
	//$commande->set_etat($annuler);
	//$commandeC->modifiercommande($_POST["id_commande"],$annuler);
	//$dateactuelle = date("Y-m-d");
	//$commande->set_dateCommande($dateactuelle);
   

	//$commandeC->ajouterhistorique($commande);
	$commandeC->supprimercommande($_POST["id_commande"]);
	/*$commandeC->supprimercontenucommande($_POST["id_panier"]);*/
	header('Location: affichercommandes2.php');
}

}

?>