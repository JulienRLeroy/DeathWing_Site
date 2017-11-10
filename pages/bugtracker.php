<?php

?>

<div class="col-md-12 cadre_pages btn_nav">
	<div class="col-md-6">
		<button>Afficher le BugTracker</button>
	</div>
	<div class="col-md-6">
		<button>Signaler un bug</button>
	</div>
</div>

<div class="col-md-12 cadre_pages bugtracker">	
	<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>Categorie</th>
					<th>Importance</th>
					<th>Etat</th>
					<th>User</th>
				</tr>
			</thead>
		<?php 
			$tableau = $methodBugtracker->getBugtrackerEnCours();
			foreach($tableau as $ligne) {
		?>
				<tbody>
					<tr>
						<th><?php echo $ligne['id']; ?></th>
						<th><?php echo $ligne['description']; ?></th>
						<th><?php echo $ligne['cat']; ?></th>
						<th><?php echo $ligne['importance']; ?></th>
						<th><?php echo $ligne['etat']; ?></th>
						<th><?php echo $ligne['user']; ?></th>
					</tr>
				</tbody>
		<?php
				}
		?>
	</table>
</div>

<div class="col-md-12 cadre_pages bugtracker">	
	<div class="container-fluid">
		<form method="post" action="./action/bugtracker.php">
			<div class="col-md-12 center">
				<label>
					<h3>Report de Bug</h3>
				</label>
			</div>
			
			<div class="col-md-12 center nopadding">
				<div class="col-md-6 nopadding">
					<div class="col-md-12 nopadding">
						<label>Importance</label>
					</div>
					<div class="col-md-12 nopadding form-group">
						<select name="importance">
							<option value="1">Normal</option>
							<option value="2">Moyenne</option>
							<option value="3">Prioritaire</option>
							<option value="4">Urgente</option>
						</select>
					</div>
				</div>
				<div class="col-md-6 nopadding">
					<div class="col-md-12 nopadding">
						<label>Categorie</label>
					</div>
					<div class="col-md-12 nopadding form-group">
						<select name="cat">
							<option value="1">Item</option>
							<option value="2">Quest</option>
							<option value="3">Creature</option>
							<option value="4">Sort</option>
							<option value="5">Autres</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="col-md-12 form-group nopadding">
				<div class="col-md-12 nopadding">
					<label>Description</label>
				</div>
				<div class="col-md-12 nopadding">
					<textarea name="descript_bug" class="form-control bugtracker_textarea" rows="5" placeholder="Soyez le plus précis possible dans la description du bug"></textarea>
				</div>	
			</div>
			
			<div class="col-md-12 center">
				<input type="submit" value="Valider" name="bugtrackersubmit">
			</div>
		</form>
	</div>
</div>

<?php

?>
<!--

CATEROGIE 

1 : item
2 : quest
3 : creature
4 : sort
5 : site

IMPORTANCE
1 : Normal
2 : Moyenne
3 : Prioritaire
4 : Urgente

ETAT 

0 : en cours
1 : Corrigé
-->