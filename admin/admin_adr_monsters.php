<?php
/***************************************************************************
*                               admin_adr_monsters.php
*                              -------------------
*     begin                : 17/02/2004
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
define('IN_ADR_BATTLE', 1);
define('IN_ADR_CHARACTER', 1);

if( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$module['Adr_battle']['Adr_battle_monsters'] = $filename;

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
	adr_template_file('admin/config_adr_monsters_edit_body.tpl');

	$s_hidden_fields = '<input type="hidden" name="mode" value="savenew" />';

	$template->assign_block_vars( 'monsters_add', array());

	$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE ;
	$result = $db->sql_query($sql);
	if( !$result )
	{
		message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
	}
	$element_list = $db->sql_fetchrowset($result);

	// Element list
	$element_mon_list = '<select name="element_mon_list">';
	for($i = 0; $i < count($element_list); $i++)
	{
		$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
		$element_selected = ( $monster['monster_base_element'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
		$element_mon_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
	}
	$element_mon_list .= '</select>';

	$template->assign_vars(array(
		"BASE_ELEMENT" => $element_mon_list,
		"L_MONSTERS_TITLE" => $lang['Adr_monsters_add_edit'],
		"L_MONSTERS_EXPLAIN" => $lang['Adr_monsters_add_edit_explain'],
		"L_NAME" => $lang['Adr_monsters_name'],
		"L_IMG" => $lang['Adr_monsters_image'],
		"L_LEVEL" => $lang['Adr_monsters_level'],
		"L_BASE_HP" => $lang['Adr_admin_monsters_base_hp'],
		"L_BASE_DEF" => $lang['Adr_admin_monsters_base_def'],
		"L_BASE_ATT" => $lang['Adr_admin_monsters_att'],
		"L_BASE_ELEMENT" => $lang['Adr_admin_monsters_element'],
		"L_BASE_MA" => $lang['Adr_admin_monsters_ma'],
		"L_BASE_MD" => $lang['Adr_admin_monsters_md'],
		"L_BASE_MP" => $lang['Adr_admin_monsters_base_mp'],
		"L_BASE_MP_POWER" => $lang['Adr_admin_monsters_base_mp_power'],
		"L_BASE_SP" => $lang['Adr_admin_monsters_base_sp'],
		"L_BASE_SPELL" => $lang['Adr_admin_monsters_custom_spell'],
		"L_BASE_SPELL_EXPLAIN" => $lang['Adr_admin_monsters_custom_spell_explain'],
		"L_THIEF_SKILL" => $lang['Adr_admin_monsters_thief_skill'],
		"L_KEY_EXPLAIN" => $lang['Adr_lang_key'],
		"L_IMG_EXPLAIN" => $lang['Adr_monsters_image_explain'],
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

			$monster_id = ( !empty($_POST['id']) ) ? intval($_POST['id']) : intval($_GET['id']);

			$sql = "DELETE FROM " . ADR_BATTLE_MONSTERS_TABLE . "
				WHERE monster_id = " . $monster_id;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't delete monster", "", __LINE__, __FILE__, $sql);
			}

			adr_previous( Adr_monster_successful_deleted , admin_adr_monsters , '' );
			break;

		case 'edit':

			$monster_id = ( !empty($_POST['id']) ) ? intval($_POST['id']) : intval($_GET['id']);

			adr_template_file('admin/config_adr_monsters_edit_body.tpl');

			$template->assign_block_vars( 'monsters_edit', array());

			$sql = "SELECT * FROM " . ADR_BATTLE_MONSTERS_TABLE ."
				WHERE monster_id = $monster_id ";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain monster information', "", __LINE__, __FILE__, $sql);
			}
			$monster = $db->sql_fetchrow($result);

			$s_hidden_fields = '<input type="hidden" name="mode" value="save" /><input type="hidden" name="monster_id" value="' . $monster['monster_id'] . '" />';

			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE ;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$element_list = $db->sql_fetchrowset($result);

			// Element list
			$element_mon_list = '<select name="element_mon_list">';
			for($i = 0; $i < count($element_list); $i++)
			{
				$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
				$element_selected = ( $monster['monster_base_element'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
				$element_mon_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
			}
			$element_mon_list .= '</select>';

			$template->assign_vars(array(
				"NAME" => $monster['monster_name'],
				"NAME_EXPLAIN" => adr_get_lang($monster['monster_name']),
				"IMG" => $monster['monster_img'],
				"IMG_EX" => $monster['monster_img'],
				"LEVEL" => $monster['monster_level'],
				"BASE_HP" => $monster['monster_base_hp'],
				"BASE_DEF" => $monster['monster_base_def'],
				"BASE_ATT" => $monster['monster_base_att'],
				"BASE_ELEMENT" => $element_mon_list,
				"BASE_MA" => $monster['monster_base_magic_attack'],
				"BASE_MD" => $monster['monster_base_magic_resistance'],
				"BASE_MP" => $monster['monster_base_mp'],
				"BASE_MP_POWER" => $monster['monster_base_mp_power'],
				"BASE_SP" => $monster['monster_base_sp'],
				"BASE_SPELL" => $monster['monster_base_custom_spell'],
				"THIEF_SKILL" => $monster['monster_thief_skill'],
				"L_MONSTERS_TITLE" => $lang['Adr_monsters_add_edit'],
				"L_MONSTERS_EXPLAIN" => $lang['Adr_monsters_add_edit_explain'],
				"L_NAME" => $lang['Adr_monsters_name'],
				"L_IMG" => $lang['Adr_monsters_image'],
				"L_LEVEL" => $lang['Adr_monsters_level'],
				"L_BASE_HP" => $lang['Adr_admin_monsters_base_hp'],
				"L_BASE_DEF" => $lang['Adr_admin_monsters_base_def'],
				"L_BASE_ATT" => $lang['Adr_admin_monsters_att'],
				"L_BASE_ELEMENT" => $lang['Adr_admin_monsters_element'],
				"L_BASE_MA" => $lang['Adr_admin_monsters_ma'],
				"L_BASE_MD" => $lang['Adr_admin_monsters_md'],
				"L_BASE_SPELL" => $lang['Adr_admin_monsters_custom_spell'],
				"L_BASE_SPELL_EXPLAIN" => $lang['Adr_admin_monsters_custom_spell_explain'],
				"L_BASE_MP" => $lang['Adr_admin_monsters_base_mp'],
				"L_BASE_MP_POWER" => $lang['Adr_admin_monsters_base_mp_power'],
				"L_BASE_SP" => $lang['Adr_admin_monsters_base_sp'],
				"L_THIEF_SKILL" => $lang['Adr_admin_monsters_thief_skill'],
				"L_KEY_EXPLAIN" => $lang['Adr_lang_key'],
				"L_IMG_EXPLAIN" => $lang['Adr_monsters_image_explain'],
				"L_SUBMIT" => $lang['Submit'],
				"S_HIDDEN_FIELDS" => $s_hidden_fields) 
			);

			$template->pparse("body");
			break;

		case "save":

			$monster_id = ( !empty($_POST['monster_id']) ) ? intval($_POST['monster_id']) : intval($_GET['monster_id']);
			$monster_name = ( isset($_POST['monster_name']) ) ? trim($_POST['monster_name']) : trim($_GET['monster_name']);
			$monster_img = ( isset($_POST['monster_img']) ) ? trim($_POST['monster_img']) : trim($_GET['monster_img']);
			$level = intval($_POST['monster_level']);
			$hp = intval($_POST['hp']);
			$def = intval($_POST['def']);
			$att = intval($_POST['att']);
			$element = intval($_POST['element_mon_list']);	
			$ma = intval($_POST['ma']);
			$md = intval($_POST['md']);
			$mp = intval($_POST['mp']);
			$mp_power = intval($_POST['mp_power']);
			$sp = intval($_POST['sp']);
			$custom_spell = ( isset($_POST['custom_spell']) ) ? trim($_POST['custom_spell']) : trim($_GET['custom_spell']);
			$thief_skill = intval($_POST['thief_skill']);

			if ($monster_name == '' )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}

			$sql = "UPDATE " . ADR_BATTLE_MONSTERS_TABLE . "
				SET monster_name = '" . str_replace("\'", "''", $monster_name) . "', 	
					monster_img = '" . str_replace("\'", "''", $monster_img) . "',
					monster_level = $level ,
					monster_base_hp = $hp , 
					monster_base_def = $def ,
					monster_base_att = $att ,
					monster_base_element = $element , 
					monster_base_magic_attack = $ma ,
					monster_base_magic_resistance = $md , 
					monster_base_mp = $mp ,
					monster_base_mp_power = $mp_power ,
					monster_base_sp = $sp ,
					monster_thief_skill = $thief_skill ,
					monster_base_custom_spell = '" . str_replace("\'", "''", $custom_spell) . "'  
				WHERE monster_id = " . $monster_id;
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, "Couldn't update monster info", "", __LINE__, __FILE__, $sql);
			}

			adr_previous( Adr_monster_successful_edited , admin_adr_monsters , '' );
			break;

		case "savenew":

			$sql = "SELECT monster_id FROM " . ADR_BATTLE_MONSTERS_TABLE ."
				ORDER BY monster_id 
				DESC LIMIT 1";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain monsters information', "", __LINE__, __FILE__, $sql);
			}
			$fields_data = $db->sql_fetchrow($result);

			$monster_name = ( isset($_POST['monster_name']) ) ? trim($_POST['monster_name']) : trim($_GET['monster_name']);
			$monster_img = ( isset($_POST['monster_img']) ) ? trim($_POST['monster_img']) : trim($_GET['monster_img']);
			$level = intval($_POST['monster_level']);
			$hp = intval($_POST['hp']);
			$def = intval($_POST['def']);
			$att = intval($_POST['att']);
			$element = intval($_POST['element_mon_list']);
			$ma = intval($_POST['ma']);
			$md = intval($_POST['md']);
			$mp = intval($_POST['mp']);
			$mp_power = intval($_POST['mp_power']);
			$sp = intval($_POST['sp']);
			$custom_spell = ( isset($_POST['custom_spell']) ) ? trim($_POST['custom_spell']) : trim($_GET['custom_spell']);
			$thief_skill = intval($_POST['thief_skill']);

			$monster_id = $fields_data['monster_id'] + 1 ;

			if ($monster_name == '' )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}

			$sql = "INSERT INTO " . ADR_BATTLE_MONSTERS_TABLE . " 
				( monster_id , monster_name , monster_img , monster_level , monster_base_hp , monster_base_def , monster_base_att , monster_base_element , monster_base_mp , monster_base_mp_power , monster_base_magic_attack , monster_base_magic_resistance , monster_base_sp , monster_base_custom_spell , monster_thief_skill )
				VALUES ( $monster_id , '" . str_replace("\'", "''", $monster_name) . "', '" . str_replace("\'", "''", $monster_img) . "' , $level , $hp , $def , $att , $element , $mp , $mp_power , $ma , $md , $sp , '" . str_replace("\'", "''", $custom_spell) . "' , $thief_skill )";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't insert new monster", "", __LINE__, __FILE__, $sql);
			}

			adr_previous( Adr_monster_successful_added , admin_adr_monsters , '' );
			break;
	}
}
else
{

	adr_template_file('admin/config_adr_monsters_list_body.tpl');

	$start = ( isset($_GET['start']) ) ? intval($_GET['start']) : 0;

	if ( isset($_GET['mode2']) || isset($_POST['mode2']) )
	{
		$mode2 = ( isset($_POST['mode2']) ) ? htmlspecialchars($_POST['mode2']) : htmlspecialchars($_GET['mode2']);
	}
	else
	{
		$mode2 = 'itemname';
	}

	if(isset($_POST['order']))
	{
		$sort_order = ($_POST['order'] == 'ASC') ? 'ASC' : 'DESC';
	}
	else if(isset($_GET['order']))
	{
		$sort_order = ($_GET['order'] == 'ASC') ? 'ASC' : 'DESC';
	}
	else
	{
		$sort_order = 'ASC';
	}

	if ( isset($_GET['cat']) || isset($_POST['cat']) )
	{
		$cat = ( isset($_POST['cat']) ) ? htmlspecialchars($_POST['cat']) : htmlspecialchars( $_GET['cat']);
	}
	else
	{
		$cat = 0;
	}
	$cat_sql = ( $cat ) ? 'AND m.monster_name = '.$cat : '';

	$mode_types_text = array( $lang['Adr_monsters_name'] , $lang['Adr_monsters_level'] , $lang['Adr_admin_monsters_element'] );
	$mode_types = array( 'name', 'level' , 'element' );

	$select_sort_mode = '<select name="mode2">';
	for($i = 0; $i < count($mode_types_text); $i++)
	{
		$selected = ( $mode2 == $mode_types[$i] ) ? ' selected="selected"' : '';
		$select_sort_mode .= '<option value="' . $mode_types[$i] . '"' . $selected . '>' . $mode_types_text[$i] . '</option>';
	}
	$select_sort_mode .= '</select>';

	$select_sort_order = '<select name="order">';
	if($sort_order == 'ASC')
	{
		$select_sort_order .= '<option value="ASC" selected="selected">' . $lang['Sort_Ascending'] . '</option><option value="DESC">' . $lang['Sort_Descending'] . '</option>';
	}
	else
	{
		$select_sort_order .= '<option value="ASC">' . $lang['Sort_Ascending'] . '</option><option value="DESC" selected="selected">' . $lang['Sort_Descending'] . '</option>';
	}
	$select_sort_order .= '</select>';

	switch( $mode2 )
	{
		case 'name':
			$order_by = "m.monster_name $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;
		case 'level':
			$order_by = "m.monster_level $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;
		case 'element':
			$order_by = "m.monster_base_element $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;

		default:
			$order_by = "m.monster_level $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;
	}

	$sql = "SELECT m.* , e.element_name FROM " . ADR_BATTLE_MONSTERS_TABLE . " m, " . ADR_ELEMENTS_TABLE . " e
   		WHERE e.element_id = m.monster_base_element
		$cat_sql
		ORDER BY $order_by";
   	$result = $db->sql_query($sql);
   	if( !$result )
   	{
      		message_die(GENERAL_ERROR, 'Could not obtain monsters information', "", __LINE__, __FILE__, $sql);
   	}
   	$monsters = $db->sql_fetchrowset($result);

	for($i = 0; $i < count($monsters); $i++)
	{
		$row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		$template->assign_block_vars("monsters", array(
			"ROW_CLASS" => $row_class,
			"NAME" => adr_get_lang($monsters[$i]['monster_name']),
			"IMG" => $monsters[$i]['monster_img'],
			"LEVEL" => $monsters[$i]['monster_level'],
			"BASE_HP" => $monsters[$i]['monster_base_hp'],
			"BASE_DEF" => $monsters[$i]['monster_base_def'],
			"BASE_ATT" => $monsters[$i]['monster_base_att'],
			"BASE_MA" => $monsters[$i]['monster_base_magic_attack'],
			"BASE_MD" => $monsters[$i]['monster_base_magic_resistance'],
			"BASE_MP" => $monsters[$i]['monster_base_mp'],
			"BASE_MP_POWER" => $monsters[$i]['monster_base_mp_power'],
			"BASE_SP" => $monsters[$i]['monster_base_sp'],
			"BASE_SPELL" => $monsters[$i]['monster_base_custom_spell'],
			"THIEF_SKILL" => $monsters[$i]['monster_thief_skill'],
			"BASE_ELEMENT" => adr_get_lang($monsters[$i]['element_name']),
			"U_MONSTERS_EDIT" => append_sid("admin_adr_monsters.$phpEx?mode=edit&amp;id=" . $monsters[$i]['monster_id']), 
			"U_MONSTERS_DELETE" => append_sid("admin_adr_monsters.$phpEx?mode=delete&amp;id=" . $monsters[$i]['monster_id']))
		);
	}

	$sql = "SELECT count(*) AS total FROM " . ADR_BATTLE_MONSTERS_TABLE;
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Error getting total users', '', __LINE__, __FILE__, $sql);
	}
	if ( $total = $db->sql_fetchrow($result) )
	{
		$total_items = $total['total'];
		$pagination = generate_pagination("admin_adr_monsters.$phpEx?mode2=$mode2&amp;order=$sort_order&amp;cat=$cat", $total_items, $board_config['topics_per_page'], $start). '&nbsp;';	
	}


	$template->assign_vars(array(
		"L_MONSTERS_TITLE" => $lang['Adr_admin_monsters'],
		"L_MONSTERS_TEXT" => $lang['Adr_admin_monsters_explain'],
		"L_NAME" => $lang['Adr_monsters_name'],
		"L_IMG" => $lang['Adr_monsters_image'],
		"L_LEVEL" => $lang['Adr_monsters_level'],
		"L_BASE_HP" => $lang['Adr_admin_monsters_base_hp'],
		"L_BASE_DEF" => $lang['Adr_admin_monsters_base_def'],
		"L_BASE_ATT" => $lang['Adr_admin_monsters_att'],
		"L_BASE_ELEMENT" => $lang['Adr_admin_monsters_element'],
		"L_BASE_MA" => $lang['Adr_admin_monsters_ma'],
		"L_BASE_MD" => $lang['Adr_admin_monsters_md'],
		"L_BASE_MP" => $lang['Adr_admin_monsters_base_mp'],
		"L_BASE_MP_POWER" => $lang['Adr_admin_monsters_base_mp_power'],
		"L_BASE_SP" => $lang['Adr_admin_monsters_base_sp'],
		"L_BASE_SPELL" => $lang['Adr_admin_monsters_custom_spell'],
		"L_THIEF_SKILL" => $lang['Adr_admin_monsters_thief_skill'],
		"L_BASE_ELEMENT" => $lang['Adr_admin_monsters_element'],
		"L_MONSTERS_ADD" => $lang['Adr_monsters_add'],
		"L_ACTION" => $lang['Action'],
		"L_DELETE" => $lang['Delete'],
		"L_EDIT" => $lang['Edit'],
		'L_SELECT_SORT_METHOD' => $lang['Select_sort_method'],
		'L_ORDER' => $lang['Order'],
		'L_SORT' => $lang['Sort'],
		'L_SORT_SUBMIT' => $lang['Sort'],
		'S_MODE_SELECT' => $select_sort_mode,
		'S_ORDER_SELECT' => $select_sort_order,
		'SELECT_CAT' => $select_category,
		'L_SELECT_CAT' => $lang['Adr_items_select'],
		'PAGINATION' => $pagination,
		'PAGE_NUMBER' => sprintf($lang['Page_of'], ( floor( $start / $board_config['topics_per_page'] ) + 1 ), ceil( $total_items / $board_config['topics_per_page'] )), 
		'L_GOTO_PAGE' => $lang['Goto_page'],
		"L_SUBMIT" => $lang['Submit'],
		"S_MONSTERS_ACTION" => append_sid("admin_adr_monsters.$phpEx"))
	);

	$template->pparse("body");
	include('./page_footer_admin.'.$phpEx);
}



?>