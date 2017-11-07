<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    include_once "../controler/Player_controler.php";
	include_once "../class/connect_db.php";
	include_once "../class/player.php";
	session_start();
		
    if(isset($_POST['login'])) {
        
        $ndc = $_POST['ndc'];
        $mdp = $_POST['mdp'];
        
        if(!empty($ndc) && !empty($mdp)) 
        {
            
            $methodPlayer = new Player_controler();
            if($methodPlayer->Login($ndc, $mdp)) 
            {
                Header("Location: ../?p=compte");
            } 
            else 
            {
                $_SESSION['erreur'] = "Nom de compte ou mot de passe invalide"; 
                Header("Location: ../?p=register_login");
            } 
        }
        else {
            $_SESSION['erreur'] = "Veuillez remplir tous les champs"; 
            Header("Location: ../?p=register_login");
        } 
    }
    
    if(isset($_POST['sub'])){
        
        $ndc = $_POST['ndc'];
        $mdp = $_POST['mdp'];
        $mdp_verif = $_POST['mdp_verif'];
        $email = $_POST['email'];
        
        if(empty($ndc)) 
        {
            $_SESSION['erreur'] = "Veuillez remplir un nom de compte";
            Header("Location: ../?p=register_login");
        } 
        else if(empty($mdp)) 
        {
            $_SESSION['erreur'] = "Veuillez remplir un mot de passe";
            Header("Location: ../?p=register_login");
        }
        else if(empty($mdp_verif))
        {
            $_SESSION['erreur'] = "Veuillez remplir la vérification de mot de passe";
            Header("Location: ../?p=register_login");
        }
        else if(empty($email)) 
        {
            $_SESSION['erreur'] = "Veuillez remplir un email";
            Header("Location: ../?p=register_login");
        }
        else if($mdp != $mdp_verif) {
            
            $_SESSION['erreur'] = "Les mots de passe ne correpondent pas";
            Header("Location: ../?p=register_login");
        } 
        else {
            
            $methodPlayer = new Player_controler();
            if($methodPlayer->Register($ndc, $mdp, $email)) {
                
                $methodPlayer->Login($_POST['ndc'], $_POST['mdp']);
                Header("Location: ../?p=compte");
            }
            else 
            {
                $_SESSION['erreur'] = "ERREUR : Veuillez contacter l'administrateur du site";
                Header("Location: ../?p=register_login");
            }
           
        }
        
    }
	
		if(isset($_POST['SetNewsMdp'])) {
        
        $id = $_SESSION['user']->getId();
		$ndc = $_SESSION['user']->getUsername();
        $newsMdp = $_POST['newsMdp'];
        $newMdpVerif = $_POST['newMdpVerif'];
        
        if(empty($newsMdp)) 
        {
            $_SESSION['erreur'] = "Veuillez remplir votre nouveau mot de passe";
            Header("Location: ../?p=compte");
        } 
        else if(empty($newMdpVerif)) 
        {
            $_SESSION['erreur'] = "Veuillez remplir la vérification du nouveau mot de passe";
            Header("Location: ../?p=compte");
        }
		else if ($_POST['newsMdp'] != $_POST['newMdpVerif']) {
			
			$_SESSION['erreur'] = "Les mots de passe ne correspondent pas";
            Header("Location: ../?p=compte");
		}
        else {
            
            $methodPlayer = new Player_controler();
            if($methodPlayer->SetNewsMdp($id, $ndc, $newsMdp)) {
                
				$_SESSION['valide'] = "Mot de passe changé avec succès !";
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