<?php
	NotLogged();
?>
<div class="col-md-12 panier_attente">
	<h3>
		<label>
			Panier en attente
		</label>
	</h3>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Nom
					</th>
					<th>
						Quantité(s)
					</th>
					<th>
						Prix
					</th>
				</tr>
			</thead>
	<?php
		$tabFinal = $methodBoutique->getPanier();
		foreach($tabFinal as $info) { 
				if($info['panier_valide'] == 1) {
					

		?>
			<tbody>
				<tr>
					<td>
						<img class="img-rounded img_shop" src="<?php echo $info['image']; ?>">
					</td>
					<td>
						<?php echo $info['name']; ?>
					</td>
					<td>
						<?php echo $info['quantite_produit']; ?>
					</td>
					<td>
						<?php echo $info['prix_total']; ?>
					</td>
				</tr>
			</tbody>
			
		
		<?php
					}
		}
	?> 
		</table>
	</div>
</div>

<div class="col-md-12 panier_valid">
	<div class="col-md-6">
		<h3>
			<label>Panier Validé</label>
		</h3>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<table class="table">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Nom
					</th>
					<th>
						Quantité(s)
					</th>
					<th>
						Prix
					</th>
				</tr>
			</thead>
	<?php
		$tabFinal = $methodBoutique->getPanier();
		foreach($tabFinal as $info) { 
				if($info['panier_valide'] == 2) {
					

		?>
			<tbody>
				<tr>
					<td>
						<img class="img-rounded img_shop" src="<?php echo $info['image']; ?>">
					</td>
					<td>
						<?php echo $info['name']; ?>
					</td>
					<td>
						<?php echo $info['quantite_produit']; ?>
					</td>
					<td>
						<?php echo $info['prix_total']; ?>
					</td>
				</tr>
			</tbody>
			
		
		<?php
					}
		}
	?> 
		</table>
	</div>
</div>