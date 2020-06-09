<?PHP
include "../Cores/clientC.php";
$clientC=new clientC();

if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="email" or $_POST["modwith"]=="login")  ) {
	$clientC->modifierclient($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: modifierclient3.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}

?>
