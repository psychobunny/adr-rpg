<?php
/***************************************************************************
 *                                 adr_header.php
 *                            -------------------
 *   begin                : 31/01/2004
 *   copyright            : Dr DLP / Malicious Rabbit
 *   email                : ukc@wanadoo.fr
 *
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

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

adr_advanced_template_file('adr_header_body.tpl',header);

// Just because this may be if use for furthers versions
$template->assign_block_vars('header',array());

// Display message to admin if RPG is currently disabled while viewing
if(!$adr_general['Adr_disable_rpg'])
	print('<br><center><b>'.$lang['Adr_disabled_admin_msg1'].':</b> <i>'.$lang['Adr_disabled_admin_msg2'].'</i></center>');

##=== START: cache update check
if(time() > ($adr_general['Adr_cache_last_updated'] + ($adr_general['Adr_cache_interval'] *60))){
	adr_update_all_cache_infos(); // check for cache update
	if($adr_general['Adr_character_limit_enable'] == '1'){
		adr_character_replen_quota();
	} // check for quota's etc update
}
##=== END: cache update check

## Define the main menu ##
$main_menu_text = array($lang['Adr_characters_page_name'], $lang['Adr_town_page_name'], $lang['Adr_shops_page_name'], $lang['Adr_battle_page_name'], $lang['Adr_misc_page_name']);
$main_menu = array('character', 'town', 'shops', 'battle_community', 'character_prefs');

##=== START sub menu's ===##
if($loc == 'character')
{
	$character_sheet = ($user_id == $searchid) ? $lang['Adr_characters_mine'] : $lang['Adr_characters_page_name'];
	$inventory = ($user_id == $searchid) ? $lang['Adr_inventory_mine'] : $lang['Adr_inventory_page_name'];
	$skills = ($user_id == $searchid) ? $lang['Adr_character_skills_mine'] : $lang['Adr_character_skills'];
	$equipment = ($user_id == $searchid) ? $lang['Adr_equipment_mine'] : $lang['Adr_equipment_page_name'];

	$sub_menu_text = array($character_sheet, $inventory, $skills, $equipment);
	$sub_menu = array('adr_character', 'adr_character_inventory', 'adr_character_skills', 'adr_character_equipment');
}
elseif($loc == 'town')
{
	$sub_menu_text = array( $lang['Adr_town_page_name'], $lang['Adr_temple_page_name'], $lang['Adr_forge_page_name'], $lang['Adr_vault_page_name'], $lang['Adr_courthouse_page_name'] );
	$sub_menu = array('adr_town', 'adr_temple', 'adr_forge', 'adr_vault', 'adr_courthouse');
}
elseif($loc == 'character_prefs')
{
	$sub_menu_text = array($lang['Adr_character_preferences'], $lang['Adr_characters_list_page_name'], $lang['Adr_characters_faq']);
	$sub_menu = array('adr_character_prefs', 'adr_character_list', 'adr_character_faq');
}
elseif($loc == 'shops')
{
	$sql = "SELECT shop_id FROM " . ADR_SHOPS_TABLE . "
		WHERE shop_owner_id = '$user_id'";
	$result = $db->sql_query($sql);
	if(!$result){
		message_die(GENERAL_ERROR, 'Could not obtain shops information', "", __LINE__, __FILE__, $sql);}
	$row = $db->sql_fetchrow($result);

	if(is_numeric($row['shop_id'])){
		$user_shop = $lang['Adr_users_shops_manage'];
		$user_shop_link = 'see_shop&amp;shop_owner_id='.$user_id;
	}
	else{
		$user_shop = $lang['Adr_users_shops_create'];
		$user_shop_link = 'create_shop';
	}

	$sub_menu_text = array($lang['Adr_forum_shops_go'], $lang['Adr_users_shops_list'], $lang['Adr_items_search'], $user_shop);
	$sub_menu = array('view_store_list', 'shop_list', 'search_item', $user_shop_link);
}
elseif($loc == 'battle_community')
{
	$sub_menu_text = array($lang['Adr_battle_community_submenu'], $lang['Adr_battle_submenu'], $lang['Adr_battle_pvp_submenu']);
	$sub_menu = array('adr_battle_community', 'adr_battle', 'adr_character_pvp');
}
##=== END sub menu's ===##

// Construct the main menu
for ( $i = 0 ; $i < count($main_menu) ; $i ++ )
{
	$location = ( $loc == $main_menu[$i] ) ? '<b>'.$main_menu_text[$i].'</b>': $main_menu_text[$i];
	$main_row = ( $loc == $main_menu[$i] ) ? 'row2': 'row1' ;
	$main_style = ( $loc == $main_menu[$i] ) ? 'border-left : 2px solid Black; border-top : 2px solid Black; border-right : 2px solid Black; border-bottom : 2px solid Black; ': 'border-left : 1px solid Black; border-top : 1px solid Black; border-right : 1px solid Black; border-bottom : 1px solid Black; ' ;
	$main_link = append_sid("adr_$main_menu[$i].$phpEx");


	$template->assign_block_vars('header.header_main_menu' , array(
		'MAIN_STYLE' => $main_style,
		'MAIN_ROW' => $main_row,
		'MAIN_HEADER' => $location,
		'MAIN_LINK' => $main_link,
	));
}

// Construct the sub menu
for ( $i = 0 ; $i < count($sub_menu) ; $i ++ )
{
	if ( $loc == 'shops' )
	{
		if ( intval($HTTP_GET_VARS['shop_owner_id']) < 2 )
		{
			$sub_row = ( $mode == $sub_menu[$i]  ) ? 'row2': 'row1' ;
			$sub_style = ( $mode == $sub_menu[$i] ) ? 'border-left : 2px solid Black; border-top : 2px solid Black; border-right : 2px solid Black; border-bottom : 2px solid Black; ': 'border-left : 1px solid Black; border-top : 1px solid Black; border-right : 1px solid Black; border-bottom : 1px solid Black; ' ;
			$sub_location = ( $mode == $sub_menu[$i] ) ? '<b>'.$sub_menu_text[$i].'</b>': $sub_menu_text[$i];
		}
		else
		{
			$sub_row = ( $sub_menu[$i] == $user_shop_link ) ? 'row2': 'row1' ;
			$sub_style = ( $sub_menu[$i] == $user_shop_link ) ? 'border-left : 2px solid Black; border-top : 2px solid Black; border-right : 2px solid Black; border-bottom : 2px solid Black; ': 'border-left : 1px solid Black; border-top : 1px solid Black; border-right : 1px solid Black; border-bottom : 1px solid Black; ' ;
			$sub_location = ( $sub_menu[$i] == $user_shop_link ) ? '<b>'.$sub_menu_text[$i].'</b>': $sub_menu_text[$i];
		}

		$sub_link = append_sid("adr_shops.$phpEx?mode=$sub_menu[$i]");
	}
	else
	{
		$sub_row = ( $sub_loc == $sub_menu[$i] ) ? 'row2': 'row1' ;
		$sub_location = ( $sub_loc == $sub_menu[$i] ) ? '<b>'.$sub_menu_text[$i].'</b>': $sub_menu_text[$i];
		$sub_style = ( $sub_loc == $sub_menu[$i] ) ? 'border-left : 2px solid Black; border-top : 2px solid Black; border-right : 2px solid Black; border-bottom : 2px solid Black; ': 'border-left : 1px solid Black; border-top : 1px solid Black; border-right : 1px solid Black; border-bottom : 1px solid Black; ' ;
		$sub_link = append_sid("$sub_menu[$i].$phpEx?".POST_USERS_URL."=".$searchid."");
	}

	$template->assign_block_vars('header.header_sub_menu' , array(
		'SUB_STYLE' => $sub_style,
		'SUB_ROW' => $sub_row,
		'SUB_HEADER' => $sub_location,
		'SUB_LINK' => $sub_link,
	));
}

// Construct the nav bar
$nav_menu_text = array($lang['Adr_characters_page_name'], $lang['Adr_inventory_page_name'], $lang['Adr_character_skills'], $lang['Adr_equipment_page_name'], '---', $lang['Adr_town_page_name'], $lang['Adr_temple_page_name'], $lang['Adr_forge_page_name'], $lang['Adr_vault_page_name'], $lang['Adr_courthouse_page_name'], '---', $lang['Adr_shops_general_page_name'], $lang['Adr_shops_users_page_name'], '---', $lang['Adr_battle_community_submenu'], $lang['Adr_battle_page_name'], $lang['Adr_defy_page_name'], '---', $lang['Adr_character_preferences'], $lang['Adr_characters_list_page_name'], $lang['Adr_faq_title']);
$nav_menu = array('character.php', 'character_inventory.php', 'character_skills.php', 'character_equipment.php', '', 'town.php', 'temple.php', 'forge.php', 'vault.php', 'courthouse.php', '', 'shops.php', 'shops.php?mode=shop_list', '', 'battle_community.php', 'battle.php', 'character_pvp.php', '', 'character_prefs.php', 'character_list.php', 'character_faq.php');

$select_nav = '<option selected value="">Jump to:';
for($i = 0; $i < count($nav_menu); $i++)
{
   $select_nav .= '<option value="' . $nav_menu[$i] . '">' . $nav_menu_text[$i] . '</option>';
}

## START show ADR time (4x normal time) ##
$timezone_info = explode(":", adr_timezone());
## END show ADR time ##

$template->assign_vars(array(
	'SUB_WIDTH'  => ( 100 / count($sub_menu) ),
	'ADR_YEAR' => $timezone_info[0],
	'ADR_MONTH' => $timezone_info[1],
	'ADR_DAY' => $timezone_info[2],
	'ADR_HOUR' => $timezone_info[3],
	'L_YEAR' => $lang['year'],
	'L_MONTH' => $lang['month'],
	'L_DAY' => $lang['day'],
	'L_HOUR' => $lang['hour'],
	'MAIN_WIDTH' => ( 100 / count($main_menu) ),
	'NAV' => $select_nav,
	'L_GO' => $lang['Go'],
	'L_QUICK_NAV' => $lang['Adr_quick_nav'],
	'L_COPYRIGHT' => $lang['Adr_copyright'],
	'U_COPYRIGHT' => append_sid("adr_copyright.$phpEx"),
));

if ( $sub_loc != 'adr_battle' )
{
	$template->pparse('header');
}

?>
