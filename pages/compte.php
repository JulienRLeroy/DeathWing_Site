<?php
	NotLogged();
?>


<div class="col-md-12">
		<ul>
			<li>
				<label>Email : <?php echo $_SESSION['user']->getEmail(); ?> </label>
			</li>
			<li>
				<label>DeaPts : <?php echo $_SESSION['user']->getVote(); ?> </label>
			</li>
			<li>
				<label>Dernière IP : <?php echo $_SESSION['user']->getIp(); ?> </label>
			</li>
			<li>
				<label>Parrain : <?php echo $_SESSION['user']->getParrain(); ?> </label>
			</li>
		</ul> 
</div>
<div class="col-md-12 panel_acc">
	<div class="col-md-3">
		<div class="col-md-12 btn max center option_acc" id="actionChar">
			Mes personnages
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12 btn max center option_acc" id="actionMdp">
			Changement de mot de passe
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12 btn max center option_acc" id="actionEmail">
			Changement d'adresse email
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12 btn max center option_acc" id="actionParrain">
			Renseigner un Parrain
		</div>
	</div>
</div>

<div class="col-md-12">
	<div class="col-md-12" id="characters">
		<div class="container-fluid">		
				<?php
					foreach($methodPlayer->getChar() as $infos) {
						
				?>
					<table class="table table-bordered">
						<thead>
						  <tr>
							<th>Nom</th>
							<th>Race</th>
							<th>Class</th>
							<th>Lvl</th>
							<th>Gold</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td class="col-md-2 col-xs-2 center"><?php echo $infos['name'] ?></td>
							<td class="col-md-1 center"><?php echo $infos['race'] ?></td>
							<td class="col-md-1 center"><?php echo $infos['class'] ?></td>
							<td class="col-md-1 center"><?php echo $infos['level'] ?></td>
							<td class="col-md-1 center"><?php echo $infos['money'] ?></td>
						  </tr>
						</tbody>
				  </table>
				<?php
					}
				?>
					
		</div>
	</div>
	
	<div class="col-md-12" id="mdp">
		<div class="container-fluid">
			<form action="./action/login.php" method="post">
				<div class="col-md-12 form-group">
					<div class="col-md-6  form-group">
						<input type="password" required class="form-control" name="newsMdp" placeholder="Nouveau mot de passe">
					</div>
					<div class="col-md-6  form-group">
						<input type="password" required class="form-control" name="newMdpVerif" placeholder="Répétez" >
					</div>
					<div class="col-md-12 center">
						<input type="submit" class="btn btn_acc" name="SetNewsMdp" value="Modifier le mot de passe">
					</div>
				</div>
			</form>
		</div>
	</div>
	
	<div class="col-md-12" id="email">
		<div class="container-fluid">
			<form action="./action/email.php" method="post">
				<div class="col-md-12 form-group">
					<div class="col-md-6  form-group">
						<input type="email" required class="form-control" name="email" placeholder="Nouvelle adresse mail">
					</div>
					<div class="col-md-6  form-group">
						<input type="email" required class="form-control" name="email_verif" placeholder="Répétez" >
					</div>
					<div class="col-md-12 center">
						<input type="submit" name="SetNewsEmail" class="btn btn_acc" value="Modifier l'adresse mail">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="col-md-12" id="parrain">
		<?php
				if($_SESSION['user']->getParrain() != "") {
		?>
					<div class="col-md-12 center">
						<label>Vous avez déjà renseigné un parrain</label>
					</div>
					<div class="col-md-12 center">
						<span>Votre parrain : <?php echo $_SESSION['user']->getParrain(); ?></span>
					</div>
					
		<?php
				} else {
		?>		
					<form method="post" action="./action/parrain.php">
						<div class="col-md-offset-2 col-md-8 col-md-offset-2 form-group center">
							<input type="text" class="form-control" name="parrain" value="" placeholder="Renseigner un parrain">	
						</div>
						<div class="col-md-12 center">
							<input type="submit" class="btn btn_acc" name="setParrain" value="Définir son Parrain">
						</div>
					</form>
		<?php
				}
		?>
	</div>
</div>

<script>
$(document).ready(function(){
    $("#actionChar").click(function(){
        $("#characters").toggle();
		$("#mdp").hide();
		$("#email").hide();
		$("#parrain").hide();
    });
	
	$("#actionMdp").click(function(){
        $("#mdp").toggle();
		$("#characters").hide();
		$("#email").hide();
		$("#parrain").hide();
    });
	
	$("#actionEmail").click(function(){
        $("#email").toggle();
		$("#mdp").hide();
		$("#characters").hide();
		$("#parrain").hide();
    });
	
	$("#actionParrain").click(function(){
        $("#parrain").toggle();
		$("#mdp").hide();
		$("#email").hide();
		$("#characters	").hide();
    });
});
</script>
