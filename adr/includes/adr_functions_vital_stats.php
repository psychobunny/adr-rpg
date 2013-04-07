<?php
/***************************************************************************
 *                                 adr_functions_vital_stats.php
 *                            -------------------
 *	Begun                : 08/01/2006
 *	Copyright            : Seteo-Bloke
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
 ***************************************************************************/

if(!defined('IN_PHPBB') ){
	die("Hacking attempt");}

///////////////
// These functions are to centralise calculations for additional stat bonuses & penalties.
//
// As of ADR v0.4.4 these functions serve only as a guideline to MOD authors in order to move
// their code into these functions for overall ease of installation & to use less code in other files.
//
// The "$temp_bonus" & "$temp_penalty" are optional values and will be set to default to '0', if not required, but can be
// used for temporary effects in battle.
//
// So please no need to tell me that they server little purpose at the moment because I know but
// these set of functions will be beneficial to future addons.
///////////////


##=== START: vital stat calcs ===##
// vital stats only - max hp, max mp & max weight
function adr_make_stat($stat, $temp_bonus=0, $temp_penalty=0)
{
	global $db;

	$stat = intval($stat);
	$temp_bonus = intval($temp_bonus);
	$temp_penalty = intval($temp_penalty);

	// Make bonus calcs
	$stat = ceil($stat + $temp_bonus);
	$stat = floor($stat - $temp_penalty);

	// Make sure variable is not less than '1'
	$stat = ($stat < '1') ? intval(1) : ceil($stat);

return $stat;
}
##=== END: vital stat calcs ===##

##=== START: characteristic calcs ===##
// characterictics only - armour class, strength, dexterity, constitution, intellignce, wisdom, charisma
function adr_make_characteristic($stat, $temp_bonus=0, $temp_penalty=0)
{
	global $db;

	$stat = intval($stat);
	$temp_bonus = intval($temp_bonus);
	$temp_penalty = intval($temp_penalty);

	// Make bonus calcs
	$stat = ceil($stat + $temp_bonus);
	$stat = floor($stat - $temp_penalty);

	// Make sure variable is not less than '1'
	$stat = ($stat < '1') ? intval(1) : ceil($stat);

return $stat;
}
##=== END: characteristic calcs ===##

##=== START: skill calcs ===##
// skills only - mining, stone cutting, enchantment, forge, thief
function adr_make_skill($stat, $temp_bonus=0, $temp_penalty=0)
{
	global $db;

	$stat = intval($stat);
	$temp_bonus = intval($temp_bonus);
	$temp_penalty = intval($temp_penalty);

	// Make bonus calcs
	$stat = ceil($stat + $temp_bonus);
	$stat = floor($stat - $temp_penalty);

	// Make sure variable is not less than '1'
	$stat = ($stat < '1') ? intval(1) : ceil($stat);

return $stat;
}
##=== END: skill calcs ===##

//function adr_make_stat($stat, $temp_bonus, $temp_penalty, $mode)
//{
//	global db;
//
//	$stat = intval($stat);
//	$temp_bonus = intval($temp_bonus);
//	$temp_penalty = intval($temp_penalty);
//
//	switch($mode)
//	{
//		case 'character_hp_max':
//
//			// Make bonus calcs
//			$stat = ceil($stat + $temp_bonus);
//			$stat = floor($stat - $temp_penalty);
//		
//			// Make sure variable is not less than '1'
//			$stat = ($stat < '1') ? intval(1) : ceil($stat);
//
//		break;
//
//		case 'reply' :
//
//			$more_xp = $board_config['Adr_experience_for_reply'];
//
//		break;
//
//		case 'editpost' :
//
//			$more_xp = $board_config['Adr_experience_for_edit'];
//
//		break;
//
//		default :
//
//			$more_xp = 0;
//
//		break;
//	}
//}

?>