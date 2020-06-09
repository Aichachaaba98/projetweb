<?php

require_once("/config.php");

$msg = "";

if (isset($_POST["submit"])) { {
        $login = $_POST["login"];
        $password = $_POST["mdp"];
        $sql = "SELECT * FROM admin";
        $db = config::getConnexion();

        $stmt = $db->query($sql);

        while ($data = $stmt->fetch()) {
            if (($data['login']) == $login && $data['mdp']) {
                $msg = "okkkk";
               /* session_start();
        $_SESSION['login']=$_POST['login'];
        $_SESSION['mdp']=$_POST['mdp'];*/
        
        //header("location:page_membre.php");
                echo "<script>window.open('page off.php?id=loginsucces','_self')</script>";
            } else {
                $msg = "email or password incorrect";
            }
        }
    }
}


?>