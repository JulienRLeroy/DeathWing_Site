<?php 
	class DB {
		
		private $login = "Kess";
		private $mdp = "kess62880";
		
		public function ReturnAuth() {
			try {
				$auth = new PDO('mysql:host=127.0.0.1;dbname=auth;charset=utf8mb4', $this->login, $this->mdp);
				return $auth;
			}
			catch(Exception $e)
			{
				echo 'N° : '.$e->getCode();
			}
		}
		
		public function ReturnChar() {
			
			try {
				$char = new PDO('mysql:host=127.0.0.1;dbname=characters;charset=utf8mb4',  $this->login, $this->mdp); 
				return $char;
			}
			catch(Exception $e)
			{
				echo 'N° : '.$e->getCode();
			}
		}
		
		public function ReturnCharPvP() {
			
			try {
				$char = new PDO('mysql:host=127.0.0.1;dbname=characterspvp;charset=utf8mb4',  $this->login, $this->mdp); 
				return $char;
			}
			catch(Exception $e)
			{
				echo 'N° : '.$e->getCode();
			}
		}
		
		public function ReturnSite() {
			
			try{
				$site = new PDO('mysql:host=127.0.0.1;dbname=site_wow;charset=utf8mb4',  $this->login, $this->mdp);
				return $site;
			}
			catch(Exception $e)
			{
				echo 'N° : '.$e->getCode();
			}
		}
	}
?>