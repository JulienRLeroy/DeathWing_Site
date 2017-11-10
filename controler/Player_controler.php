<?php 

    
    class Player_controler {
        
        private $_BDD;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
			
			public function Login($ndc, $mdp) {
				
				$mdp_crypt = sha1(strtoupper($ndc) . ":" . strtoupper($mdp)); // Le mdp est $ndc + : + $mdp
				$ndc = htmlentities($this->_BDD->ReturnAuth()->quote($ndc)); // 
				$req = $this->_BDD->ReturnAuth()->query("SELECT * FROM account WHERE username=$ndc AND sha_pass_hash='$mdp_crypt'");
				
				if($tab = $req ->fetch()) {
				   
					 $_SESSION['user'] = new Player($tab['username'], $tab['email'], $tab['vote'], $tab['id'], $tab['last_ip'], $tab['parrain']); // COPIE DE LA CLASS PLAYER
					 
					 return true;
				}
				
				return false;
			}
			
			public function Register($ndc, $mdp, $email) {
				
			   $mdp_crypt = $this->_BDD->ReturnAuth()->quote(sha1(strtoupper($ndc) .":". strtoupper($mdp))); // Le mdp est $ndc + : + $mdp
			   $ndc = htmlentities($this->_BDD->ReturnAuth()->quote($ndc)); 
			   $email = htmlentities($this->_BDD->ReturnAuth()->quote($email));
			   
			   $req = $this->_BDD->ReturnAuth()->query("INSERT INTO account SET username=$ndc, email=$email, sha_pass_hash=$mdp_crypt");
			   if($req){
				   return true;
			   } 
			   
			   return false;
			}
			
			
			public function SetParrain($id, $parrain) {
				
				$tmpparrain = $parrain;
				$id = htmlentities($this->_BDD->ReturnAuth()->quote($id)); 
				$parrain = htmlentities($this->_BDD->ReturnAuth()->quote($parrain)); 
				
			   
				$req = $this->_BDD->ReturnAuth()->query("UPDATE account SET parrain=$parrain WHERE id=$id");
				
				if($req)	{
					$_SESSION['user']->setParrainvisual($tmpparrain); 
					return true;
				} 
			   
			   return false;
			}
			
			public function SetEmail($id, $email) {
				
				$tmpemail = $email;
				$id = htmlentities($this->_BDD->ReturnAuth()->quote($id)); 
				$email = htmlentities($this->_BDD->ReturnAuth()->quote($email)); 
			   
				$req = $this->_BDD->ReturnAuth()->query("UPDATE account SET email=$email WHERE id=$id");
				if($req)	{
					$_SESSION['user']->setEmailvisual($tmpemail); 
					return true;
				} 
			   
			   return false;
			}
			
			 public function SetNewsMdp($id, $ndc, $newsMdp) {
			   
			   $id = htmlentities($this->_BDD->ReturnAuth()->quote($id)); 
			   $newsMdp_crypt = $this->_BDD->ReturnAuth()->quote(sha1(strtoupper($ndc) .":". strtoupper($newsMdp))); 
			   $ndc = htmlentities($this->_BDD->ReturnAuth()->quote($ndc));  // Le mdp est $ndc + : + $mdp
			   ;
			   $req = $this->_BDD->ReturnAuth()->query("UPDATE account SET sha_pass_hash=$newsMdp_crypt WHERE username=$ndc AND id=$id");
			   if($req){
				   return true;
			   } 
			   
			   return false;
			}
			
			public function getPlayerOnline($faction) {
				
				$req = $this->_BDD->ReturnChar()->query("SELECT race FROM characters WHERE online='1'");
				$cptA =0;
				$cptH =0;
				$cptH == $cptA;

				while($co = $req->fetch())
				{
					if(($co["race"] == "1") ||($co["race"] =="3" ) || ($co["race"] =="4") || ($co["race"] =="7") || ($co["race"] =="11") || ($co["race"] =="22")) {
						$cptA++;
					} else {
						$cptH++;
					}
				}

				if($faction == "h") {
					return $cptH;
				} elseif($faction == "a") {
					return $cptA;
				} else {
					$total = $cptA+$cptH;
					return $total;
				}
			}
			

			
			public function getChar() {
				
				$req = $this->_BDD->ReturnChar()->query("SELECT * FROM characters WHERE account='".$_SESSION['user']->getId()."'");
				$tableau = $req->fetchAll();
				$tmp = array();
				
				if(count($tableau) !=0) {
					
					foreach($tableau as $infos) {
						
						if($infos['money'] == 0) {
							
							$infos['money'] = "0";
							
						} else {
							
							$total_gold = $infos['money'];
							$po = floor($total_gold / 10000);
							$pa = substr(substr($total_gold, 0, -2), -2) == "" ? "0" : substr(substr($total_gold, 0, -2), -2);
							$pc = substr($total_gold, -2);
							
							$infos['money'] = 
							$po."<img src='./front/img/icon/money/gold.png' height='10px'> ".
							$pa."<img src='./front/img/icon/money/silver.png' height='10px'> ".
							$pc. "<img src='./front/img/icon/money/copper.png' height='10px'> ";
						}
						
						switch($infos['class']) {
							case 1:  // WARRIOR
								$infos['class'] = "<img src='./front/img/icon/class/war.png' height='30'>";
							break;
							case 2: // PALADIN
								$infos['class'] = "<img src='./front/img/icon/class/paladin.png' height='30'>";
							break;
							case 3: // HUNTER
								$infos['class'] = "<img src='./front/img/icon/class/hunter.png' height='30'>";;
							break;
							case 4: // ROGUE
								$infos['class'] = "<img src='./front/img/icon/class/rogue.png' height='30'>";
							break;
							case 5: // PRIEST
								$infos['class'] = "<img src='./front/img/icon/class/priest.png' height='30'>";
							break;
							case 6: // DK
								$infos['class'] = "<img src='./front/img/icon/class/dk.png' height='30'>";
							break;
							case 7: // CHAMAN
								$infos['class'] = "<img src='./front/img/icon/class/shaman.png' height='30'>";
							break;
							case 8: // MAGE
								$infos['class'] = "<img src='./front/img/icon/class/mage.png' height='30'>";
							break;
							case 9: // WARLOCK
								$infos['class'] = "<img src='./front/img/icon/class/warlock.png' height='30'>";
							break;
							case 11: // druid
								$infos['class'] = "<img src='./front/img/icon/class/druid.png' height='30'>";
							break;
						} 
						
						switch($infos['race']) {
							case 1:  // humain
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/humaine.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/humain.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 2: // orc
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/orcquette.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/orc.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 3: // nain
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/Naine.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/Nain.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 4: // elfe de la nuit
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/nightelfF.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/nightelfM.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 5: // UD
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/udf.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/ud.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 6: // TAUREN
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/taurenF.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/tauren.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 7: // Gnome
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/Gnomette.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/gnome.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 8: // Troll
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/trolette.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/troll.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 9: // Goblin
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/gobf.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/gob.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 10: // Blood elfe
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/bloodelfF.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/bloodelfM.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 11: // Draenei
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/Draf.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/draM.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
							case 22: // Worgen
								if($infos['gender'] != 0) {
									 $infos['race'] = "<img src='./front/img/icon/race/worf.png' height='30'>";
									} else {
									 $infos['race'] = "<img src='./front/img/icon/race/worfm.png' height='30'>";
									}
								array_push($tmp, $infos);
							break;
						}

					}
					return $tmp;
				}
				else {
					echo "<div class='center'>
							<span>Vous n'avez aucun personnage créer</span>
						</div>";
					return $tmp;
				}
			}
		
        }
?>