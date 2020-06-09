<?php
include_once "../config.php";

class commandeC
{
	

	

	function recupererhistorique()
	{
   		$sql="SELECT * from historiquecommande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}


	function recuperercommandes()
	{
   		$sql="SELECT * from commande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function recuperercommande($id_commande)
	{
   		$sql="SELECT * from commande where id_commande= $id_commande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	

	function supprimercommande($id_commande)
	{
		$sql="DELETE FROM commande where id_commande= :id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimercontenucommande($id_panier)
	{
		$sql="DELETE FROM panier where id_panier= :id_panier";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_panier',$id_panier);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($commande,$id_commande){
		$sql="UPDATE commande SET id_commande=:id_commande, login=:login, id_panier=:id_panier, date_commande=:date_commande,
		etat=:etat, mode_payement=:mode_payement WHERE id_commande=:id_commande";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id_commande=$commande->get_idCommande();
        $login=$commande->get_login();
		$id_panier=$commande->get_idPanier();
		$date_commande=$commande->get_dateCommande();
		$etat=$commande->get_etat();
		$mode_payement=$commande->get_modePayement();
       
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':login',$login);
		$req->bindValue(':id_panier',$id_panier);
        $req->bindValue(':date_commande',$date_commande);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':mode_payement',$mode_payement);
	
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            die( " Erreur ! ".$e->getMessage());
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

		function modifiercommande2($id,$etat)
	{
		$sql="UPDATE commande SET etat= :etat where id_commande= :id";
		$db = config::getConnexion();
        
        try
        {
        	$req=$db->prepare($sql);
        	$req->bindValue(':id', $id);
        	$req->bindValue(':etat', $etat);
        	$s=$req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	

	function recuperercontenucommande($idCommande)
	{
        $sql="SELECT * from lignecommande where idCommande=$idCommande";
		$db = config::getConnexion();
		
		try
		{
		$liste=$db->query($sql);
		$liste->execute();
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
	}

	function recherchercommande($valeur,$champs){
		$sql="SELECT * from commande where $champs like '%$valeur%' order by $champs " ;
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}




?>