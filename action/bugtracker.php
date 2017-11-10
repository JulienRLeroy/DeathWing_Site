<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include_once "../controler/Bugtracker_controler.php";
include_once "../class/connect_db.php";
include_once "../class/player.php";
session_start();

if(isset($_POST['bugtrackersubmit'])) {
        
        $id = $_SESSION['user']->getId();
        $descript_bug = $_POST['descript_bug'];
		$importance = $_POST['importance'];
		$cat = $_POST['cat'];
        
        if(empty($descript_bug))
        {
           $_SESSION['erreur'] = "Veuillez renseigner la description du bug";
		   header("Location: ../?p=bugtracker");
		   
        } else if ($importance != 1 || 2 || 3 || 4) {
			
			$_SESSION['erreur'] = "Ce n'est pas bien de vouloir truhander";
		    header("Location: ../?p=bugtracker");
			
		} else if ($cat != 1 || 2 || 3 || 4 || 5) {
			
			$_SESSION['erreur'] = "Ce n'est pas bien de vouloir truhander";
		    header("Location: ../?p=bugtracker");
			
		} else {
			$_SESSION['valide'] = "Report de bug envoyé, merci pour votre intérêt porté au serveur";
			
		}
    }

?>
