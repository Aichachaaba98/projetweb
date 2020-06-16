<?PHP
include "../config.php";
class promotionC {
function afficherpromotion ($promotion){
		echo "idpromotion: ".$promotion->getidpromotion()."<br>";
		echo "date Debut: ".$promotion->getdateDebut()."<br>";
		echo "date Fin: ".$promotion->getdateFin()."<br>";
		echo "valeur: ".$promotion->getvaleur()."<br>";
	}
    
	function ajouterpromotion($promotion){
		$sql="insert into promotions (idpromotion,dateDebut,dateFin,valeur) values (:idpromotion,:dateDebut,:dateFin,:valeur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idpromotion=$promotion->getidpromotion();
        $dateDebut=$promotion->getdateDebut();
        $valeur=$promotion->getvaleur();
        $dateFin=$promotion->getdateFin();
		$req->bindValue(':idpromotion',$idpromotion);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':valeur',$valeur);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpromotions(){
		//$sql="SElECT * From promotion e inner join formationphp.promotion a on e.idpromotion= a.idpromotion";
		$sql="SElECT * From promotions";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpromotion($idpromotion){
		$sql="DELETE FROM promotions where idpromotion= :idpromotion";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idpromotion',$idpromotion);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpromotion($promotion,$idpromotion){
		$sql="UPDATE promotions SET idpromotion=:idpromotionn, dateDebut=:dateDebut,valeur=:valeur,dateFin=:dateFin WHERE idpromotion=:idpromotion";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idpromotionn=$promotion->getidpromotion();
        $dateDebut=$promotion->getdateDebut();
        $valeur=$promotion->getvaleur();
        $dateFin=$promotion->getdateFin();
		$datas = array(':idpromotionn'=>$idpromotionn, ':idpromotion'=>$idpromotion, ':dateDebut'=>$dateDebut,':dateFin'=>$dateFin,':valeur'=>$valeur);
		$req->bindValue(':idpromotionn',$idpromotionn);
		$req->bindValue(':idpromotion',$idpromotion);

		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':valeur',$valeur);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpromotion($idpromotion){
		$sql="SELECT * from promotions where idpromotion=$idpromotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepromotions($nom){
		$sql="SELECT * from promotions where nom like '%$nom%'";
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