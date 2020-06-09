<?PHP
include "../Cores/clientC.php";


echo ("page test");
if (
	isset($_POST['login']) and isset($_POST['mdp']) and isset($_POST['nom'])
	and isset($_POST['prenom']) and isset($_POST['tel'])and isset($_POST['adresse'])and isset($_POST['email'])
	 
) {
	if (
		!empty($_POST['login']) and !empty($_POST['mdp']) and !empty($_POST['nom'])
		and !empty($_POST['prenom']) and !empty($_POST['tel']) and !empty($_POST['adresse']) and !empty($_POST['email'])
	) {
		$client1 = new client($_POST['login'], $_POST['mdp'], $_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['adresse'], 
			$_POST['email']   );

		$client1C = new clientC();
		$client1C->ajouterclient($client1);
		header('Location: signin.html');
	}	
    else {echo "vérifier les champs";}
	
} 
else {
	echo "vérifier les champs";
}
//*/
