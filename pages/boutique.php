<?php

NotLogged();
 
	if(!isset($_GET['cat'])) {
		$tableau = $methodBoutique->getBoutique();
		foreach($tableau as $ligne)
		{
			?>
			
			<div class="col-md-4">
				<div class="col-md-12 item_shop nopadding">
					<div class="col-md-3">
						<img class="img-rounded img_shop" src="<?php echo $ligne['image']?>">
					</div>
					<div class="col-md-8 item_shop_name item_shop_name_pad center">
							<a href="?p=boutique&cat=<?php echo $ligne['type']; ?>">
								<?php echo $ligne['category']; ?>
							</a>
					</div>	
				</div>
				
			</div>	
			<?php
		}
	} elseif (isset($_GET['cat']) AND (!isset($_GET['item']))) {
		$tableau = $methodBoutique->getInfosBoutiqueCodex();
		foreach($tableau as $infos) {
			?>
				<div class="col-md-4">
					<div class="col-md-12 item_shop nopadding">
						<div class="col-md-3 item_shop_name_pad">
							<img class="img-rounded img_shop" src="<?php echo $infos['image']?>">
						</div>
						<div class="col-md-8 left item_shop_name_pad">
							<?php echo $infos['name']; ?>
						</div>
						<div class="col-md-12 item_shop_price">
							<div class="col-md-6 nopadding">
								<label>Prix : <?php echo $infos['prix']." DPts"; ?></label>
							</div>
							<div class="col-md-6 center">
								<a href="?p=boutique&cat=<?php echo $_GET['cat']; ?>&item=<?php echo $infos['id_item']; ?>" class="btn btn-danger">J'achète</a>
							</div>
						</div>
						
					</div>
					
				</div>		
			<?php
		}
	} elseif(isset($_GET['cat']) AND isset($_GET['item'])) {
		
		$tableau = $methodBoutique->getProduitBoutique();
		foreach($tableau as $produit) {
			if($produit['unique'] != 1) {
			?>
				<div class="col-md-12 item_shop">
					<form method="post" action="./action/ResultBoutique.php">
						<div class="col-md-12">
							<div class="col-md-1">
								<img class="img-rounded img_shop" src="<?php echo $produit['image'];?>">
							</div>
							<div class="col-md-11 item_shop_name">
								<h3>
									<?php echo $produit['name']; ?>
								</h3>
							</div>
						</div>	
						<div class="col-md-12">
							<hr class="style2">
						</div>
						<div class="col-md-12">
							<input type="hidden" name="cat" value="<?php echo $_GET['cat']; ?>">
							<input type="hidden" name="item" value="<?php echo $produit['id_item']; ?>">
						</div>
						<div class="col-md-12">
							<div class="col-md-6 confirm_buy">
								Prix de l'item : <?php echo $produit['prix'] ." DPts"; ?>
							</div>
							<div class="col-md-6 confirm_buy center">
								<input type="submit" class="btn btn-danger" name="ResultBoutiqueMulti" value="Je confirme mon achat">
							</div>
						</div>
					</form>
				</div>
			<?php
			} else {
			?>
				<div class="col-md-12 item_shop">
					<form method="post" action="./action/resultBoutique.php">
						<div class="col-md-12">
							<div class="col-md-1">
								<img class="img-rounded img_shop" src="<?php echo $produit['image'];?>">
							</div>
							<div class="col-md-11 item_shop_name">
								<h3>
									<?php echo $produit['name']; ?>
								</h3>
							</div>
						</div>	
						<div class="col-md-12">
							<hr class="style2">
						</div>
						<div class="col-md-12">
							<label> 
								Renseigner le nombre d'exemplaire pour cet article : 
							</label>
							<input type="hidden" name="cat" value="<?php echo $_GET['cat']; ?>">
							<input type="hidden" name="item" value="<?php echo $produit['id_item']; ?>">
							
							<span id="prix" name="prix_base">
								<?php echo $produit['prix']; ?>
							</span> DPts/u x
							
							<input type="number" id="count" value="1" name="produit_quant" min="1"> 
						</div>
						<div class="col-md-12">
							<hr class="style2">
						</div>
						<div class="col-md-12">
							<div class="col-md-6 confirm_buy">
								Prix de l'item : 
								<span id="prixTotal">
									<?php echo $produit['prix'] ." DPts/u"; ?>
								</span>
							</div>
							<div class="col-md-6 confirm_buy center">
								<input type="submit" class="btn btn-danger" name="ResultBoutiqueMulti" value="Je confirme mon achat">
							</div>
						</div>
					</form>
				</div>
			<?php
			}		
		}	
	} else {
		$_SESSION['erreur'] = "Veuillez contacter l'administrateur du site";
	}
?>

<script>
$('#count').keyup(function()
{
	$('#prixTotal').text($('#count').val()*parseInt($('#prix').text())+" DPts/u")

});

</script>