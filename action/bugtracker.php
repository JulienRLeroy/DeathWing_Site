<?php

include_once "../action/include.php";
 

if(isset($_POST['bugtrackersubmit'])) {
        
        $id = $_SESSION['user']->getId();
		$titre = $_POST['titre'];
        $descript_bug = $_POST['descript_bug'];
		$importance = intval($_POST['importance']);
		$cat = intval($_POST['cat']);
        
        if(empty($descript_bug))
        {
           $_SESSION['erreur'] = "Veuillez renseigner la description du bug";
		   header("Location: ../?p=bugtracker");
		   
        }  else if (empty($titre)) {
			
		   $_SESSION['erreur'] = "Veuillez renseigner un titre";
		   header("Location: ../?p=bugtracker");
			
		} else if(strlen($titre) >= 31) { 
			
		   $_SESSION['erreur'] = "La taille de votre titre est trop grande ";
		   header("Location: ../?p=bugtracker");
			
		} else if($importance > 4 || $importance < 1) {
			
			$_SESSION['erreur'] = "Ce n'est pas bien de vouloir truander";
            header("Location: ../?p=bugtracker");
			
		} else if($cat > 5 || $cat < 1) {
			
			$_SESSION['erreur'] = "Ce n'est pas bien de vouloir truander 2";
            header("Location: ../?p=bugtracker");
			
		} else {
			
			$methodPlayer = new Player_controler();
            if($methodPlayer->AddBugTracker($id, $titre, $descript_bug, $cat, $importance)) {
                
                $_SESSION['valide'] = "Report de bug envoyé, merci pour votre intérêt porté au serveur";
                header("Location: ../?p=bugtracker");
            }
            else 
            {
                $_SESSION['erreur'] = "ERREUR : Veuillez contacter l'administrateur du site";
                header("Location: ../?p=bugtracker");
            }
			
		}
    }

?>
