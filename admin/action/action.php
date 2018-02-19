<?php
include_once "../action/include.php";
session_start();

if(isset($_POST['send_start_end'])) {
	
	$id_start = $_POST['id_quest_start'];
	$id_npc_start = $_POST['id_npc_start'];
	
	$id_end = $_POST['id_quest_end'];
	$id_npc_end = $_POST['id_npc_end'];
	
	if(empty($id_start) || empty($id_npc_start) || empty($id_end) || empty($id_npc_end)) {
		
		
		$_SESSION['erreur'] = "Veuillez remplir tous les champs". "id s : ".$id_start. " id npc start ".$id_npc_start." id end ".$id_end. " id np end ".$id_npc_end;
		 Header("Location: ../?p=questNPC ");
		 
	} else {
             // echo "INSERT INTO creature_questrelation SET id=".$id_start.", quest=".$id_npc_start."";
				// echo "INSERT INTO creature_involvedrelation SET id=".$id_end.", quest=".$id_npc_end."";
            $methodGm = new Mj_controler();
            if($methodGm->SetNpcStartEnd($id_start, $id_npc_start,$id_end, $id_npc_end)) {
              
                $_SESSION['valide'] = "L'adresse email a été mise à jours";
                Header("Location: ../?p=questNPC ");
            }
            else 
            {
				die('test');
                $_SESSION['erreur'] = "ERREUR : Veuillez contacter l'administrateur du site";
                Header("Location: ../?p=questNPC ");
            }
           
        }
}



?>