<?php 
function IsLogged() {
    
    if(isset($_SESSION['user'])) {
        
        return true;
    } 
    
    return false; 
}

function NotAdmin() {
    
    if(isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
        
       $_SESSION['erreur'] = "Vous ne faites pas partie du staff, cette page n'est pas pour vous";
	   Header("Location: ../admin/");
	}
}

function NotLogged() {
	
	if(!IsLogged()) {
		$_SESSION['erreur'] = "Vous devez être connecté pour accéder à cette page.	";
		Header("Location: ../?p=register_login");
	}
}

?>