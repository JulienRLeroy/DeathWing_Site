<?php
NotAdmin();
session_start();

?>

<div class="col-md-12 panel_acc">
	<div class="col-md-3">
		<div class="col-md-12 btn max center option_acc" id="action_who_start_end_quest">
			Création de la quête
		</div>
	</div>
	<div class="col-md-3">
		<div class="col-md-12 btn max center option_acc" id="action_create_quest">
			Quête via PNJ
		</div>
	</div>
</div>


<div class="col-md-12" id="create_quest">
  <input type="number" name="Id" placeholder="ID de la quête">
	<select name="Method">
		<option value="0">Quête auto-accomplie</option>
		<option value="1">Quête désactivé</option>
		<option value="2">Quête activé</option>
	</select>
  <input type="number" min="1" max="85" name="Level" placeholder="Level de la quête">
  <input type="number" min="1" max="85" name="MinLevel" placeholder="Level de la quête">
  <input type="number" min="1" max="85" name="MaxLevel" placeholder="Level de la quête">
  ZoneOrSort
  <select name="Type">
		<option value="0">Groupe</option>
		<option value="1">Normal</option>
		<option value="2">JcJ</option>
		<option value="1"> Groupe</option>
		<option value="21"> Normal</option>
		<option value="41"> JcJ</option>
		<option value="62"> Raid</option>
		<option value="81"> Donjon</option>
		<option value="82"> World Event</option>
		<option value="83"> Légendaire</option>
		<option value="84"> Escorte</option>
		<option value="85"> Héroîque</option>
		<option value="88"> Raid 10</option>
		<option value="89">Raid 25</option>
	</select>
  <input type="number" name="SuggestedPlayers" placeholder="Nombre de joueur suggérés">
  <input type="number" name="LimitTime" placeholder="Temps en seconde de la quête">
  
	<select name="RequiredClasses">
		<option value="1">Warrior</option>
		<option value="2">Paladin</option>
		<option value="4">Hunter</option>
		<option value="8">Rogue</option>
		<option value="16">Priest</option>
		<option value="32">Death Knight</option>
		<option value="64">Shaman</option>
		<option value="128">Mage</option>
		<option value="256">Warlock</option>
		<option value="1024">Druid</option>
	</select>
	<select name="RequiredRaces">
		<option value="1">Human</option>
		<option value="2">Orc</option>
		<option value="4">Dwarf</option>
		<option value="8">Night Elf</option>
		<option value="16">Undead</option>
		<option value="32">Tauren</option>
		<option value="64">Gnome</option>
		<option value="128">Troll</option>
		<option value="256">Goblin</option>
		<option value="512">Blood Elf</option>
		<option value="1024">Draenei</option>
		<option value="2097152">Worgen</option>
	</select>
  RequiredSkillId
  RequiredSkillPoints
  RequiredFactionId1
  RequiredFactionId2
  RequiredFactionValue1 
  RequiredFactionValue2 
  RequiredMinRepFaction
  RequiredMaxRepFaction
  RequiredMinRepValue 
  RequiredMaxRepValue 
  <input type="number" name="PrevQuestId" placeholder="ID de la quête précédente">
  <input type="number" name="NextQuestId" placeholder="ID de la quête suivante">
  ExclusiveGroup 
  NextQuestIdChain
  RewardXPId 
  RewardOrRequiredMoney 
  RewardMoneyMaxLevel 
  RewardSpell
  RewardSpellCast 
  RewardHonor 
  RewardHonorMultiplier
  RewardMailTemplateId
  RewardMailDelay
  SourceItemId
  SourceItemCount 
  SourceSpellId

	<select name="Flags">
		<option value="0"> Rien </option>
		<option value="1"> Rester en vie, si vous mourrez, la quête echoue</option>
		<option value="2"> Quête en groupe, quand vous lancez une escorte scripté par exemple</option>
		<option value="4"> Iplique l'activation d'un déclencheur dans une zone</option>
		<option value="8"> Quête partageable</option>
		<option value="16"> Flag Inutilisé (supposé légendaire), merci à Mihawk pour l'info</option>
		<option value="32"> Quête épique (utilisé pour la quête du chasseur au level 60)</option>
		<option value="64"> Quête à faire en raid</option>
		<option value="128"> Quête de Burning Crusade, et après Burning crusade</option>
		<option value="256"> La quête requiert d'obtenir des objets qui ne sont pas des objets de quête (exemple : quête ingénieur, obtenir des compos)</option>
		<option value="512"> Les récompenses de quête sont cachés, jusqu'a ce que vous êtes sur la page de récompense de la quête, si vous avez valider tout les objectifs.</option>
		<option value="1024"> Ces quêtes sont automatiquements accomplies quand les objectifs de quête sont atteinds, rien n'apparaitra dans le journal de quête.</option>
		<option value="2048"> Quêtes des zones de début Elfe de sang et Dreanai</option>
		<option value="4096"> Quêtes journalières répétables</option>
		<option value="8192"> Quête répétable</option>
		<option value="16384"> Quête non disponible</option>
		<option value="32768"> Quête hebdomadaire </option>
		<option value="65536"> Quête auto-accomplie</option>
		<option value="131072"> La quête donne un objet de quête nécéssaire pour la réussir.</option>
		<option value="262144"> Utilise le "Objective text" comme "Complete text"</option>
		<option value="524288"> Quêtes des zones de départ</option>
	</select>
	<select name="SpecialFlags">
		<option value="0"> Rien
		<option value="1">Quête répétable
		<option value="2"> La quête peut être validé seulement par un élément extérieur ( découvrir une zone, un script etc....)
		<option value="4"> Quête auto-accomplie (seulement utilisé pour les zones de départ)
		<option value="8"> Utilisé pour les quêtes de Recherche de Groupe
		<option value="16"> Quête mensuel
	</select>
   
  MinimapTargetMark 
  RewardTitleId 
  RequiredPlayerKills 
  RewardTalents 
  RewardArenaPoints
  RewardSkillId
  RewardSkillPoints 
  RewardReputationMask 
  QuestGiverPortrait
  QuestTurnInPortrait
  <input type="number" RewardItemId1" placeholder="Objets obtenus sans choix 1">
  <input type="number"RewardItemId2" placeholder="Objets obtenus sans choix 2">
  <input type="number"RewardItemId3" placeholder="Objets obtenus sans choix 3">
  <input type="number"RewardItemId4" placeholder="Objets obtenus sans choix 4">
  <input type="number"RewardItemCount1" placeholder="Nombre d'objets obtenus sans choix 1">
  <input type="number"RewardItemCount2" placeholder="Nombre d'objets obtenus sans choix 2">
 <input type="number" RewardItemCount3" placeholder="Nombre d'objets obtenus sans choix 3">
  <input type="number"RewardItemCount4" placeholder="Nombre d'objets obtenus sans choix 4">
  <input type="number"RewardChoiceItemId1" placeholder="Objets obtenus avec choix 1">
  <input type="number"RewardChoiceItemId2" placeholder="Objets obtenus avec choix 2">
  <input type="number"RewardChoiceItemId3" placeholder="Objets obtenus avec choix 3">
  <input type="number"RewardChoiceItemId4" placeholder="Objets obtenus avec choix 4">
  <input type="number"RewardChoiceItemId5" placeholder="Objets obtenus avec choix 5">
  <input type="number"RewardChoiceItemId6" placeholder="Objets obtenus avec choix 6">
  <input type="number"RewardChoiceItemCount1" placeholder="Nombre d'objets obtenus avec choix 1">
  <input type="number"RewardChoiceItemCount2" placeholder="Nombre d'objets obtenus avec choix 2">
  <input type="number"RewardChoiceItemCount3" placeholder="Nombre d'objets obtenus avec choix 2">
  <input type="number"RewardChoiceItemCount4" placeholder="Nombre d'objets obtenus avec choix 3">
  <input type="number"RewardChoiceItemCount5" placeholder="Nombre d'objets obtenus avec choix 4">
  <input type="number"RewardChoiceItemCount6" placeholder="Nombre d'objets obtenus avec choix 5">
  RewardFactionId1 
  RewardFactionId2 
  RewardFactionId3 
  RewardFactionId4 
  RewardFactionId5 
  RewardFactionValueId1 
  RewardFactionValueId2 
  RewardFactionValueId3 
  RewardFactionValueId4 
  RewardFactionValueId5 
  RewardFactionValueIdOverride1 
  RewardFactionValueIdOverride2 
  RewardFactionValueIdOverride3 
  RewardFactionValueIdOverride4 
  RewardFactionValueIdOverride5 
  PointMapId
  PointX 
  PointY 
  PointOption
  Title 
  Objectives 
  Details 
  EndText 
  OfferRewardText 
  RequestItemsText 
  CompletedText 
  <input type="number" name="RequiredNpcOrGo1" placeholder="Créatures ou Gameobjects à tuer ou à lancer un sort 1">
  <input type="number" name="RequiredNpcOrGo2" placeholder="Créatures ou Gameobjects à tuer ou à lancer un sort 2">
  <input type="number" name="RequiredNpcOrGo3" placeholder="Créatures ou Gameobjects à tuer ou à lancer un sort 3">
  <input type="number" name="RequiredNpcOrGo4" placeholder="Créatures ou Gameobjects à tuer ou à lancer un sort 4">
  <input type="number" name="RequiredNpcOrGoCount1" placeholder="Nombre de Gameobject/créatures à tuer/ lancer un sort 1">
  <input type="number" name="RequiredNpcOrGoCount2" placeholder="Nombre de Gameobject/créatures à tuer/ lancer un sort 2">
  <input type="number" name="RequiredNpcOrGoCount3" placeholder="Nombre de Gameobject/créatures à tuer/ lancer un sort 3">
  <input type="number" name="RequiredNpcOrGoCount4" placeholder="Nombre de Gameobject/créatures à tuer/ lancer un sort 4"> 
 <input type="number" name="RequiredItemId1" placeholder="Nombre d'item pour finir la quête 1">
  <input type="number" name="RequiredItemId2" placeholder="Nombre d'item pour finir la quête 2">
  <input type="number" name="RequiredItemId3" placeholder="Nombre d'item pour finir la quête 3">
  <input type="number" name="RequiredItemId4" placeholder="Nombre d'item pour finir la quête 4">
  <input type="number" name="RequiredItemId5" placeholder="Nombre d'item pour finir la quête 5">
  <input type="number" name="RequiredItemId6" placeholder="Nombre d'item pour finir la quête">
  // RequiredSourceItemId1
  // RequiredSourceItemId2
  // RequiredSourceItemId3
  // RequiredSourceItemId4
  // RequiredSourceItemCount1
  // RequiredSourceItemCount2
  // RequiredSourceItemCount3
  // RequiredSourceItemCount4
  RequiredItemCount1
  RequiredItemCount2
  RequiredItemCount3
  RequiredItemCount4
  RequiredItemCount5
  RequiredItemCount6
  RequiredSpell
  <input type="number" name="RequiredSpellCast1" placeholder="Requière le cast d'un sort 1">
  <input type="number" name="RequiredSpellCast2" placeholder="Requière le cast d'un sort 2">
  <input type="number" name="RequiredSpellCast3" placeholder="Requière le cast d'un sort 3">
  <input type="number" name="RequiredSpellCast4" placeholder="Requière le cast d'un sort 4">
  ObjectiveText1 
  ObjectiveText2 
  ObjectiveText3 
  ObjectiveText4 
  RewardCurrencyId1
  RewardCurrencyId2
  RewardCurrencyId3
  RewardCurrencyId4
  RewardCurrencyCount1 
  RewardCurrencyCount2 
  RewardCurrencyCount3 
  RewardCurrencyCount4 
  RequiredCurrencyId1
  RequiredCurrencyId2
  RequiredCurrencyId3
  RequiredCurrencyId4
  RequiredCurrencyCount1 
  RequiredCurrencyCount2 
  RequiredCurrencyCount3 
  RequiredCurrencyCount4 
  QuestGiverTextWindow 
  QuestGiverTargetName 
  QuestTurnTextWindow 
  QuestTurnTargetName 
  SoundAccept
  SoundTurnIn
  DetailsEmote1
  DetailsEmote2
  DetailsEmote3
  DetailsEmote4
  DetailsEmoteDelay1 
  DetailsEmoteDelay2 
  DetailsEmoteDelay3 
  DetailsEmoteDelay4 
  EmoteOnIncomplete
  EmoteOnComplete
  OfferRewardEmote1
  OfferRewardEmote2
  OfferRewardEmote3 
  OfferRewardEmote4 
  OfferRewardEmoteDelay1
  OfferRewardEmoteDelay2
  OfferRewardEmoteDelay3
  OfferRewardEmoteDelay4 
  StartScript 
  CompleteScript 
  WDBVerified
</div>

<div class="col-md-12" id="who_start_end_quest">
	<form method="post" action="./action/action.php">
		<div class="col-md-12 form-group">
			<label>Quest Start</label>
			<input type="number" class="form-control" placeholder="id du pnj qui reçois la quête" name="id_npc_start" />
			<input type="number" class="form-control" placeholder="id de la quête" name="id_quest_start"/>
		</div>
		<div class="col-md-12 form-group">
			<label>Quest End</label> 
			<input type="number" class="form-control" placeholder="id du pnj qui rend la quête" name="id_npc_end"/>
			<input type="number" class="form-control" placeholder="id de la quête" name="id_quest_end" />
		</div>
		<div class="col-md-12">
			<input type="submit" name="send_start_end" />
		</div>
	</form>
</div>
