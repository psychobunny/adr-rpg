<?php
/***************************************************************************
 *						cache_classes.php
 *						-------------
 *	begin			: 15/02/2004
 *	copyright		: Ptirhiik
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
	exit;
}

$adr_classes = array(
	'1' => array('class_id' => '1', 'class_name' => 'Adr_class_fighter', 'class_desc' => 'Adr_class_fighter_desc', 'class_level' => '0', 'class_img' => 'Fighter.gif', 'class_might_req' => '0', 'class_dexterity_req' => '0', 'class_constitution_req' => '0', 'class_intelligence_req' => '0', 'class_wisdom_req' => '0', 'class_charisma_req' => '0', 'class_base_hp' => '30', 'class_base_mp' => '2', 'class_base_ac' => '15', 'class_update_hp' => '3', 'class_update_mp' => '0', 'class_update_ac' => '1', 'class_update_xp_req' => '1500', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'2' => array('class_id' => '2', 'class_name' => 'Adr_class_barbare', 'class_desc' => 'Adr_class_barbare_desc', 'class_level' => '0', 'class_img' => 'Barbare.gif', 'class_might_req' => '12', 'class_dexterity_req' => '0', 'class_constitution_req' => '10', 'class_intelligence_req' => '0', 'class_wisdom_req' => '0', 'class_charisma_req' => '0', 'class_base_hp' => '40', 'class_base_mp' => '1', 'class_base_ac' => '10', 'class_update_hp' => '4', 'class_update_mp' => '0', 'class_update_ac' => '0', 'class_update_xp_req' => '2000', 'class_update_of' => '1', 'class_update_of_req' => '5', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'3' => array('class_id' => '3', 'class_name' => 'Adr_class_druid', 'class_desc' => 'Adr_class_druid_desc', 'class_level' => '0', 'class_img' => 'Druid.gif', 'class_might_req' => '0', 'class_dexterity_req' => '0', 'class_constitution_req' => '0', 'class_intelligence_req' => '0', 'class_wisdom_req' => '10', 'class_charisma_req' => '0', 'class_base_hp' => '20', 'class_base_mp' => '20', 'class_base_ac' => '10', 'class_update_hp' => '1', 'class_update_mp' => '2', 'class_update_ac' => '2', 'class_update_xp_req' => '1800', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'4' => array('class_id' => '4', 'class_name' => 'Adr_class_bard', 'class_desc' => 'Adr_class_bard_desc', 'class_level' => '0', 'class_img' => 'Bard.gif', 'class_might_req' => '3', 'class_dexterity_req' => '3', 'class_constitution_req' => '3', 'class_intelligence_req' => '3', 'class_wisdom_req' => '3', 'class_charisma_req' => '10', 'class_base_hp' => '15', 'class_base_mp' => '15', 'class_base_ac' => '15', 'class_update_hp' => '2', 'class_update_mp' => '2', 'class_update_ac' => '2', 'class_update_xp_req' => '1200', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'5' => array('class_id' => '5', 'class_name' => 'Adr_class_magician', 'class_desc' => 'Adr_class_magician_desc', 'class_level' => '0', 'class_img' => 'Magician.gif', 'class_might_req' => '0', 'class_dexterity_req' => '0', 'class_constitution_req' => '0', 'class_intelligence_req' => '14', 'class_wisdom_req' => '14', 'class_charisma_req' => '0', 'class_base_hp' => '8', 'class_base_mp' => '30', 'class_base_ac' => '5', 'class_update_hp' => '0', 'class_update_mp' => '1', 'class_update_ac' => '3', 'class_update_xp_req' => '2500', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'6' => array('class_id' => '6', 'class_name' => 'Adr_class_monk', 'class_desc' => 'Adr_class_monk_desc', 'class_level' => '0', 'class_img' => 'Monk.gif', 'class_might_req' => '5', 'class_dexterity_req' => '5', 'class_constitution_req' => '5', 'class_intelligence_req' => '5', 'class_wisdom_req' => '5', 'class_charisma_req' => '5', 'class_base_hp' => '25', 'class_base_mp' => '10', 'class_base_ac' => '20', 'class_update_hp' => '2', 'class_update_mp' => '2', 'class_update_ac' => '1', 'class_update_xp_req' => '2400', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'7' => array('class_id' => '7', 'class_name' => 'Adr_class_paladin', 'class_desc' => 'Adr_class_paladin_desc', 'class_level' => '0', 'class_img' => 'Paladin.gif', 'class_might_req' => '10', 'class_dexterity_req' => '8', 'class_constitution_req' => '10', 'class_intelligence_req' => '10', 'class_wisdom_req' => '8', 'class_charisma_req' => '15', 'class_base_hp' => '40', 'class_base_mp' => '15', 'class_base_ac' => '20', 'class_update_hp' => '2', 'class_update_mp' => '4', 'class_update_ac' => '1', 'class_update_xp_req' => '3000', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'8' => array('class_id' => '8', 'class_name' => 'Adr_class_priest', 'class_desc' => 'Adr_class_priest_desc', 'class_level' => '0', 'class_img' => 'Priest.gif', 'class_might_req' => '0', 'class_dexterity_req' => '0', 'class_constitution_req' => '0', 'class_intelligence_req' => '10', 'class_wisdom_req' => '12', 'class_charisma_req' => '0', 'class_base_hp' => '20', 'class_base_mp' => '20', 'class_base_ac' => '15', 'class_update_hp' => '1', 'class_update_mp' => '2', 'class_update_ac' => '2', 'class_update_xp_req' => '2000', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'9' => array('class_id' => '9', 'class_name' => 'Adr_class_sorceror', 'class_desc' => 'Adr_class_sorceror_desc', 'class_level' => '0', 'class_img' => 'Sorcerer.gif', 'class_might_req' => '0', 'class_dexterity_req' => '0', 'class_constitution_req' => '0', 'class_intelligence_req' => '16', 'class_wisdom_req' => '0', 'class_charisma_req' => '0', 'class_base_hp' => '30', 'class_base_mp' => '100', 'class_base_ac' => '10', 'class_update_hp' => '0', 'class_update_mp' => '1', 'class_update_ac' => '10', 'class_update_xp_req' => '4500', 'class_update_of' => '5', 'class_update_of_req' => '10', 'class_selectable' => '0', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
	'10' => array('class_id' => '10', 'class_name' => 'Adr_class_thief', 'class_desc' => 'Adr_class_thief_desc', 'class_level' => '0', 'class_img' => 'Thief.gif', 'class_might_req' => '0', 'class_dexterity_req' => '12', 'class_constitution_req' => '0', 'class_intelligence_req' => '0', 'class_wisdom_req' => '0', 'class_charisma_req' => '0', 'class_base_hp' => '20', 'class_base_mp' => '10', 'class_base_ac' => '10', 'class_update_hp' => '1', 'class_update_mp' => '2', 'class_update_ac' => '1', 'class_update_xp_req' => '1500', 'class_update_of' => '0', 'class_update_of_req' => '0', 'class_selectable' => '1', 'class_magic_attack_req' => '0', 'class_magic_resistance_req' => '0'),
);


?>