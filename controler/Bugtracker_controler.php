<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    
    class Bugtracker_controler {
        
        private $_BDD;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
			
			public function getBugtrackerEnCours() {
		
					$req = $this->_BDD->ReturnSite()->query("SELECT * FROM module_bugtracker WHERE etat='0'");
					$tableau = $req->fetchAll();
					return $tableau;
			}	
			
			public function getBugtrackerFix() {
		
					$req = $this->_BDD->ReturnSite()->query("SELECT * FROM module_bugtracker WHERE etat='1'");
					$tableau = $req->fetchAll();
					return $tableau;
			}	
			
			public function AddBugTracker() {
				
					$req = $this->_BDD->ReturnSite()->query("INSERT INTO module_bugtracker SET db=$id, id=$id_user");
					$tableau = $req->fetchAll();
					return $tableau;
			}
        }
		
?>