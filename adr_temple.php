<?php 
/***************************************************************************
 *					adr_temple.php
 *				------------------------
 *	begin 			: 22/02/2004
 *	copyright			: Malicious Rabbit / Dr DLP
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

define('IN_PHPBB', true); 
define('IN_ADR_TEMPLE', true); 
define('IN_ADR_BATTLE', true);
define('IN_ADR_CHARACTER', true);
$phpbb_root_path = './'; 
include($phpbb_root_path . 'extension.inc'); 
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'adr/includes/adr_global.'.$phpEx);

$loc = 'town';
$sub_loc = 'adr_temple';

//
// Start session management
$userdata = session_pagestart($user_ip, PAGE_ADR); 
init_userprefs($userdata); 
// End session management
//

$user_id = $userdata['user_id'];

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
	$redirect = "adr_temple.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login.$phpEx?redirect=$redirect", true));
}

// Includes the tpl and the header
adr_template_file('adr_temple_body.tpl');
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

// Get the general settings
$adr_general = adr_get_general_config();
adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);

// Deny access if the user is into a battle or is imprisoned
adr_battle_cell_check($user_id, $userdata);

// Get the general config
$adr_general = adr_get_general_config();

if ( !$adr_general['Adr_disable_rpg'] && $userdata['user_level'] != ADMIN ) 
{	
	adr_previous ( Adr_disable_rpg , 'index' , '' );
}

// Get the user infos
$adr_char = adr_get_user_infos($user_id);

// Fix the values
$heal_price = ceil( $adr_general['temple_heal_cost'] * $adr_char['character_level'] );
$resurrect_price = ceil( $adr_general['temple_resurrect_cost'] * $adr_char['character_level'] );

$heal = $_POST['heal'];
$resurrect = $_POST['resurrect'];


if ( $heal )
{
	if (  $adr_char['character_hp'] < 1 )
	{
		adr_previous( Adr_temple_resurrect_instead , adr_temple , '' );
	}

	if ( ( $adr_char['character_hp'] == $adr_char['character_hp_max'] ) && ( $adr_char['character_mp'] == $adr_char['character_mp_max'] ) )
	{
		adr_previous( Adr_temple_heal_not , adr_temple , '' );
	}

	adr_substract_points( $user_id , $heal_price , adr_temple , '' );

	$sql = "UPDATE " . ADR_CHARACTERS_TABLE . "
		SET character_hp = character_hp_max ,
		    character_mp = character_mp_max
		WHERE character_id = $user_id ";
	if ( !($result=$db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR , 'Can not update the user characteristics');
	}
	adr_previous( Adr_temple_healed , adr_temple , '' );
}

else if ( $resurrect )
{
	if (  $adr_char['character_hp'] > 0 )
	{
		adr_previous( Adr_temple_heal_instead , adr_temple , '' );
	}

	adr_substract_points( $user_id , $resurrect_price , adr_temple , '' );

	$sql = "UPDATE " . ADR_CHARACTERS_TABLE . "
		SET character_hp = character_hp_max ,
		    character_mp = character_mp_max
		WHERE character_id = $user_id ";
	if ( !($result=$db->sql_query($sql)))
	{
		message_die(GENERAL_ERROR , 'Can not update the user characteristics');
	}
	adr_previous( Adr_temple_resurrected , adr_temple , '' );
}

else
{
	$template->assign_vars(array(
		'HEAL_COST' => $heal_price,
		'RESURRECT_COST' => $resurrect_price,
		'L_TEMPLE' => $lang['Adr_temple'],
		'L_HEAL_COST' => $lang['Adr_temple_heal_cost'],
		'L_RESURRECT_COST' => $lang['Adr_temple_resurrect_cost'],
		'L_HEAL' => $lang['Adr_temple_heal'],
		'L_RESURRECT' => $lang['Adr_temple_resurrect'],
		'L_POINTS' => $board_config['points_name'],
		'S_CHARACTER_ACTION' => append_sid("adr_temple.$phpEx"),
	));
}


include($phpbb_root_path . 'adr/includes/adr_header.'.$phpEx);

$template->pparse('body');
include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
 
?> 
