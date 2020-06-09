<?PHP
include "../Cores/clientC.php";
use PHPMailer\PHPMailer\PHPMailer;


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
		header('Location: afficherclient.php');
		 }
    else {echo "vérifier les champs";}
	
} else {
	echo "vérifier les champs";
}
//*/
/*if ($Execute) {
        //-----------------------------------------------------------mail-------------------


        require "PHPMailer/src/PHPMailer.php";
        require "PHPMailer/src/SMTP.php";
        require "PHPMailer/src/Exception.php";



        //create an instance of the PHPMailer
        $mail = new PHPMailer;
        //set a host
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPDebug = 3;
        //enable smtp
        $mail->isSMTP();
        //set authetication to true
        $mail->SMTPAuth = true;

        //set login details for Gmail account
        $mail->Username = "elyes.ghrairi@esprit.tn";
        $mail->Password = "181JMT1844";

        //set type protection
        $mail->SMTPSecure = "ssl"; //or we can use TLS

        //set a port
        $mail->Port = 465; // or 587 if TLS
        //set who is sending an email
        $mail->setFrom("elyes.ghrairi@esprit.tn", "moula site");

        //set where we are sending email(reciepent)
        $mail->addAddress($email);

        //set html t
        $mail->isHTML(true);
        //set a subject
        $mail->Subject = "hello " . $mdp;
        //set body
        $mail->Body = "you are now part of the family <3 
 sincerely athome administration
 ";

        //add attachment
        //$mail->addAttachment("../annap/img/anna.jpg" , "annap");

        if ($mail->send()) {
            echo "email is sent";
            header('Location: index.php');

        } else {
            echo "something wrong happened " . $mail->ErrorInfo;;
        }


        echo "<script>window.open('index.php?id=registerSucceed','_self')</script>";
    }