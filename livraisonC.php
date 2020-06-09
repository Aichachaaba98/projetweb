<?PHP
include "../config.php";
class livraisonC {
function afficherlivraison ($livraison){
		echo "id_livraison: ".$livraison->getidlivraison()."<br>";
		echo "id_commande: ".$livraison->getidcommande()."<br>";
		echo "cin_livreur: ".$livraison->getlivreur()."<br>";
		echo "date_livraison: ".$livraison->getdate_livraison()."<br>";
		echo "total_livraison: ".$livraison->gettotal()."<br>";
		echo "etat: ".$livraison->getetat()."<br>";
		
	}
	function ajouterlivraison($livraison){
		$sql="insert into livraison (id_livraison,id_commande,cin_livreur,date_livraison,total_livraison,etat) values ( :id_livraison,:id_commande,:cin_livreur,:date_livraison,:total_livraison,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livraison=$livraison->getidlivraison();
        $id_commande=$livraison->getidcommande();
		$cin_livreur=$livraison->getlivreur();
		$date_livraison=$livraison->getdate_livraison();
		$total_livraison=$livraison->gettotal();
		$etat=$livraison->getetat();
	

		$req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':cin_livreur',$cin_livreur);
        $req->bindValue(':date_livraison',$date_livraison);
		$req->bindValue(':total_livraison',$total_livraison);
		$req->bindValue(':etat',$etat);
	

	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
		
		$sql="SElECT * From detail_livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherlivraisonsT(){
		$sql="SElECT * From detail_livraison ORDER BY id_livraison ";
		//$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}

	function supprimerlivraison($id_livraison){
		$sql="DELETE FROM detail_livraison where id_livraison= :id_livraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livraison',$id_livraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$id_livraison){
		$sql="UPDATE detail_livraison SET id_livraison=:id_livraison, id_commande=:id_commande,cin_livreur=:cin_livreur,date_livraison=:date_livraison,total_livraison=:total_livraison,etat=:etat WHERE id_livraison=:id_livraison";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
         $id_livraison=$livraison->getidlivraison();
        $id_commande=$livraison->getidcommande();
		$cin_livreur=$livraison->getlivreur();
		$date_livraison=$livraison->getdate_livraison();
		$total_livraison=$livraison->gettotal();
		$etat=$livraison->getetat();
       
		$req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':cin_livreur',$cin_livreur);
        $req->bindValue(':date_livraison',$date_livraison);
		$req->bindValue(':total_livraison',$total_livraison);
		$req->bindValue(':etat',$etat);
	
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            die( " Erreur ! ".$e->getMessage());
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivraison($id_livraison){
		$sql="SELECT * from detail_livraison where id_livraison=$id_livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivraisons($id_livraison){
		$sql="SELECT * from detail_livraison where id_livraison=$id_livraison";
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