<?php

include_once "../controler/Player_controler.php";
include_once "../class/connect_db.php";
include_once "../class/player.php";
session_start();

if(isset($_POST['SetNewsEmail'])){
        
		$id = $_SESSION['user']->getId();
        $email = $_POST['email'];
        $email_verif = $_POST['email_verif'];
        
        if(empty($email)) 
        {
            $_SESSION['erreur'] = "Veuillez remplir l'adresse email";
			Header("Location: ../?p=compte");
        } 
        else if(empty($email_verif)) 
        {
            $_SESSION['erreur'] = "Veuillez remplir la vérification de l'adresse email";
			Header("Location: ../?p=compte");
        } 
		else if ($email != $email_verif) {
			
			$_SESSION['erreur'] = "L'adresse email répété n'est pas correct";
			Header("Location: ../?p=compte");
		}
        else {
            
            $methodPlayer = new Player_controler();
            if($methodPlayer->SetEmail($id, $email)) {
                
                $_SESSION['valide'] = "L'adresse email a été mise à jours";
                Header("Location: ../?p=compte");
            }
            else 
            {
                $_SESSION['erreur'] = "ERREUR : Veuillez contacter l'administrateur du site";
                Header("Location: ../?p=compte");
            }
           
        }
}

?>