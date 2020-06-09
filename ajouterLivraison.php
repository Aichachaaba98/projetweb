<?PHP
include "../Entities/livraison.php";
include "../Cores/livraisonC.php";



if (isset($_POST['cin_livreur'])and isset($_POST['date_livraison'])and($_GET['id_commande']))
{   
    $livraison=new livraison(NULL,$_POST['id_commande'],$_POST['cin_livreur'],$_POST['date_livraison'],1000);
    $livraisonC=new livraisonC();
    $livraisonC->ajouterlivraison($livraison);

    header('Location: affichercommandes2.php');
    
}
else
{
    echo "vérifier les champs";
}


    
?>