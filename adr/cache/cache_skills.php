<?php
/***************************************************************************
 *						cache_skills.php
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

$adr_skills = array(
	'1' => array('skill_id' => '1', 'skill_name' => 'Adr_mining', 'skill_desc' => 'Adr_skill_mining_desc', 'skill_img' => 'skill_mining.gif', 'skill_req' => '100', 'skill_chance' => '5'),
	'2' => array('skill_id' => '2', 'skill_name' => 'Adr_stone', 'skill_desc' => 'Adr_skill_stone_desc', 'skill_img' => 'skill_stone.gif', 'skill_req' => '200', 'skill_chance' => '5'),
	'3' => array('skill_id' => '3', 'skill_name' => 'Adr_forge', 'skill_desc' => 'Adr_skill_forge_desc', 'skill_img' => 'skill_forge.gif', 'skill_req' => '50', 'skill_chance' => '5'),
	'4' => array('skill_id' => '4', 'skill_name' => 'Adr_enchantment', 'skill_desc' => 'Adr_skill_enchantment_desc', 'skill_img' => 'skill_enchantment.gif', 'skill_req' => '300', 'skill_chance' => '5'),
	'5' => array('skill_id' => '5', 'skill_name' => 'Adr_trading', 'skill_desc' => 'Adr_skill_trading_desc', 'skill_img' => 'skill_trading.gif', 'skill_req' => '80', 'skill_chance' => '5'),
	'6' => array('skill_id' => '6', 'skill_name' => 'Adr_thief', 'skill_desc' => 'Adr_skill_thief_desc', 'skill_img' => 'skill_thief.gif', 'skill_req' => '70', 'skill_chance' => '5'),
);

?>