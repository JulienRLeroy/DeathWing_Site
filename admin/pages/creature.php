<div class="col-md-12 form-group creature">
	<label>Informations Général</label>
	<div class="col-md-12">
		<div class="col-md-4">
		
			<label>ID NPC</label>
				<input type="number" class="form-control" name="entry" placeholder="ID de la creature" required>
				
			<label>Name NPC</label>
				<input type="text" class="form-control" name="name" placeholder="Nom du PNJ">
				
			<label>Guilde NAME NPC</label>
				<input type="text" class="form-control" name="subname" placeholder="Guilde du PNJ">
				
		</div>
		<div class="col-md-4">
			<label>Min LvL (85)</label>
			<input type="number" class="form-control" name="minlevel" value="85" placeholder="Level mini.." disabled>
			<label>Max LvL (85)</label>
			<input type="number" class="form-control" name="maxlevel" value="85" placeholder="Max mini.." disabled>
			<label>Taille</label>
			<input type="number" class="form-control" name="scale" placeholder="Taille de la créature">
		</div>
		
		<div class="col-md-4">	
			<label>Icon NPC</label>
			<select class="form-control" name="IconName">
				<option value="Directions">Directions</option>
				<option value="Gunner">Gunner</option>
				<option value="vehichleCursor">vehichleCursor</option>
				<option value="Driver">Driver</option>
				<option value="Attack">Attack</option>
				<option value="Buy">Buy</option>
				<option value="Speak">Speak</option>
				<option value="Pickup">Pickup</option>
				<option value="Interact">Interact</option>
				<option value="Trainer">Trainer</option>
				<option value="Taxi">Taxi</option>
				<option value="Repair">Repair</option>
				<option value="LootAll">LootAll</option>
				<option value="Quest">Quest</option>
				<option value="PVP">PVP</option>
			</select>
			<label>Famille</label>
			<select class="form-control" name="family">
				<option value="1">Wolf</option>	
				<option value="26">Owl</option>	
				<option value="16">Voidwalker</option>	
				<option value="39">Devilsaur </option>	
				<option value="21">Turtle</option>	
				<option value="43">Rhino</option>	
				<option value="12">Tallstrider</option>	
				<option value="37">Moth</option>	
				<option value="17">Succubus</option>	
				<option value="40">Ghoul</option>	
				<option value="3">Spider</option>	
				<option value="28">Remote Control</option>	
				<option value="20">Scorpid</option>	
				<option value="42">Worm</option>	
				<option value="11">Raptor</option>	
				<option value="35">Serpent</option>	
				<option value="23">Imp</option>	
				<option value="44">Wasp</option>	
				<option value="25">Hyena</option>	
				<option value="46">Spirit Beast</option>	
				<option value="9">Gorilla</option>	
				<option value="34">Nether Ray</option>	
				<option value="15">Felhunter</option>	
				<option value="38">Chimaera</option>	
				<option value="19">Doomguard</option>	
				<option value="41">Silithid</option>	
				<option value="6">Crocolisk</option>	
				<option value="31">Ravager</option>	
				<option value="8">Crab</option>	
				<option value="33">Sporebat</option>	
				<option value="2">Cat</option>	
				<option value="27">Wind Serpent</option>	
				<option value="7">Carrion Bird</option>	
				<option value="32">Warp Stalker</option>	
				<option value="5">Boar</option>	
				<option value="30">Dragonhawk</option>	
				<option value="4">Bear</option>	
				<option value="29">Felguard</option>	
				<option value="24">Bat<option>	
				<option value="45">Core Hound</option>	
			</select>
			<label>Type</label>
			<select class="form-control" name="type">
				<option value="0">None</option>
				<option value="1">Beast</option>
				<option value="2">Dragonkin</option>
				<option value="3">Demon</option>
				<option value="4">Elemental</option>
				<option value="5">Giant</option>
				<option value="6">Undead</option>
				<option value="7">Humanoid</option>
				<option value="8">Critter</option>
				<option value="9">Mechanical</option>
				<option value="10">Not specified</option>
				<option value="11">Totem</option>
				<option value="12">Non-Combat Pet</option>
				<option value="13">Gas Cloud</option>
				<option value="14">Wild Pet</option>
				<option value="15">Aberration</option>
			</select>
		</div>
	</div>
</div>

<div class="col-md-12 form-group creature">
	<label>Combat</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>Dégât min</label>
			<input type="number" class="form-control" name="mindmg" placeholder="Dégât min">
			<label>Dégât max</label>
			<input type="number" class="form-control" name="maxdmg" placeholder="Dégât max">
			<label>Dégât min (dist)</label>
			<input type="number" class="form-control" name="minrangedmg" placeholder="Min dégât dist"> 
			<label>Dégât max (dist)</label>
			<input type="number" class="form-control" name="maxrangedmg" placeholder="Max dégât dist"> 
		</div>
		<div class="col-md-4">
			<label>Type de dégât</label>
			<select class="form-control" name="dmgschool">
				<option value="0">Normal</option>
				<option value="1">Lumière</option>
				<option value="2">Feu</option>
				<option value="3">Nature</option>
				<option value="4">Glace</option>
				<option value="5">Ombre</option>
				<option value="6">Arcane</option>
			</select> 
			<label>Classe</label>
			<select class="form-control" name="unit_class">   
				<option value="1"> Health only (equal to Rogue)</option>
				<option value="2"> Health & Mana (more health than Mage but less mana)</option>
				<option value="4"> Health only (equal to Warrior)</option>
				<option value="8"> Health & Mana (less health than Paladin but more mana)</option>
			</select>
			<label>Rang</label>
			<select class="form-control" name="rank">
				<option value="0">Normal</option>
				<option value="1">Elite</option>
				<option value="2">Rare Elite</option>
				<option value="3">Boss</option>
				<option value="4">Rare</option>
			</select> 
		</div>
		<div class="col-md-4">
			<label>Dégât au corps à corps</label>
			<input type="number" class="form-control" name="baseattacktime" placeholder="Dégât par seconde(cac)"> 
			<label>Dégât à distance</label>
			<input type="number" class="form-control" name="rangeattacktime" placeholder="Dégât par seconde(dist)">  
			<label>Puissance d'attaque (dist)</label>
			<input type="number" class="form-control" name="rangedattackpower" placeholder="attack power dist" >
			<label>Multiplications des dégâts (0)</label>
			<input type="number" class="form-control" name="dmg_multiplier" placeholder="Damage multiplier">
		</div>
	</div>
</div>

<div class="col-md-12 form-group creature">
	<label>Stats</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>Résistance Lumière</label>
			<input type="number" class="form-control" name="resistance1" placeholder="Résistance Lumière">  
			<label>Résistance Feu</label>
			<input type="number" class="form-control" name="resistance2" placeholder="Résistance Feu">     
			<label>Résistance Nature</label>
			<input type="number" class="form-control" name="resistance3" placeholder="Résistance Nature">     
			<label>Résistance Glace</label>
			<input type="number" class="form-control" name="resistance4" placeholder="Résistance Glace"> 
			<label>Résistance Ombre</label>		
			<input type="number" class="form-control" name="resistance5" placeholder="Résistance Ombre">     
			<label>Résistance Arcane</label>
			<input type="number" class="form-control" name="resistance6" placeholder="Résistance Arcane"> 
		</div>
		<div class="col-md-4">
			<label>Régénération de la vie</label>
			<input type="number" class="form-control" name="RegenHealth" placeholder="Régénération de la vie">
			<label>Equipement</label>
			<input type="number" class="form-control" name="equipment_id" placeholder="ID de l'addon utilisé ( lié à creature_equip_template )"> 
			<input type="number" class="form-control" name="exp" disabled placeholder="See creature_classlevelstats. exp">
			<input type="number" class="form-control" name="exp_unk" placeholder="ex_unk">
		</div>
		<div class="col-md-4">
			<label>Minimum pièce d'or</label>
			<input type="number" class="form-control" name="mingold" placeholder="min gold en pc">
			<label>Maximum pièce d'or</label>
			<input type="number" class="form-control" name="maxgold" placeholder="max gold en pc"> 
		</div>
	</div>			
</div>

<div class="col-md-4 form-group creature">
	<label>Apparences</label>
	<div class="col-md-12">
		<label>ModelId 1</label>
		<input type="number" class="form-control" name="modelid1" placeholder="Apparence 1" required>
		
		<label>ModelId 2</label>
		<input type="number" class="form-control" name="modelid2" placeholder="Apparence 2"> 
		
		<label>ModelId 3</label>
		<input type="number" class="form-control" name="modelid3" placeholder="Apparence 3">
		
		<label>ModelId 4</label>
		<input type="number" class="form-control" name="modelid4" placeholder="Apparence 4">
		
	</div>
</div>
<div class="col-md-4 form-group creature">
	<label>Donjons & Raids</label>
	<div class="col-md-12">
		<label>difficulty_entry_1</label>
		<select class="form-control" name="difficulty_entry_1">
			<option value="0">Monstre Normal</option>
			<option value="5">Monstre de Donjon</option>
		</select>
		
		<label>difficulty_entry_2 (HM)</label>
		<select class="form-control"  name="difficulty_entry_2">
			<option value="0">Monstre Normal</option>
			<option value="">10 (Heroic)</option>
		</select>
		
		<label>difficulty_entry_3 (HM)</label>
		<select class="form-control"  name="difficulty_entry_3">
			<option value="0">Monstre Normal</option>
			<option value="3">25 (Heroic)</option>
		</select>
	</div>
</div>

<div class="col-md-12 form-group creature">
	<label>Quête</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>difficulty_entry_1</label>
			<input type="number" class="form-control" name="KillCredit1" placeholder="ID autre monstre lié à une quête 1" disabled>
			<label>difficulty_entry_1</label>
			<input type="number" class="form-control" name="KillCredit2" placeholder="ID autre monstre lié à une quête 2" disabled>
		</div>
		<div class="col-md-4">
			<label>Loot item 1</label>
			<input type="number" class="form-control" name="questItem1" placeholder="Loot item quête 1">
			<label>Loot item 2</label>
			<input type="number" class="form-control" name="questItem2" placeholder="Loot item quête 2">
			<label>Loot item 3</label>
			<input type="number" class="form-control" name="questItem3" placeholder="Loot item quête 3">
		</div>
		<div class="col-md-4">
			<label>Loot item 4</label>
			<input type="number" class="form-control" name="questItem4" placeholder="Loot item quête 4">
			<label>Loot item 5</label>
			<input type="number" class="form-control" name="questItem5" placeholder="Loot item quête 5">
			<label>Loot item 6</label>
			<input type="number" class="form-control" name="questItem6" placeholder="Loot item quête 6">
		</div>
	</div>
</div>


<div class="col-md-12 form-group creature">
	<label>Déplacements</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>Vitesse de Marche</label>
			<input type="number" class="form-control" name="speed_walk" placeholder="Vitesse de marche">
			<label>Vitesse de Course</label>
			<input type="number" class="form-control" name="speed_run" placeholder="Vitesse de course">
			<label>Vitesse de Nage</label>
			<input type="number" class="form-control" name="speed_swim" placeholder="Vitesse de nage">
			<label>Vitesse de vol</label>
			<input type="number" class="form-control" name="speed_fly" placeholder="Vitesse de vol">
		</div>
		<div class="col-md-4">
			<label>MovementType</label>
			<select class="form-control" name="MovementType">
				<option value="0">Normal</option>
				<option value="1">Random movement inside the spawndist radius</option>
				<option value="2">	Waypoint movement </option>
			</select> 
			<label>InhabitType</label>
			<select class="form-control" name="InhabitType">
					<option value="1">Ground</option>
					<option value="2">Water</option>
					<option value="4">Flying</option>
			</select>
			<label>movementID</label>
			<input type="number" class="form-control" name="movementId" placeholder="MovementId" disabled value="0">			
		</div>
	</div>
</div>

<div class="col-md-12 form-group creature">
	<label>Loot</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>Monnais à loot</label>
			<input type="number" class="form-control" name="currencyId" placeholder="ID monnai à loot">
			<label>Nombre de monnais à loot</label>
			<input type="number" class="form-control" name="currencyCount" placeholder="nombre de monnai à loot">
		</div>
		<div class="col-md-4">
			<label>Item à voler (rogue)</label>
			<input type="number" class="form-control" name="pickpocketloot" placeholder="ID de pickpocketing_loot_template à voler (rogue)">
			<label>Item à dépecer</label>
			<input type="number" class="form-control" name="skinloot" placeholder="ID du Skinning_loot_template de l'item à dépecer">
		</div>
		<div class="col-md-4">
			<label>Loot de la creature</label>
			<input type="number" class="form-control" name="lootid" placeholder="ID du creature_template_loot(contactez admin ou wiki)">   
		</div>
	</div>
</div>

<div class="col-md-12 form-group creature">
	<label>PNJ véhicules</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>Spell véhicule 1</label>
			<input type="number" class="form-control" name="spell1" placeholder="spell utilisé pour les vehicules 1"> 
			<label>Spell véhicule 2</label>
			<input type="number" class="form-control" name="spell2" placeholder="spell utilisé pour les vehicules 2">
			<label>Spell véhicule 3</label>
			<input type="number" class="form-control" name="spell3" placeholder="spell utilisé pour les vehicules 3">  
			<label>Spell véhicule 4</label>
			<input type="number" class="form-control" name="spell4" placeholder="spell utilisé pour les vehicules 4"> 
		</div>
		<div class="col-md-4"> 
			<label>Spell véhicule 5</label>
			<input type="number" class="form-control" name="spell5" placeholder="spell utilisé pour les vehicules 5">  
			<label>Spell véhicule 6</label>
			<input type="number" class="form-control" name="spell6" placeholder="spell utilisé pour les vehicules 6"> 
			<label>Spell véhicule 7</label>
			<input type="number" class="form-control" name="spell7" placeholder="spell utilisé pour les vehicules 7"> 
			<label>Spell véhicule 8</label>
			<input type="number" class="form-control" name="spell8" placeholder="spell utilisé pour les vehicules 8"> 
		</div>
		<div class="col-md-4">
			<label>VehiculeID</label>
			<input type="number" class="form-control" name="VehicleId" placeholder="VehicleId ???">  
		</div>
	</div>
</div>

<div class="col-md-12 form-group creature">
	<label>PNJ Trainer</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<select class="form-control" name="trainer_type">
				<option value="0"> TRAINER_TYPE_CLASS	trainer_class	Trains class spells</option>
				<option value="1">	TRAINER_TYPE_MOUNTS	trainer_race	Trains riding skill</option>
				<option value="2">	TRAINER_TYPE_TRADESKILLS	trainer_spell	Trains professions</option>
				<option value="3"> TRAINER_TYPE_PETS	trainer_class	Trains pet skills</option>
			</select>
		</div>
		<div class="col-md-4">
			<label>Metiers</label>
			<input type="number" class="form-control" name="trainer_spell" placeholder="ID du sort à apprendre (métiers)">    
			<label>Class ou Pet</label>
			<input type="number" class="form-control" name="trainer_class" placeholder="ID du sort à apprendre (Class ou Pet)">
			<label>Monture</label>
			<input type="number" class="form-control" name="trainer_race" placeholder="ID du sort à apprendre (monture)">
		</div>
	</div>
</div>









<input type="number" class="form-control" name="gossip_id_menu" placeholder="gossip_id_menu..">
<input type="number" class="form-control" name="gossip_menu_id" placeholder="gossip_menu entry">   



<input type="number" class="form-control" name="type_flags2" placeholder="valeur par défaut 0" disabled>
<input type="number" class="form-control" name="PetSpellDataId" placeholder="ID, found in CreatureSpellData.dbc, that displays what spells the pet has in the client. PetSpellDataId">






<select class="form-control" name="RacialLeader">
<option value="0">Desactivé</option>
<option value="1">Activé</option>
</select>



<div class="col-md-12 form-group creature">
	<label>Custom</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>HoverHeight</label>
			<input type="number" class="form-control" name="HoverHeight" placeholder="Distancer à laquelle la créature plane">
			<label>Health_mod</label>
			<input type="number" class="form-control" name="Health_mod" placeholder="Used to modify the base Level/Class Health of a creature."> 
			<label>Mana_mod</label>
			<input type="number" class="form-control" name="Mana_mod" placeholder="Used to modify the base Level/Class Mana of a creature.">
			<label>Mana_mod_extra</label>
			<input type="number" class="form-control" name="Mana_mod_extra" placeholder="Used to modify the base Level/Class Mana_mid_extra of a creature.">
			<label>Armor_mod</label>
			<input type="number" class="form-control" name="Armor_mod" placeholder="Used to modify the base Level/Class Armor_mod of a creature.">
		</div>

	</div>			
</div>


<div class="col-md-12 form-group creature">
	<label>Expert</label>
	<div class="col-md-12">
		<div class="col-md-4">
			<label>AIName</label>
			<select class="form-control" name="AIName">
				<option value="NullAI">Empty AI, creature does nothing.</option>
				<option value="AggressorAI">Creature attacks as soon as something is in aggro range.</option>
				<option value="ReactorAI">Creature attacks only if aggroed by attack, spell etc.</option>
				<option value="GuardAI">Garde </option>
				<option value="PetAI">Creature is a pet.</option>
				<option value="TotemAI">Creature casts spell from field spell1, otherwise like NullAI.</option>
				<option value="EventAI">Creature uses event based AI.</option>
				<option value="SmartAI">Creature uses new smart AI.</option>
			</select>
				<input type="text" class="form-control" name="ScriptName" placeholder="script C++ lié">
				<input type="number" class="form-control" name="WDBVerified" disabled value="8000">
		</div>

	</div>			
</div>



<label>Gossip</label>
		<select multiple="multiple" class="form-control" name="npcflag">
			<option value="0">...</option>
			<option value="1">Gossip</option>
			<option value="2">Quest Giver</option>
			<option value="16">Trainer</option>
			<option value="32">Class Trainer</option>
			<option value="64">Profession Trainer	</option>
			<option value="128">Vendor</option>
			<option value="256">Vendor Ammo</option>
			<option value="512">Vendor Food</option>
			<option value="1024">Vendor Poison</option>
			<option value="2048">Vendor Reagent</option>
			<option value="4096">Repairer</option>
			<option value="8192">Flight Master</option>
			<option value="16384">Spirit Healer</option>
			<option value="32768">Spirit Guide</option>
			<option value="65536">Innkeeper</option>
			<option value="131072">Banker</option>
			<option value="262144">Petitioner</option>
			<option value="524288">Tabard Designer</option>
			<option value="1048576">Battlemaster</option>
			<option value="2097152">Auctioneer</option>
			<option value="4194304">Stable Master</option>
			<option value="8388608">Guild Banker</option>
			<option value="16777216">Spellclick</option>
			<option value="67108864">Mailbox</option>
		</select>
		
		<label>Mechanic Immune</label>
		<select multiple="multiple" class="form-control" name="mechanic_immune_mask">
			<option value="0">...</option>
			<option value="1">		MECHANIC_CHARM	</option>
			<option value="2">		MECHANIC_DISORIENTED</option>	
			<option value="4">		MECHANIC_DISARM	</option>
			<option value="8">	MECHANIC_DISTRACT	</option>
			<option value="16">		MECHANIC_FEAR	</option>
			<option value="32">	MECHANIC_GRIP	</option>
			<option value="64">	MECHANIC_ROOT	</option>
			<option value="128">	MECHANIC_SLOW_ATTACK	</option>
			<option value="256">	MECHANIC_SILENCE	</option>
			<option value="512">	MECHANIC_SLEEP	</option>
			<option value="1024"> MECHANIC_SNARE	</option>
			<option value="2048"> MECHANIC_STUN	</option>
			<option value="4096"> MECHANIC_FREEZE	</option>
			<option value="8192"> MECHANIC_KNOCKOUT	</option>
			<option value="16384"> MECHANIC_BLEED	</option>
			<option value="32768">	MECHANIC_BANDAGE	</option>
			<option value="65536">	MECHANIC_POLYMORPH	</option>
			<option value="131072">	MECHANIC_BANISH	</option>
			<option value="262144"> MECHANIC_SHIELD	</option>
			<option value="524288">		MECHANIC_SHACKLE	</option>
			<option value="1048576">	MECHANIC_MOUNT	</option>
			<option value="2097152">		MECHANIC_INFECTED	</option>
			<option value="4194304">		MECHANIC_TURN	</option>
			<option value="8388608">		MECHANIC_HORROR	</option>
			<option value="16777216"> MECHANIC_INVULNERABILITY	</option>
			<option value="33554432">	MECHANIC_INTERRUPT	</option>
			<option value="67108864">	MECHANIC_DAZE	</option>
			<option value="134217728">	MECHANIC_DISCOVERY	</option>
			<option value="268435456"> MECHANIC_IMMUNE_SHIELD</option>	
			<option value="536870912">	MECHANIC_SAPPED	</option>
			<option value="1073741824">	MECHANIC_ENRAGED </option>
		</select>
			
		<label>Flag extra</label>
		<select multiple="multiple" class="form-control" name="flags_extra">
			<option value="0">...</option>
			<option value="1">CREATURE_FLAG_EXTRA_INSTANCE_BIND</option>
			<option value="2">CREATURE_FLAG_EXTRA_CIVILIAN</option>
			<option value="4">CREATURE_FLAG_EXTRA_NO_PARRY</option>
			<option value="8">CREATURE_FLAG_EXTRA_NO_PARRY_HASTEN</option>
			<option value="16">CEATURE_FLAG_EXTRA_NO_BLOCK</option>
			<option value="32">CREATURE_FLAG_EXTRA_NO_CRUSH</option>
			<option value="64">CREATURE_FLAG_EXTRA_NO_XP_AT_KILL</option>
			<option value="128">CREATURE_FLAG_EXTRA_INVISIBLE</option>
			<option value="256">CREATURE_FLAG_EXTRA_NO_TAUNT</option>
			<option value="512">CREATURE_FLAG_EXTRA_GHOST</option>
		</select>
		
		<label>Unit Flag</label>
		<select multiple="multiple" class="form-control" name="unit_flags">  
			<option value="1">UNIT_FLAG_SERVER_CONTROLLED	</option>
			<option value="2">UNIT_FLAG_NON_ATTACKABLE	</option>
			<option value="4">UNIT_FLAG_REMOVE_CLIENT_CONTROL	</option>
			<option value="8">UNIT_FLAG_PVP_ATTACKABLE</option>
			<option value="16">UNIT_FLAG_RENAME	</option>
			<option value="32">UNIT_FLAG_PREPARATION</option>
			<option value="64">UNIT_FLAG_UNK_6</option>
			<option value="128">UNIT_FLAG_NOT_ATTACKABLE_1	</option>
			<option value="256">UNIT_FLAG_IMMUNE_TO_PC	</option>
			<option value="512">UNIT_FLAG_IMMUNE_TO_NPC	</option>
			<option value="1024">UNIT_FLAG_LOOTING	</option>
			<option value="2048">UNIT_FLAG_PET_IN_COMBAT</option>
			<option value="8192">UNIT_FLAG_SILENCED	</option>
			<option value="16384">UNIT_FLAG_CANNOT_SWIM	</option>
			<option value="32768">UNIT_FLAG_UNK_15	</option>
			<option value="65536">UNIT_FLAG_UNK_16	</option>
			<option value="131072">UNIT_FLAG_PACIFIED	</option>
			<option value="262144">UNIT_FLAG_STUNNED	</option>
			<option value="524288">UNIT_FLAG_IN_COMBAT</option>
			<option value="1048576">UNIT_FLAG_TAXI_FLIGHT</option>
			<option value="2097152">UNIT_FLAG_DISARMED	</option>
			<option value="4194304">UNIT_FLAG_CONFUSED</option>
			<option value="8388608">UNIT_FLAG_FLEEING</option>
			<option value="16777216">UNIT_FLAG_PLAYER_CONTROLLED.</option>
			<option value="33554432">UNIT_FLAG_NOT_SELECTABLE</option>
			<option value="67108864">UNIT_FLAG_SKINNABLE</option>
			<option value="134217728">UNIT_FLAG_MOUNT</option>
			<option value="268435456">UNIT_FLAG_UNK_28</option>
			<option value="536870912">UNIT_FLAG_UNK_29</option>
			<option value="1073741824">UNIT_FLAG_SHEATHE</option>	
			<option value="2147483648">UNIT_FLAG_UNK_31</option>
		</select>
		
		<label>Unit Flags 2</label>
		<select multiple="multiple" class="form-control" name="unit_flags2">
			<option value="1">	UNIT_FLAG2_FEIGN_DEATH	</option>
			<option value="2">	UNIT_FLAG2_UNK1	Hide unit model (show only player equip)</option>
			<option value="4">	UNIT_FLAG2_IGNORE_REPUTATION	</option>
			<option value="8">	UNIT_FLAG2_COMPREHEND_LANG	</option>
			<option value="16">	UNIT_FLAG2_MIRROR_IMAGE	</option>
			<option value="32">	UNIT_FLAG2_INSTANTLY_APPEAR_MODEL	Unit model instantly appears when summoned (does not fade in) </option>
			<option value="64">	UNIT_FLAG2_FORCE_MOVEMENT	</option>
			<option value="128">	UNIT_FLAG2_DISARM_OFFHAND	 </option>
			<option value="256">	UNIT_FLAG2_DISABLE_PRED_STATS	Player has disabled predicted stats (Used by raid frames) </option>
			<option value="1024"> UNIT_FLAG2_DISARM_RANGED	this does not disable ranged weapon display (maybe additional flag needed?) </option>
			<option value="2048"> UNIT_FLAG2_REGENERATE_POWER	 </option>
			<option value="4096"> 0x0000 1000	UNIT_FLAG2_RESTRICT_PARTY_INTERACTION	Restrict interaction to party or raid </option>
			<option value="8192"> UNIT_FLAG2_PREVENT_SPELL_CLICK	Prevent spellclick </option>
			<option value="16384"> UNIT_FLAG2_ALLOW_ENEMY_INTERACT	</option>
			<option value="32768"> UNIT_FLAG2_DISABLE_TURN	</option>
			<option value="65536"> UNIT_FLAG2_UNK2	 </option>
			<option value="131072"> UNIT_FLAG2_PLAY_DEATH_ANIM	Plays special death animation upon death </option>
			<option value="262144"> UNIT_FLAG2_ALLOW_CHEAT_SPELLS allows casting spells with AttributesEx7 & SPELL_ATTR7_IS_CHEAT_SPELL  </option>
		</select>
		
		<label>Dynamic FLags</label>
		<select multiple="multiple" class="form-control" name="dynamicflags">
			<option value="0">	UNIT_DYNFLAG_NONE	</option>
			<option value="1">	UNIT_DYNFLAG_LOOTABLE	</option>
			<option value="2">	UNIT_DYNFLAG_TRACK_UNIT	Creature's location will be seen as a small dot in the minimap</option>
			<option value="4">	UNIT_DYNFLAG_TAPPED	Makes creatures name appear grey (Lua_UnitIsTapped)</option>
			<option value="8">	UNIT_DYNFLAG_TAPPED_BY_PLAYER	Lua_UnitIsTappedByPlayer usually used by PCVs (Player Controlled Vehicles)</option>
			<option value="16">	UNIT_DYNFLAG_SPECIALINFO	</option>
			<option value="32">	UNIT_DYNFLAG_DEAD	Makes the creature appear dead (this DOES NOT make the creature's name grey or not attack players).</option>
			<option value="64">	UNIT_DYNFLAG_REFER_A_FRIEND	</option>
			<option value="128">UNIT_DYNFLAG_TAPPED_BY_ALL_THREAT_LIST	Lua_UnitIsTappedByAllThreatList</option>
		</select>
		<label>Type Flags</label>
		<select class="form-control" name="type_flags">
			<option value="1">Makes the mob tameable (must also be a beast and have family set)</option>
			<option value="2">Creature are also visible for not alive player. Allow gossip interaction if npcflag allow?</option>
			<option value="4">Changes creature's visible level to "??" in the creature's portrait - Immune to Knockback.</option>
			<option value="8">Does not play wound animation on parry.</option>
			<option value="16">Hides tooltip faction.</option>
			<option value="64">Spell attackable.</option>
			<option value="12">Player can interact with the creature if its dead (not player dead)</option>
			<option value="256">Makes mob herbable</option>
			<option value="512">Makes mob minable</option>
			<option value="1024">Does not combatlog death.</option>
			<option value="2048">Creature can remain mounted when entering combat</option>
			<option value="4096">Can aid any player in combat if in range?</option>
			<option value="8192">Is using pet bar. </option>
			<option value="32768">Makes mob lootable by engineer</option>
			<option value="65536">Tamable as an exotic pet. Normal tamable flag must also be set.</option>
			<option value="131072">Collision related. (always using default collision box?)</option>
			<option value="262144">Is siege weapon.</option>
			<option value="524288">Projectiles can collide with this creature - interacts with TARGET_DEST_TRAJ</option>
			<option value="1048576">Hides nameplate.</option>
			<option value="2097152">Does not play mounted animations.</option>
			<option value="8388608">Can only interact with its creator.</option>
			<option value="134217728">Allows the creature to display a single gossip option.  </option>
		</select>