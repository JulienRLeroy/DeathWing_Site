<?php

include_once "../action/include.php";

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