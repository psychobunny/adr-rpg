<?php
/***************************************************************************
*                               admin_adr_elements.php
*                              -------------------
*     begin                : 30/01/2004
*     copyright            : Dr DLP / Malicious Rabbit
*
*
****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/
define('IN_PHPBB', 1);
define('IN_ADR_ADMIN', 1);
define('IN_ADR_CHARACTER', 1);

if( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$module['Adr']['Adr_elements'] = $filename;

	return;
}

$phpbb_root_path = "./../";
require($phpbb_root_path . 'extension.inc');
require('./pagestart.' . $phpEx);
include($phpbb_root_path . 'adr/includes/adr_global.'.$phpEx);


if( isset($_POST['mode']) || isset($_GET['mode']) )
{
	$mode = ( isset($_POST['mode']) ) ? $_POST['mode'] : $_GET['mode'];
	$mode = htmlspecialchars($mode);
}
else
{
	$mode = "";
}

if( isset($_POST['add']) || isset($_GET['add']) )
{

	adr_template_file('admin/config_adr_elements_edit_body.tpl');

	$s_hidden_fields = '<input type="hidden" name="mode" value="savenew" />';

	$template->assign_block_vars( 'elements_add', array());

	$level[0] = $lang['Adr_races_level_all'];
	$level[1] = $lang['Adr_races_level_admin'];
	$level[2] = $lang['Adr_races_level_mod'];

	$level_list = '<select name="level">';
	for( $i = 0; $i < 3; $i++ )
	{
		$level_list .= '<option value = "'.$i.'" >' . $level[$i] . '</option>';
	}
	$level_list .= '</select>';

	$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE ;
	$result = $db->sql_query($sql);
	if( !$result )
	{
		message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
	}
	$element_list = $db->sql_fetchrowset($result);

	// Stronger element list
	$element_str_list = '<select name="element_str_list">';
	for($i = 0; $i < count($element_list); $i++)
	{
		$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
		$element_selected = ( $elements['element_oppose_strong'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
		$element_str_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
	}
	$element_str_list .= '</select>';

	// Weaker element list
	$element_weak_list = '<select name="element_weak_list">';
	for($i = 0; $i < count($element_list); $i++)
	{
		$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
		$element_selected = ( $elements['element_oppose_weak'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
		$element_weak_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
	}
	$element_weak_list .= '</select>';

	$template->assign_vars(array(
		"LEVEL_LIST" => $level_list,
		"L_ELEMENTS_TITLE" => $lang['Adr_elements_add_edit'],
		"L_ELEMENTS_EXPLAIN" => $lang['Adr_elements_add_edit_explain'],
		"L_ELEMENT_COLOUR" => $lang['Adr_elements_colour'],
		"L_ELEMENT_COLOUR_EX" => $lang['Adr_elements_colour_ex'],
		"L_NAME" => $lang['Adr_races_name'],
		"L_NAME_EXPLAIN" => $lang['Adr_races_name_explain'],
		"L_DESC" => $lang['Adr_races_desc'],
		"L_IMG" => $lang['Adr_races_image'],
		"L_IMG_EXPLAIN" => $lang['Adr_elements_image_explain'],
		"L_LEVEL" => $lang['Adr_races_level'],
		"L_LEVEL_EXPLAIN" => $lang['Adr_elements_level_explain'],
		"L_MINING_BONUS" => $lang['Adr_races_bonus_mining'],
		"L_STONE_BONUS" => $lang['Adr_races_bonus_stone'],
		"L_FORGE_BONUS" => $lang['Adr_races_bonus_forge'],
		"L_ENCHANT_BONUS" => $lang['Adr_races_bonus_enchant'],
		"L_TRADING_BONUS" => $lang['Adr_races_bonus_trading'],
		"L_THIEF_BONUS" => $lang['Adr_races_bonus_thief'],
		"L_OPPOSE_STRONG" => $lang['Adr_element_oppose_str'],
		"L_OPPOSE_STRONG_DMG" => $lang['Adr_element_oppose_str_dmg'],
		"L_OPPOSE_SAME" => $lang['Adr_element_oppose_same'],
		"L_OPPOSE_SAME_DMG" => $lang['Adr_element_oppose_same_dmg'],
		"L_OPPOSE_WEAK" => $lang['Adr_element_oppose_weak'],
		"L_OPPOSE_WEAK_DMG" => $lang['Adr_element_oppose_weak_dmg'],
		"ELEMENT_STR_LIST" => $element_str_list,
		"ELEMENT_SAME_LIST" => $element_same_list,
		"ELEMENT_WEAK_LIST" => $element_weak_list,
		"L_SUBMIT" => $lang['Submit'],
		"S_HIDDEN_FIELDS" => $s_hidden_fields) 
	);

	$template->pparse("body");
}
else if ( $mode != "" )
{
	switch( $mode )
	{
		case 'delete':

			$element_id = ( !empty($_POST['id']) ) ? intval($_POST['id']) : intval($_GET['id']);

			if ( $element_id == '1' )
			{
				adr_previous( Adr_element_default , admin_adr_elements , '' );
			}

			$sql = "UPDATE " . ADR_CHARACTERS_TABLE . "
				SET character_element = 1
				WHERE character_element = " . $element_id;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't delete element", "", __LINE__, __FILE__, $sql);
			}

			$sql = "DELETE FROM " . ADR_ELEMENTS_TABLE . "
				WHERE element_id = " . $element_id;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't delete element", "", __LINE__, __FILE__, $sql);
			}

			adr_previous( Adr_element_successful_deleted , admin_adr_elements , '' );
			break;

		case 'edit':

			$element_id = ( !empty($_POST['id']) ) ? intval($_POST['id']) : intval($_GET['id']);

			adr_template_file('admin/config_adr_elements_edit_body.tpl');

			$template->assign_block_vars( 'elements_edit', array());

			$sql = "SELECT *
				FROM " . ADR_ELEMENTS_TABLE ."
				WHERE element_id = $element_id ";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$elements = $db->sql_fetchrow($result);

			$s_hidden_fields = '<input type="hidden" name="mode" value="save" /><input type="hidden" name="element_id" value="' . $elements['element_id'] . '" />';

			$pic = $elements['element_img'];

			$level[0] = $lang['Adr_races_level_all'];
			$level[1] = $lang['Adr_races_level_admin'];
			$level[2] = $lang['Adr_races_level_mod'];
			$level_list = '<select name="level">';
			for( $i = 0; $i < 3; $i++ )
			{
				$selected = ( $i == $elements['element_level'] ) ? ' selected="selected"' : '';
				$level_list .= '<option value = "'.$i.'" '.$selected.' >' . $level[$i] . '</option>';
			}
			$level_list .= '</select>';

			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE . "
					WHERE element_id <> $element_id ";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$element_list = $db->sql_fetchrowset($result);

			// Stronger element list
			$element_str_list = '<select name="element_str_list">';
			for($i = 0; $i < count($element_list); $i++)
			{
				$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
				$element_selected = ( $elements['element_oppose_strong'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
				$element_str_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
			}
			$element_str_list .= '</select>';

			// Weaker element list
			$element_weak_list = '<select name="element_weak_list">';
			for($i = 0; $i < count($element_list); $i++)
			{
				$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
				$element_selected = ( $elements['element_oppose_weak'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
				$element_weak_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
			}
			$element_weak_list .= '</select>';

			$template->assign_vars(array(
				"ELEMENT_NAME" => $elements['element_name'],
				"ELEMENT_NAME_EXPLAIN" => adr_get_lang($elements['element_name']),
				"ELEMENT_DESC" => $elements['element_desc'],
				"ELEMENT_DESC_EXPLAIN" => adr_get_lang($elements['element_desc']),
				"ELEMENT_IMG" => $elements['element_img'],
				"ELEMENT_IMG_EX" => $pic ,
				"ELEMENT_COLOUR" => $elements['element_colour'],
				"MINING_BONUS" => $elements['element_skill_mining_bonus'],
				"STONE_BONUS" => $elements['element_skill_stone_bonus'],
				"FORGE_BONUS" => $elements['element_skill_forge_bonus'],
				"ENCHANT_BONUS" => $elements['element_skill_enchantment_bonus'],
				"TRADING_BONUS" => $elements['element_skill_trading_bonus'],
				"THIEF_BONUS" => $elements['element_skill_thief_bonus'],
				"LEVEL_LIST" => $level_list,
				"L_ELEMENTS_TITLE" => $lang['Adr_elements_add_edit'],
				"L_ELEMENTS_EXPLAIN" => $lang['Adr_elements_add_edit_explain'],
				"L_ELEMENT_COLOUR" => $lang['Adr_elements_colour'],
				"L_ELEMENT_COLOUR_EX" => $lang['Adr_elements_colour_ex'],
				"L_NAME" => $lang['Adr_races_name'],
				"L_NAME_EXPLAIN" => $lang['Adr_races_name_explain'],
				"L_DESC" => $lang['Adr_races_desc'],
				"L_IMG" => $lang['Adr_races_image'],
				"L_IMG_EXPLAIN" => $lang['Adr_elements_image_explain'],
				"L_LEVEL" => $lang['Adr_races_level'],
				"L_LEVEL_EXPLAIN" => $lang['Adr_elements_level_explain'],
				"L_MINING_BONUS" => $lang['Adr_races_bonus_mining'],
				"L_STONE_BONUS" => $lang['Adr_races_bonus_stone'],
				"L_FORGE_BONUS" => $lang['Adr_races_bonus_forge'],
				"L_ENCHANT_BONUS" => $lang['Adr_races_bonus_enchant'],
				"L_TRADING_BONUS" => $lang['Adr_races_bonus_trading'],
				"L_THIEF_BONUS" => $lang['Adr_races_bonus_thief'],
				"L_OPPOSE_STRONG" => $lang['Adr_element_oppose_str'],
				"L_OPPOSE_STRONG_DMG" => $lang['Adr_element_oppose_str_dmg'],
				"L_OPPOSE_SAME" => $lang['Adr_element_oppose_same'],
				"L_OPPOSE_SAME_DMG" => $lang['Adr_element_oppose_same_dmg'],
				"L_OPPOSE_WEAK" => $lang['Adr_element_oppose_weak'],
				"L_OPPOSE_WEAK_DMG" => $lang['Adr_element_oppose_weak_dmg'],
				"ELEMENT_STR_LIST" => $element_str_list,
				"ELEMENT_SAME_LIST" => $element_same_list,
				"ELEMENT_WEAK_LIST" => $element_weak_list,
				"OPPOSE_STR_DMG" => $elements['element_oppose_strong_dmg'],
				"OPPOSE_SAME_DMG" => $elements['element_oppose_same_dmg'],
				"OPPOSE_WEAK_DMG" => $elements['element_oppose_weak_dmg'],
				"L_SUBMIT" => $lang['Submit'],
				"S_HIDDEN_FIELDS" => $s_hidden_fields) 
			);

			$template->pparse("body");
			break;

		case "save":

			$element_id = ( !empty($_POST['element_id']) ) ? intval($_POST['element_id']) : intval($_GET['element_id']);
			$element_name = ( isset($_POST['element_name']) ) ? trim($_POST['element_name']) : trim($_GET['element_name']);
			$element_img = ( isset($_POST['element_img']) ) ? trim($_POST['element_img']) : trim($_GET['element_img']);
			$element_desc = ( isset($_POST['element_desc']) ) ? trim($_POST['element_desc']) : trim($_GET['element_desc']);
			$level = intval($_POST['level']);
			$b_mining = intval($_POST['mining_bonus']);
			$b_stone = intval($_POST['stone_bonus']);
			$b_forge = intval($_POST['forge_bonus']);
			$b_enchant = intval($_POST['enchant_bonus']);
			$b_trading = intval($_POST['trading_bonus']);
			$b_thief = intval($_POST['thief_bonus']);
			$oppose_str_dmg = intval($_POST['oppose_str_dmg']);
			$oppose_same_dmg = intval($_POST['oppose_same_dmg']); 
			$oppose_weak_dmg = intval($_POST['oppose_weak_dmg']); 
			$element_oppose_str = intval($_POST['element_str_list']);
			$element_oppose_weak = intval($_POST['element_weak_list']);
			$element_colour = $_POST['element_colour'];

			if ($element_name == '' )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}

			$sql = "UPDATE " . ADR_ELEMENTS_TABLE . "
				SET element_name = '" . str_replace("\'", "''", $element_name) . "', 	
					element_desc = '" . str_replace("\'", "''", $element_desc) . "', 
					element_img = '" . str_replace("\'", "''", $element_img) . "',
					element_level = $level ,
					element_skill_mining_bonus = $b_mining ,
					element_skill_stone_bonus = $b_stone , 
					element_skill_forge_bonus = $b_forge ,
					element_skill_enchantment_bonus = $b_enchant ,
					element_skill_trading_bonus = $b_trading , 
					element_skill_thief_bonus = $b_thief , 
					element_oppose_strong_dmg = $oppose_str_dmg ,
					element_oppose_same_dmg = $oppose_same_dmg ,
					element_oppose_weak_dmg = $oppose_weak_dmg ,
					element_oppose_strong = $element_oppose_str,
					element_colour = '$element_colour',
					element_oppose_weak = $element_oppose_weak
				WHERE element_id = " . $element_id;
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, "Couldn't update elements info", "", __LINE__, __FILE__, $sql);
			}

			// Update cache
			adr_update_element_infos();

			adr_previous( Adr_element_successful_edited , admin_adr_elements , '' );
			break;

		case "savenew":

			$sql = "SELECT element_id
			FROM " . ADR_ELEMENTS_TABLE ."
			ORDER BY element_id 
			DESC LIMIT 1";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$fields_data = $db->sql_fetchrow($result);

			$element_name = ( isset($_POST['element_name']) ) ? trim($_POST['element_name']) : trim($_GET['element_name']);
			$element_img = ( isset($_POST['element_img']) ) ? trim($_POST['element_img']) : trim($_GET['element_img']);
			$element_desc = ( isset($_POST['element_desc']) ) ? trim($_POST['element_desc']) : trim($_GET['element_desc']);
			$level = intval($_POST['level']);
			$b_mining = intval($_POST['mining_bonus']);
			$b_stone = intval($_POST['stone_bonus']);
			$b_forge = intval($_POST['forge_bonus']);
			$b_enchant = intval($_POST['enchant_bonus']);
			$b_trading = intval($_POST['trading_bonus']);
			$b_thief = intval($_POST['thief_bonus']);
			$oppose_str_dmg = intval($_POST['oppose_str_dmg']);
			$oppose_same_dmg = intval($_POST['oppose_same_dmg']); 
			$oppose_weak_dmg = intval($_POST['oppose_weak_dmg']); 
			$element_oppose_str = intval($_POST['element_str_list']);
			$element_oppose_weak = intval($_POST['element_weak_list']);
			$element_colour = $_POST['element_colour'];

			$element_id = $fields_data['element_id'] +1;

			if ($element_name == '' )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}

			$sql = "INSERT INTO " . ADR_ELEMENTS_TABLE . " 
				( element_id , element_name , element_desc ,  element_level , element_img , element_skill_mining_bonus , element_skill_stone_bonus , element_skill_forge_bonus , element_skill_enchantment_bonus , element_skill_trading_bonus , element_skill_thief_bonus , element_oppose_strong , element_oppose_strong_dmg , element_oppose_weak , element_oppose_weak_dmg , element_oppose_same_dmg, element_colour )
				VALUES ( $element_id,'" . str_replace("\'", "''", $element_name) . "', '" . str_replace("\'", "''", $element_desc) . "' , $level , '" . str_replace("\'", "''", $element_img) . "' , $b_mining , $b_stone , $b_forge ,$b_enchant , $b_trading ,$b_thief , $element_oppose_str , $oppose_str_dmg , $element_oppose_weak , $oppose_weak_dmg , $oppose_same_dmg, '$element_colour' )";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't insert new element", "", __LINE__, __FILE__, $sql);
			}

			// Update cache
			adr_update_element_infos();

			adr_previous( Adr_element_successful_added , admin_adr_elements , '' );
			break;
	}
}
else
{

	adr_template_file('admin/config_adr_elements_list_body.tpl');

	$sql = "SELECT *
		FROM " . ADR_ELEMENTS_TABLE;
	$result = $db->sql_query($sql);
	if( !$result )
	{
		message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
	}
	$elements = $db->sql_fetchrowset($result);

	for($i = 0; $i < count($elements); $i++)
	{
		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		$level[0] = $lang['Adr_races_level_all'];
		$level[1] = $lang['Adr_races_level_admin'];
		$level[2] = $lang['Adr_races_level_mod'];
		$element_level = $level[$elements[$i]['element_level']];

		$pic = $elements[$i]['element_img'];

		$template->assign_block_vars("elements", array(
			"ROW_CLASS" => $row_class,
			"NAME" => adr_get_lang($elements[$i]['element_name']),
			"DESC" => adr_get_lang($elements[$i]['element_desc']),
			"IMG" => $pic ,
			"LEVEL" => $element_level,
			"U_ELEMENTS_EDIT" => append_sid("admin_adr_elements.$phpEx?mode=edit&amp;id=" . $elements[$i]['element_id']), 
			"U_ELEMENTS_DELETE" => append_sid("admin_adr_elements.$phpEx?mode=delete&amp;id=" . $elements[$i]['element_id']))
		);
	}


	$template->assign_vars(array(
		"L_ELEMENTS_TITLE" => $lang['Adr_elements'],
		"L_ELEMENTS_TEXT" => $lang['Adr_elements_explain'],
		"L_NAME" => $lang['Adr_races_name'],
		"L_IMG" => $lang['Adr_races_image'],
		"L_DESC" => $lang['Adr_races_desc'],
		"L_LEVEL" => $lang['Adr_races_level'],
		"L_ELEMENTS_ADD" => $lang['Adr_elements_add'],
		"L_ACTION" => $lang['Action'],
		"L_DELETE" => $lang['Delete'],
		"L_EDIT" => $lang['Edit'],
		"L_SUBMIT" => $lang['Submit'],
		"S_ELEMENTS_ACTION" => append_sid("admin_adr_elements.$phpEx"))
	);

	$template->pparse("body");
	include('./page_footer_admin.'.$phpEx);
}



?>
