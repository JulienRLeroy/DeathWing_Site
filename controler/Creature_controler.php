<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    
    class Creature_controler {
        
        private $_BDD;
		private $_delimiter = 6;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
			
			public function getCodexCreature($p = 1) {
					
					$delimiter = $this->_delimiter;
					
					if($p == 1) {
						$count = 0;
					}
					else {
						$count = ($p - 1) * $delimiter;
					}
					
					$req = $this->_BDD->ReturnSite()->query("SELECT * FROM codex_creature mc LIMIT $count,$delimiter");
					$tableau = $req->fetchAll();
					if($req->rowCount() == 0) {
						$_SESSION['erreur'] = "La page demandée n'existe pas, nous vous avons redirigé sur une page qui existe";
						redirectionCreature();
						return;
					}
					return $tableau;
					
					if(!isset($_GET['c'])) {
						$tableau = $methodCreature->getCodexCreature(); // si ya 1000 lignes 
					}
					else {
						
						if($_GET['c'] >= '1' ) { 
							$tableau = $methodCreature->getCodexCreature($_GET['c']);
						} else {
							$_SESSION['erreur'] = "La page demandée n'existe pas, nous vous avons redirigé sur une page qui existe";
							redirectionCreature();
							return;
						}
						
					}
			}
				
			public function countCreature() {
				
				$req = $this->_BDD->ReturnSite()->query("SELECT count(id) as nb_ligne FROM codex_creature");
				$num = $req ->fetch();
	
				$delimiter = $this->_delimiter;
				$ligne = $num['nb_ligne'] / $delimiter;
				$modulo = $num['nb_ligne'] % $delimiter;
				
				if($modulo != 0) {
					$ligne++; 
				}
				
				for($i = 1; $i <= $ligne; $i++) {
					echo '<li>
							<a href="?p=creature&c='.$i.'">'.$i.'</a>
						</li>';
				}
			}
			
			public function getInfosCreatureCodex($id)
			{
				$req = $this->_BDD->ReturnSite()->query("SELECT type, name FROM codex_creature_type WHERE id_codex='$id'");
				return $req->fetchAll();
			}
        }
?>