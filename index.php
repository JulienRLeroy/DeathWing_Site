﻿<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    include_once "function/connect.php";
	include_once "function/SetMessage.php";
	include_once "function/redirection.php";
	include_once "class/connect_db.php";
    include_once "class/player.php";
	include_once "controler/Player_controler.php";
	include_once "controler/Creature_controler.php";
	include_once "controler/Quest_controler.php";
	include_once "controler/Boutique_controler.php";
	include_once "controler/Bugtracker_controler.php";
	$methodPlayer = new Player_controler();
	$methodCreature = new Creature_controler();
	$methodQuest = new Quest_controler();
	$methodBoutique = new Boutique_controler();
	$methodBugtracker = new Bugtracker_controler	();
	session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>DeathWing</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./front/css/styles.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
			<header>
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<img class="navbar-brand" src="./front/img/d_header.png">
						</div>
						<ul class="nav navbar-nav">
							<li class="">
								<a href="./">Accueil</a>
							</li>
							<li>
								<a href="?p=join">Nous rejoindre</a>
							</li>
							<li>
								<a href="?p=forum">Forum</a>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
    						<?php 
    						if(!IsLogged()) 
    						{ 
    						?>
    						
    							<li>
    								<a href="?p=register_login"><span class="glyphicon glyphicon-user"></span>Inscription</a>
    							</li>
    							<li>
    								<a href="?p=register_login"><span class="glyphicon glyphicon-log-in"></span>Connexion</a>
    							</li>
    						<?php 
                            }
                            else 
                            {
                                echo '<li><a href="?p=logout"><span class="glyphicon glyphicon-remove"></span>Deconnexion</a></li>';
                                echo '<li><a href="?p=compte"><span class="glyphicon glyphicon-user"></span>' . $_SESSION['user']->getUsername().'</a></li>';
                            }
    						?>
						</ul>
					</div>
				</nav>
			</header>
			
			<div class="col-md-12 hidden-xs conteneur_logo nopadding">	
				<img src="./front/img/logo_dw.png" height="150px"> 
			</div>

			<div class="container">
				<div class="col-md-12 col-xs-12 nopadding cadre">
					<div class="col-md-12">
						<div class="navbar navbar-inverse">
							<ul class="nav navbar-nav">
									<li>
										<a href="?p=bugtracker">BugTracker</a>
									</li>
							<?php 
								if(!IsLogged()) 
								{ 

								}
								else 
								{
							?>
									<li>
										<a href="?p=servers">Servers</a>
									</li>
									<li>
										<a href="?p=boutique">Boutique</a>
									</li>
									<li>
										<a href="?p=vote">Voter</a>
									</li>
									<li>
										<a href="?p=codex">Codex</a>
									</li>
							<?php
								}
							?>
							</ul>
						</div>
					</div>
					<div class="col-md-12">
						<?php
							setMessage();
						?>
					</div>
					<div class="col-md-12 contenu">
						<?php
						
							if(isset($_GET["p"])) {
								if(file_exists("pages/".$_GET["p"].".php")) {
									include("pages/".$_GET["p"].".php");
								} else {
									$_SESSION['erreur'] = "La page demandée n'existe pas";
									Header("Location: ./");
								}
							}
							else {
									include("include/news.php");
									include("include/servers.php");
							}
						?>
					</div>
				</div>
			</div>
		
		<footer class="col-md-12 center nopadding">
			<ul class="nopadding nolist">
				<li>© 2017 - Deathwing tout droit réservé</li>
				<li>© 2017 - Ce site est une propriété de Deathwing. Toute reproduction est interdite.</li>
			</ul>
		</footer>
	</body>
</html>
