<?php

include "../config.php";

use PHPMailer\PHPMailer\PHPMailer;
 require "PHPMailer/src/PHPMailer.php";
        require "PHPMailer/src/SMTP.php";
        require "PHPMailer/src/Exception.php";

if (isset($_POST["email"])) {
    
  //  require_once("config.php");
    $email = $_POST['email'];
    $db = config::getConnexion();
$req = $db->query("SELECT count(*) as s FROM clients WHERE email='$email' ");
if($req->fetch()['s'] > 0 )
 {
        //-----------------------------------------------------------mail-------------------

$contenu = $db->query("SELECT mdp FROM clients WHERE email='$email' ");

       



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
        $mail->Username = "ziedkamoun123@gmail.com";
        $mail->Password = "Kamoun1966";

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
        $mail->Subject = "Password ";
        //set body
        $mail->Body = "hh";
        //add attachment
        //$mail->addAttachment("../annap/img/anna.jpg" , "annap");

        if ($mail->send()) {
            echo "email is sent";
            header('Location:forget-password.html');

        } else {
            echo "something wrong happened " . $mail->ErrorInfo;;
        }






        //-----------------------------------------------------------------------------









        echo "<script>window.open('forget-password.html?id=registerSucceed','_self')</script>";
    }
}
