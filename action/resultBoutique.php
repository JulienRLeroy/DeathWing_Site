<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once "../controler/Boutique_controler.php";
include_once "../controler/Player_controler.php";
include_once "../class/connect_db.php";
include_once "../class/player.php";
$methodBoutique = new Boutique_controler();
session_start();

if(isset($_POST['ResultBoutiqueMulti'])) {

	$cat = $_POST['cat'];
	$quantite = isset($_POST['produit_quant']) ? $_POST['produit_quant'] : 1;
	$item = $_POST['item'];
	
	if (empty($_POST['item']) or empty($_POST['cat'])) {
		
		$_SESSION['erreur'] = "Vous avez supprimé des informations relative à la sécurité, nous ne pouvons poursuivre l'achat.";
		header("Location: ../?p=boutique");
		
	} else if($quantite <= 0) {
		$_SESSION['erreur'] = "Ce n'est pas bien de vouloir truander.";
		header("Location: ../?p=boutique");
	}
	else {
		
		$methodBoutique->multiProduit($cat, $item, $_SESSION['user']->getId(), $quantite);
		$_SESSION['valide'] = "L'achat a bien été effectué, vous pouvez à tout moment le retirer dans votre panier.";
		header("Location: ../?p=panier");
		
	}
}

?>