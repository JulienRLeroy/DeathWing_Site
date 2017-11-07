<?php 
function IsLogged() {
    
    if(isset($_SESSION['user'])) {
        
        return true;
    }
    
    return false; 
}


function NotLogged() {
	
	if(!Islogged()) {
		$_SESSION['erreur'] = "Vous devez être connecté pour accéder à cette page.	";
		Header("Location: ./");
	}
}

?>