<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    
    class Boutique_controler {
        
        private $_BDD;
        
			function __construct() {
			
				$this->_BDD = new DB();
			}
			
			
			public function getServers() {
				
					$req = $this->_BDD->ReturnSite()->query("SELECT * FROM module_boutique_servers ORDER by id");
					if($req){
						
					  $tableau = $req->fetchAll();
					  return $tableau;
					} 
			   
			   return false;
			}
			
			public function getBoutique() {
		
					$req = $this->_BDD->ReturnSite()->query("SELECT * FROM module_boutique WHERE servers=".$_GET['s']);
					$tableau = $req->fetchAll();
					return $tableau;
			}
				
			public function getInfosBoutiqueCodex() {
							
				$req = $this->_BDD->ReturnSite()->query("SELECT * FROM module_boutique_produit WHERE servers=".$_GET['s']." AND type_cat=".$_GET['cat']);
				
				if($req){
					
				  $tableau = $req->fetchAll();
				  return $tableau;
			    } 
			   
			   return false;
			} 
			
			public function getProduitBoutique() {
							
				$req = $this->_BDD->ReturnSite()->query("SELECT * FROM module_boutique_produit WHERE servers=".$_GET['s']." AND id_item=".$_GET['item']);
				
				if($req){
					
				  $tableau = $req->fetchAll();
				  return $tableau;
			    } 
			   
			   return false;
			} 

			public function multiProduit($cat, $item, $id, $quantite = 1) {
				
				$req = $this->_BDD->ReturnSite()->query("SELECT prix FROM module_boutique_produit WHERE id_item=".$item." AND type_cat=".$cat);
				$prix = $req->fetch();
				$prixtotal = $quantite * $prix[0];
				
				$req = $this->_BDD->ReturnAuth()->query("INSERT INTO module_panier SET id_account=".$id.", type_cat=".$cat.", produit=".$item.", quantite_produit=".$quantite.", prix_total=".$prixtotal);	
			}
			
			public function getPanier() {
				$req = $this->_BDD->ReturnAuth()->query("SELECT * from module_panier WHERE id_account=".$_SESSION['user']->getId());
				$tableau = $req->fetchAll();
				$req = $this->_BDD->ReturnSite()->query("SELECT * FROM module_boutique_produit");
				$tab2 = $req->fetchAll();
				
				$tabtmp = array(); // on créer un tableau temporaire
				
				foreach($tab2 as $infos) {
					 $tabtmp[$infos['id_item']][0]= $infos['name']; // assigne le nom de l'item à son id. l'id étant l'indice du tableau $tab[0] ca c'est un indice
					 $tabtmp[$infos['id_item']][1]= $infos['image'];
				}
				$tabFinal = array();
				foreach($tableau as $ligne)
				{
					$ligne["name"] = $tabtmp[$ligne["produit"]][0]; // compare l'id au nom de l'item
					$ligne["image"] = $tabtmp[$ligne["produit"]][1]; // compare l'id au nom de l'item
					array_push($tabFinal,$ligne);
 				}
				
				return $tabFinal;
			}		
        }
		
?>