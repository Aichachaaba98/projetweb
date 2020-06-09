<?PHP

include_once "../config.php";

class element_panierC {



	function ajouterelement($element){
		$sql="insert into element_panier (id_panier,id_produit,quantite)
 values (:id_panier, :id_produit , :quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_panier=$element->get_idPanier();
        $id_produit=$element->get_idProduit();
        $quantite=$element-> get_quantite();
      
		$req->bindValue(':id_panier',$id_panier);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':quantite',$quantite);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	
	
	function afficherElement($id_panier)
	{
   		$sql="SELECT * from element_panier where id_panier= $id_panier";
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
	

	/*function afficherpaniersback(){
		
		$sql="SELECT b.id ,etat,b.id_formation as idf ,name,price from panier b INNER JOIN course a on b.id_formation=a.id ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}	
		
	}*/

	function supprimerElement($id_panier,$id_produit){
		$sql="DELETE FROM panier where id_panier= :id_panier and id_produit= :id_produit";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_panier',$id_panier);
		$req->bindValue(':id_produit',$id_produit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*function sommepanier(){
		$sql="SELECT b.id ,SUM(price) as som from panier b INNER JOIN course a on b.id_formation=a.id where etat=0 and b.id =".$_SESSION['id'];
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function acheterpanier($date){
		$sql="UPDATE panier SET etat=:etat WHERE etat=0 and id =".$_SESSION['id'];
		$db = config::getConnexion();
		
		$req=$db->prepare($sql);
		
		$req->bindValue(':etat',$date);
		
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function verifierpanier($id){
		$sql="SELECT * from panier where id_formation=$id and etat=0 and id=".$_SESSION['id'];
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql)->rowcount();
		
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function supprimerpaniers($date,$id){
		$sql="DELETE FROM panier where etat= '$date' and id=$id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
	
}

?>
