<?PHP
include "../config.php";


class prodC
{
	
	
	

	function ajouterproduit($produit)
	{
		$sql = "insert into produit
		 (id_produit,id_categorie,nom,description,prix,lienimage) 
		values (:id_produit,:categorie,:nom,:description,:prix,:lienimage)";
		$db = config::getConnexion();
		var_dump($db);
		try {
			$req = $db->prepare($sql);
			$id_produit= $produit->getid_produit();
			$nom = $produit->getnom();
			$categorie = $produit->getcategorie();
			$description= $produit->getdescription();
			$prix = $produit->getprix();
			$lienimage = $produit->getlienimage();
			

			echo ($id_produit . " " . $nom . " " . $categorie. " " . $description . " " . $prix);
			$req->bindValue(':id_produit', $id_produit);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':categorie', $categorie);
			$req->bindValue(':description', $description);
			$req->bindValue(':prix', $prix);
			$req->bindValue(':lienimage', $lienimage);
			
 


			$req->execute();
			var_dump($req);
		} catch (Exception $e) {
			die( 'Erreur: ' . $e->getMessage());
		}
	}

	function afficherproduit()
	{
		 $sql = "SELECT * From produit";
		$db = config::getConnexion();
		try {

			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}


	function modifierproduit($produit, $id_produit)
{
	$sql = "UPDATE produit SET  id_produit=:id_produit,id_categorie=:categorie, nom=:nom,description=:description,
	prix=:prix WHERE id_produit=:id_produit";

	$db = config::getConnexion();
	//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try {
		$req = $db->prepare($sql);

		$id_produit = $produit->getid_produit();
		$nom= $produit->getnom();
		$categorie = $produit->getcategorie();
		$description= $produit->getdescription();
		$prix = $produit->getprix();
		

		$datas = array(':id_produit' => $id_produit, ':nom' => $nom, ':categorie' => $categorie, ':description' => $description, ':prix' => $prix);
		
				$req->bindValue(':id_produit', $id_produit);

		$req->bindValue(':id_produit', $id_produit);
		$req->bindValue(':nom', $nom);
		$req->bindValue(':categorie', $categorie);
		$req->bindValue(':description', $description);
		$req->bindValue(':prix', $prix);
		


		$s = $req->execute();

		// header('Location: index.php');
	} catch (Exception $e) {
		echo " Erreur ! " . $e->getMessage();
		echo " Les datas : ";
		print_r($datas);
	}
}

function recupererproduit($id_produit)
{
	$sql = "SELECT * from produit where id_produit=$id_produit";
	$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
}

function supprimerproduit($id_produit)
{
	$sql = "DELETE FROM produit where id_produit= :id_produit";
	$db = config::getConnexion();
	$req = $db->prepare($sql);
	$req->bindValue(':id_produit', $id_produit);
	try {
		$req->execute();
		// header('Location: index.php');
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
}

function rechercherproduit($valeur,$champs){
		$sql="SELECT * from produit where $champs like '%$valeur%' order by $champs " ;
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

/* ***********CATEGORIE************** */


class categC
{
 
function ajoutercategorie($categorie)
	{
		$sql = "insert into categorie
		 (id_categorie,nom,description) 
		values (:id_categorie,:nom,:description)";
		$db = config::getConnexion();
		var_dump($db);
		try {
			$req = $db->prepare($sql);
			$id_categorie= $categorie->getid_categorie();
			$nom = $categorie->getnom();
			$description= $categorie->getdescription();
			
			

			echo ($id_categorie . " " . $nom . " " . $description );
			$req->bindValue(':id_categorie', $id_categorie);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':description', $description);
			
			
 


			$req->execute();
			var_dump($req);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	
	function affichercategorie()
	{
		 $sql = "SELECT * From categorie";
		$db = config::getConnexion();
		try {

			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

function modifiercategorie($categorie, $id_categorie)
{
	$sql = "UPDATE categorie SET  id_categorie=:id_categorie, nom=:nom,description=:description WHERE id_categorie=:id_categorie";

	$db = config::getConnexion();
	//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try {
		$req = $db->prepare($sql);

		$id_categorie = $categorie->getid_categorie();
		$nom= $categorie->getnom();
		$description= $categorie->getdescription();
		
		

		$datas = array(':id_categorie' => $id_categorie, ':nom' => $nom, ':description' => $description);
		
	

		$req->bindValue(':id_categorie', $id_categorie);
		$req->bindValue(':nom', $nom);
		$req->bindValue(':description', $description);
		
		


		$s = $req->execute();

		// header('Location: index.php');
	} catch (Exception $e) {
		echo " Erreur ! " . $e->getMessage();
		echo " Les datas : ";
		print_r($datas);
	}
}

function recuperercategorie($id_categorie)
{
	$sql = "SELECT * from categorie where id_categorie=$id_categorie";
	$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
}

function supprimercategorie($id_categorie)
{
	$sql = "DELETE FROM categorie where id_categorie= :id_categorie";
	$db = config::getConnexion();
	$req = $db->prepare($sql);
	$req->bindValue(':id_categorie', $id_categorie);
	try {
		$req->execute();
		// header('Location: index.php');
	} catch (Exception $e) {
		die('Erreur: ' . $e->getMessage());
	}
}

function recherchercategorie($valeur,$champs){
		$sql="SELECT * from categorie where $champs like '%$valeur%' order by $champs " ;
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





