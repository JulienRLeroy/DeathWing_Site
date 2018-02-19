<?php 

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    
    class Mj_controler {
        
        private $_BDD;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
			
			public function SetNpcStartEnd($id_start, $id_npc_start, $id_end, $id_npc_end) 
			{
				
			   $id_start = htmlentities($this->_BDD->ReturnWorldFun()->quote($id_start)); 
			   $id_npc_start = htmlentities($this->_BDD->ReturnWorldFun()->quote($id_npc_start));
			   $id_end = htmlentities($this->_BDD->ReturnWorldFun()->quote($id_end));
			   $id_npc_end = htmlentities($this->_BDD->ReturnWorldFun()->quote($id_npc_end));

				$req_verif = $this->_BDD->ReturnWorldFun()->query("SELECT * FROM creature_questrelation WHERE id=$id_start");
				
				if($req_verif = true) {
					return false; 
				} else {
					$req = $this->_BDD->ReturnWorldFun()->query("INSERT INTO creature_questrelation SET id=$id_start, quest=$id_npc_start"); 
				}
			
				// $req = $this->_BDD->ReturnWorldFun()->query("INSERT INTO creature_questrelation SET id=$id_start, quest=$id_npc_start"); 
				// $req2 = $this->_BDD->ReturnWorldFun()->query("INSERT INTO creature_involvedrelation SET id=$id_end, quest=$id_npc_end");
				
				
				
				//marche pas
					
				if($req && $req2){
					
				  return true;
			  } 
			   
			  return false;
			}
		
		} 
		
?>