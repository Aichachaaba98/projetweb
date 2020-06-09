<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 

include '../Cores/adminC.php';
include 'dbconfig.php';



$c=new Database();
$conn=$c->connexion();
$admin=new adminC();
$u=$admin->Logedin($conn,$_POST['login'],$_POST['mdp']);


$vide=false;
if (!empty($_POST['login']) && !empty($_POST['mdp'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['login']==$_POST['login'] && $t['mdp']==$_POST['mdp']){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['mdp'];
		header("location:../../../Back/Views/index.php");
		
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Admin non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>