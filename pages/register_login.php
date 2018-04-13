<?php 
if(IsLogged())
{ 
    Header("Location: ./");
}
?>

<div class="col-md-6 col-xs-6">
	<div class="col-md-12 cadre_register_login contenu center">
		<form method="post" action="action/login.php">
			<div class="container-fluid">
				<div class="col-md-12">
					<h3>Connexion</h3>
				</div>
				<div class="col-md-12 center form-group">
					<input type="text" class="form-control" required name="ndc" placeholder="Nom de compte">
				</div>
				<div class="col-md-12 form-group">
					<input type="password" class="form-control" required name="mdp" placeholder="Mot de passe">
				</div>
				<div class="col-md-12 cadre_register_login_bottom center form-group">
					<input type="submit" class="btn btn_acc" value="Connexion" name="login">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="col-md-6 col-xs-6">
	<div class="col-md-12 cadre_register_login contenu center">
		<form method="post" action="action/login.php">
			<div class="container-fluid">
				<div class="col-md-12">
					<h3>Inscription</h3>
				</div>
				<div class="col-md-12 center form-group">
					<input type="text" class="form-control" required name="ndc" placeholder="Nom de compte">
				</div>
				<div class="col-md-12 form-group">
					<input type="password" class="form-control" required name="mdp" placeholder="Mot de passe">
				</div>
				<div class="col-md-12 form-group">
					<input type="password" class="form-control" required name="mdp_verif" placeholder="Répétez">
				</div>
				<div class="col-md-12 form-group">
					<input type="email" class="form-control" required name="email" placeholder="Email">
				</div>
				<div class="col-md-12 cadre_register_login_bottom center form-group">
					<input type="submit" class="btn btn_acc" value="Inscription" name="sub">
				</div>
			</div>
		</form>
	</div>
</div>

