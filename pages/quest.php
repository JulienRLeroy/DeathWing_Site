<?php
	NotLogged();
?>

<div class="col-md-12 cadre">
	<div class="col-md-12 cadre cadre_quest">
		<section class="navbar navbar-inverse counter_navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<img class="navbar-brand" src="./front/img/icon/quest/Quest_Avail_16x16.png">
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a>Quêtes normal</a>
					</li>
				</ul>
				<ul class="navbar-header navbar-right">
					<img data-toggle="popover" data-trigger="hover" data-placement="top" data-content="110 pièce d'or" class="navbar-brand" src="./front/img/icon/quest/gold_icon_quest.png">
					<img data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Octroie automatiquement la réputation" class="navbar-brand" src="./front/img/icon/quest/quest_reputation_icon.png">
				</ul>
			</div>
		</section>
		
		<div class="col-md-12">
			<div class="col-md-12">
				<ul>
					<?php
					
						$tableau = $methodQuest->getCodexQuest(); // si ya 1000 lignes 
						foreach($tableau as $ligne)
						{
							if($ligne['type'] == 1)  {
								
								echo '
								<li>
									<img src="./front/img/icon/quest/Quest_Avail_16x16.png" alt="type">
									<a href="">
										' . $ligne['name'].'
									</a>
								</li>';
							}
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 cadre">
	<div class="col-md-12 cadre cadre_quest">
		
		<section class="navbar navbar-inverse counter_navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<img class="navbar-brand" src="./front/img/icon/quest/RRQ_Avail_16x16.png">
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a>Quête Répétables</a>
					</li>
				</ul>
				<ul class="navbar-header navbar-right">
					<img data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Coucou" class="navbar-brand" src="./front/img/icon/quest/gold_icon_quest.png">
					<img data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Coucou" class="navbar-brand" src="./front/img/icon/quest/quest_reputation_icon.png">
				</ul>
			</div>
		</section>
		<div class="col-md-12">
			<div class="col-md-12">
				<ul>
					<?php
					
						$tableau = $methodQuest->getCodexQuest(); // si ya 1000 lignes 
						foreach($tableau as $ligne)
						{
							if($ligne['type'] == 2)  {
								
								echo '
								<li>
									<img src="./front/img/icon/quest/Quest_Avail_16x16.png" alt="type">
									<a href="'.$ligne['id'].'">
										' . $ligne['name'].'
									</a>
								</li>';
							}
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="col-md-12 cadre">
	<div class="col-md-12 cadre cadre_quest">
		<section class="navbar navbar-inverse counter_navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<img class="navbar-brand" src="./front/img/icon/quest/Quest_Avail_Legendary_16x16.png">
				</div>
				<ul class="nav navbar-nav">
					<li>
						<a>Quête Légendaire</a>
					</li>
				</ul>
				<ul class="navbar-header navbar-right">
					<img data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Coucou" class="navbar-brand" src="./front/img/icon/quest/gold_icon_quest.png">
					<img data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Coucou" class="navbar-brand" src="./front/img/icon/quest/quest_reputation_icon.png">
				</ul>
			</div>
		</section>
		<div class="col-md-12">
			<div class="col-md-12">
				<ul>
					<?php
					
						$tableau = $methodQuest->getCodexQuest(); // si ya 1000 lignes 
						foreach($tableau as $ligne)
						{
							if($ligne['type'] == 3)  {
								
								echo '
								<li>
									<img src="./front/img/icon/quest/Quest_Avail_16x16.png" alt="type">
									<a href="?p=questInfos&id='.$ligne['idQuest'].'">
									  ' . $ligne['name'].'
									 </a>
								</li>';
							}
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>


<script>
$(document).ready(function(){
    $("#flip").click(function() {
        $("#panel").slideToggle("slow");
    });
});
!
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});


</script>

<style>
.popover-content {
  background-color: #222;
}

.popover {
  background-color: #222;
  border-color: #222;
}

.popover.right>.arrow:after {
  border-right-color: #222;
}

</style>