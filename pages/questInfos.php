 <?php

NotLogged();

if(isset($_GET['id'])) {
	$tableau = "";
	if(is_numeric($_GET['id'])) {
		$tableau = $methodQuest->getInfosQuestCodex();
	}
	if(!is_numeric($_GET['id'])) {
		echo '
				<div class="col-md-12">
					<div class="col-md-12 alert alert-danger center">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							Aucune quête selectionné
					</div>
				</div>
				';	
		return false;
	} else if (count($tableau) == 0) {
		
			echo '
				<div class="col-md-12">
					<div class="col-md-12 alert alert-danger center">
						<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							La quête demandée est introuvable
					</div>
				</div>
				';	
	} else {
	
		foreach($tableau as $ligne) {
			?>
			<div class="col-md-6">
				<div class="col-md-12  nopadding cadre inside_quest" id="general_quest">
					<div class="col-md-12 title_quest">
						<div class="col-md-6 title_quest nopadding">
							<img src="./front/img/icon/quest/Quest_Avail_16x16.png" class="img_quest" height="20px">
							<?php
								echo '<span class="title_quest">'. $ligne['name'] .'</span>';
							?>
						</div>
						
						<div class="col-md-6 right nopadding">
							<?php
								if($ligne['difficulty'] == 1) {
									echo '<img src="./front/img/icon/quest/quest_solo.png">';
								} else {
									echo '<img src="./front/img/icon/quest/quest_group.png">';
								}
							?>
						</div>
					</div>
					<div class="col-md-12">
						<span> 
							<?php echo $ligne['description']; ?> 
						</span>
					</div>
				</div>
			</div>
			
			
			<div class="col-md-6">
				<div class="col-md-12  nopadding cadre inside_quest" id="reward_quest">
					<div class="col-md-12">
						<div class="col-md-12 nopadding">
							<img src="./front/img/icon/quest/Quest_Complete_16x16.png" class="img_quest" height="20px">
							<span class="title_quest">
								Récompenses 
							</span>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6">
							<div class="col-md-12">
								<span>
									Sort
								</span>
							</div>
							<div class="col-md-12">
								<ul>
									<li>
										<?php echo $ligne['spell_0']; ?>
									</li>
									
								<ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="col-md-12">
								<span>
									Item
								</span>
							</div>
							<div class="col-md-12">
								<ul>
									<li>
										<?php echo $ligne['item_0']; ?>
									</li>
									
								<ul>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<?php
		}
	}
} 

?>
		
