<?PHP
include "../Cores/adminC.php";
$adminC=new adminC();
if (isset($_POST["login"])){
	$adminC->deleteadmin($_POST["login"]);
	header('Location: afficheradmin.php');
}

?>