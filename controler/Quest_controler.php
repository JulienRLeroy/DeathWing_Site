<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    
    class Quest_controler {
        
        private $_BDD;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
			
			public function getCodexQuest() {
		
					$req = $this->_BDD->ReturnSite()->query("SELECT * FROM codex_quest");
					$tableau = $req->fetchAll();
					return $tableau;
			}
				
			public function getInfosQuestCodex()
			{
				$req = $this->_BDD->ReturnSite()->query("SELECT * FROM codex_quest WHERE idquest=".$_GET['id']."");
				$tableau = $req->fetchAll();
				return $tableau;
			} 
        }
?>