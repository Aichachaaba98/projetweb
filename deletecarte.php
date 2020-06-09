<?PHP
include "../Cores/carteC.php";

$carteC=new carteC();

if (isset($_POST["id_carte"])){
	$carteC->deletecarte($_POST["id_carte"]);
	header('Location: affichercarte.php');
}

?>