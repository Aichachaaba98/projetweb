<?PHP
include "../config.php";
class offreC {
function afficheroffre ($offre){
		echo "idOffre: ".$offre->getidOffre()."<br>";
		echo "date Debut: ".$offre->getdateDebut()."<br>";
		echo "date Fin: ".$offre->getdateFin()."<br>";
		echo "description: ".$offre->getdescription()."<br>";
	}
    
	function ajouteroffre($offre){
		$sql="insert into offre (idOffre,dateDebut,dateFin,description) values (:idOffre,:dateDebut,:dateFin,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idOffre=$offre->getidOffre();
        $dateDebut=$offre->getdateDebut();
        $description=$offre->getdescription();
        $dateFin=$offre->getdateFin();
		$req->bindValue(':idOffre',$idOffre);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':description',$description);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheroffres(){
		//$sql="SElECT * From offre e inner join formationphp.offre a on e.idOffre= a.idOffre";
		$sql="SElECT * From offre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimeroffre($idOffre){
		$sql="DELETE FROM offre where idOffre= :idOffre";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idOffre',$idOffre);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifieroffre($offre,$idOffre){
		$sql="UPDATE offre SET idOffre=:idOffren, dateDebut=:dateDebut,description=:description,dateFin=:dateFin WHERE idOffre=:idOffre";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idOffren=$offre->getidOffre();
        $dateDebut=$offre->getdateDebut();
        $description=$offre->getdescription();
        $dateFin=$offre->getdateFin();
		$datas = array(':idOffren'=>$idOffren, ':idOffre'=>$idOffre, ':dateDebut'=>$dateDebut,':dateFin'=>$dateFin,':description'=>$description);
		$req->bindValue(':idOffren',$idOffren);
		$req->bindValue(':idOffre',$idOffre);

		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':description',$description);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupereroffre($idOffre){
		$sql="SELECT * from offre where idOffre=$idOffre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeoffres($nom){
		$sql="SELECT * from offre where nom like '%$nom%'";
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