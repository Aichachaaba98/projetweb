<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_POST['cin_livreur'])and isset($_POST['nom'])and isset($_POST['prenom'])and isset($_POST['tel'])and isset($_POST['disponibilite'])){
     $liv=new livreur($_POST['cin_livreur'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['disponibilite']);
    $livreurC=new livreurC();
    $livreurC->ajouterlivreur($liv);

    header('Location: c.php');
    
}
else
{
    echo "vérifier les champs";
}


    
?>
