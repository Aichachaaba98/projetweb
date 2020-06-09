<?PHP
include "../Cores/commandeC.php";
include "../Entities/commande.php";

$commandeC=new commandeC();
if (isset($_POST["id_commande"]))
{



	$commande=$commandeC->recuperercommande($_POST["id_commande"]);
	$info=$commande->fetch();
	$commande=new commande($info["id_commande"],$info["login"],$info["id_panier"],$info["date_commande"],$info["etat"],$info["mode_payement"]);


	$valider="Validee";
	//$commande->set_etat("v");
	$commandeC->modifiercommande2($_POST["id_commande"],$valider);
	/*$dateactuelle = date("Y-m-d");
	$commande->set_date_commande($dateactuelle);*/
	
	/*$somme=0;
	$clientC=new clientC();
    $client1=$clientC->recupererclient($_SESSION['id']);
    $client=$client1->fetch();
    $mail=$client["Email"];
   

    $clientC->mailcommande($mail,$somme,$dateactuelle);


	$commandeC->ajouterhistorique($commande);
	$commandeC->supprimercommande($_POST["idCommande"]);*/

/*if ($valider="Validee")
{

include "../Nexmo/src/NexmoMessage.php" ;



	

/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	//$nexmo_sms = new NexmoMessage('affa8ba8','FslUN98Kviv3fcbM');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	//$info = $nexmo_sms->sendText( '21625102490', 'makhla', 'votre commande est validee ' );

	// Step 3: Display an overview of the message
	

	// Done!  


}

?>