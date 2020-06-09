<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cin_livreur"])){
	$livreurC->supprimerlivreur($_POST["cin_livreur"]);
	header('Location: c.php');
}

?>