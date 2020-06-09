<?PHP
include "../Cores/adminC.php";



echo ("page test");

/*$file_name = $_FILES['avatar']['name'];
	$file_tmp_name = $_FILES ['avatar']['tmp_name'];
	$file_dest = 'membres/avatars/'.$file_name;
	move_uploaded_file($file_tmp_name, $file_dest);*/

if (
	isset($_POST['login']) and isset($_POST['mdp']) 
) {
	if (
		!empty($_POST['login']) and !empty($_POST['mdp']) 
	) {
		$admin1 = new admin($_POST['login'], $_POST['mdp']);

		$admin1C = new adminC();
		$admin1C->ajouteradmin($admin1);
		header('Location: afficheradmin.php');
		 }
    else {echo "vérifier les champs";}
	
} else {
	echo "vérifier les champs";
}
