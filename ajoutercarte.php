<?PHP
include "../Cores/carteC.php";

if (
  isset($_POST['id_carte']) and isset($_POST['login']) and isset($_POST['points'])   
   ) 
   {
  
  if (
    !empty($_POST['id_carte']) and !empty($_POST['login']) and !empty($_POST['points'])
     )
  {
       
    $carte1 = new carte($_POST['id_carte'], $_POST['login'], $_POST['points']);
       $carte1C=new carteC(); 
       $carte1C->ajoutercarte($carte1);

      header('Location: affichercarte.php');
   }

} 
else {
  echo "vérifier les champs";
     }
?>