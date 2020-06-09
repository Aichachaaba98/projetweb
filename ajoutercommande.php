<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";



if (!empty($_POST['date_commande'])and isset($_POST['mode_payement']) and isset($_GET['id_panier']) )
{      
     $commande=new commande(NULL,1,$_GET['id_panier'],$_POST['date_commande'],"en attente",$_POST['mode_payement']);
    
    $commandeC=new commandeC();
    //$commandeC1=new commandeC();
    $commandeC->ajoutercommande($commande);
    $commandeC->ajouterhistorique($commande);


    header('Location: confirmation.html');
    
}
else 
{
	header('Location: checkout.php');
}
    
?>