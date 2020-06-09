<?PHP
include "../Cores/carteC.php";
$clientC=new clientC();

if (isset($_POST["ancien"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="id_carte" or $_POST["modwith"]=="login")  ) {
	$clientC->modifiercarte($_POST["ancien"],$_POST["new"],$_POST["modwith"]);
	header('Location: modifiercarte3.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}

?>