<?PHP

include_once"../config.php";
class livreurC {
function afficherlivreur ($livreur){
		echo "cin_livreur: ".$livreur->getcin_livreur()."<br>";
		echo "nom: ".$livreur->getnom()."<br>";
		echo "Prénom: ".$livreur->getprenom()."<br>";
		echo "tel: ".$livreur->gettel()."<br>";
		echo "disponibilite: ".$livreur->getdisponibilite()."<br>";
		

	}

	function ajouterlivreur($livreur){
		$sql="insert into livreur (cin_livreur,nom,prenom,tel,disponibilite) values (:cin_livreur, :nom,:prenom,:tel,:disponibilite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin_livreur=$livreur->getcin_livreur();
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $tel=$livreur->gettel();
        $disponibilite=$livreur->getdisponibilite();
		
		$req->bindValue(':cin_livreur',$cin_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':disponibilite',$disponibilite);
		

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		//$sql="SElECT * From livreur e inner join formationphp.livreur a on e.id_livreur= a.id_livreur";
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($cin_livreur){
		$sql="DELETE FROM livreur where cin_livreur= :cin_livreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin_livreur',$cin_livreur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($livreur,$cin_livreur){
		$sql="UPDATE livreur SET cin_livreur=:cin_livreur, nom=:nom,prenom=:prenom,tel=:tel,disponibilite=:disponibilite WHERE cin_livreur=:cin_livreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin_livreur=$livreur->getcin_livreur();
        $nom=$livreur->getnom();
        $prenom=$livreur->getprenom();
        $tel=$livreur->gettel();
        $disponibilite=$livreur->getdisponibilite();
		
		$datas = array(':cin_livreur'=>$cin_livreur, ':nom'=>$nom,':prenom'=>$prenom,':tel'=>$tel,':disponibilite'=>$disponibilite);
		
		$req->bindValue(':cin_livreur',$cin_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':disponibilite',$disponibilite);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivreur($cin_livreur){
		$sql="SELECT * from livreur where cin_livreur=$cin_livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivreurs($tarif){
		$sql="SELECT * from livreur where mail=$tarif";
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