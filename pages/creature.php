<?php
	
NotLogged();
		
		
if(!isset($_GET['c'])) {
	$tableau = $methodCreature->getCodexCreature(); // si ya 1000 lignes 
}
else {
	
	if($_GET['c'] >= '1' ) { 
		$tableau = $methodCreature->getCodexCreature($_GET['c']);
	} else {
		$_SESSION['erreur'] = "La page demandée n'existe pas, nous avons affichés une page qui existe";
		echo '
				<script LANGUAGE="JavaScript">
					document.location.href="?p=creature&c=1"
				</script>
			';
		return;
	}
	
}
		
?>
	<div class="col-md-12 menu_codex center">

	</div>
	
	<div class="col-md-12">
		<?php


				foreach($tableau as $ligne) {			
				$infos = $methodCreature->getInfosCreatureCodex($ligne['id']); //a chaque boucle elle recherche les infos 

		?>
		<div class="col-md-6 range_codex">
			<div class="col-md-12 nopadding range_codex cadre_codex">
				<div class="col-md-12 defaut_codex">
					<div class="col-md-3 col-xs-3">
						<img class="img_codex img-responsive img-thumbnail" src="<?php echo $ligne['image']; ?>" >
					</div>
					<div class="col-md-9 col-xs-9">
						<div class="col-md-6 col-xs-6 center">
							<label><?php echo $ligne['name']; ?></label>
						</div>
						<div class="col-md-6 col-xs-6 center">
							<label><?php echo $ligne['type']; ?></label>
						</div>
						<div class="col-md-12 col-xs-12">
							<span><?php echo $ligne['description']; ?></span>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xs-12">
					<div class="col-md-6 col-xs-6">
						<div class="col-md-12 center see_more">
							<label>Spell</label>
						</div>
						<div class="col-md-12 col-xs-12 see_more scrollbar_left" id="scroll_codex">
							<ul>
								<?php 
								foreach($infos as $info)
								{
									if($info['type'] == 1) {
										echo "<li>".$info['name']."</li>";
									}
								}						
									
								?>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<div class="col-md-12 center see_more">
							<label>Loot</label>
						</div>
						<div class="col-md-12 see_more scrollbar_right" id="scroll_codex">
							<ul>
								<?php 		
									foreach($infos as $info)
								{
									if($info['type'] == 2) {
										echo "<li>".$info['name']."</li>";
									}
								}
								?>	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php		
		}
		?>
		<div class="col-md-12">
			<div class="col-md-12 pages_codex">
				<ul class="nopadding">
					<?php $methodCreature->countCreature(); ?>
				</ul>
			</div>
		</div>
	</div>


