<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include_once "../controler/Player_controler.php";
include_once "../class/connect_db.php";
include_once "../class/player.php";
session_start();

if(isset($_POST['setParrain'])) {
        
        $id = $_SESSION['user']->getId();
        $parrain = $_POST['parrain'];
        
        if(empty($parrain)) 
        {
           $_SESSION['erreur'] = "Veuillez renseigner votre parrain avant de valider";
		   Header("Location: ../?p=compte");
		   
        } else {
            
            $methodPlayer = new Player_controler();
            if($methodPlayer->SetParrain($id, $parrain)) {
                
                $_SESSION['valide'] = "Votre parrain a bien été renseigné";
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