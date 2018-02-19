<?php
include_once("../class/connect_db.php");
include_once("../function/connect.php");
include_once "../function/redirection.php";
session_start();

NotLogged();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>DeathWing</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../front/css/styles.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="../front/js/utils.js"></script>
	</head>
	<body>
				
		<header>
			<center>
				<h1>
					<label>Interface Administrateur DeathWing</label>
				</h1>
				<hr />
			</center>
		</header>
	
		<div class="container">
			<div class="col-md-12 nopadding pages_admin">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<ul class="nav navbar-nav">
							<?php
								if(isset($_SESSION['user'])) {
									?>
										<li class="">
											<a href="./">Accueil</a>
										</li>
										<li>
											<a href="?p=join_staff">Rejoindre le Staff</a>
										</li>
									<?php
								}
								
								if(isset($_SESSION['admin'])) {
									?>
										<li>
											<a href="?p=questNPC">Quêtes</a>
										</li>
										<li>
											<a href="?p=creature">PNJ</a>
										</li>
										<li>
											<a href="?p=item">Item</a>
										</li>
									<?php
								}
							?>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="../">Retourner sur le site</a>
							</li>
						</ul>
					</div>
				</nav>
				<div class="col-md-12 contenu">
					<?php
						echo $_SESSION['erreur'];
						unset($_SESSION['erreur']);
						if(isset($_GET["p"])) {
							if(file_exists("pages/".$_GET["p"].".php")) {
								include("pages/".$_GET["p"].".php");
							} else {
								$_SESSION['erreur'] = "La page demandée n'existe pas";
								Header("Location: ./");
							}
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


