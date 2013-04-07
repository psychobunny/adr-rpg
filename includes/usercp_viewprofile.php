<?php
/***************************************************************************
 *                           usercp_viewprofile.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: usercp_viewprofile.php 5204 2005-09-14 18:14:30Z acydburn $
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
	die("Hacking attempt");
	exit;
}

if ( empty($HTTP_GET_VARS[POST_USERS_URL]) || $HTTP_GET_VARS[POST_USERS_URL] == ANONYMOUS )
{
	message_die(GENERAL_MESSAGE, $lang['No_user_id_specified']);
}
$profiledata = get_userdata($HTTP_GET_VARS[POST_USERS_URL]);

if (!$profiledata)
{
	message_die(GENERAL_MESSAGE, $lang['No_user_id_specified']);
}

$sql = "SELECT *
	FROM " . RANKS_TABLE . "
	ORDER BY rank_special, rank_min";
if ( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not obtain ranks information', '', __LINE__, __FILE__, $sql);
}

$ranksrow = array();
while ( $row = $db->sql_fetchrow($result) )
{
	$ranksrow[] = $row;
}
$db->sql_freeresult($result);

//
// Output page header and profile_view template
//
$template->set_filenames(array(
	'body' => 'profile_view_body.tpl')
);
make_jumpbox('viewforum.'.$phpEx);

//
// Calculate the number of days this user has been a member ($memberdays)
// Then calculate their posts per day
//
$regdate = $profiledata['user_regdate'];
$memberdays = max(1, round( ( time() - $regdate ) / 86400 ));
$posts_per_day = $profiledata['user_posts'] / $memberdays;

// Get the users percentage of total posts
if ( $profiledata['user_posts'] != 0  )
{
	$total_posts = get_db_stat('postcount');
	$percentage = ( $total_posts ) ? min(100, ($profiledata['user_posts'] / $total_posts) * 100) : 0;
}
else
{
	$percentage = 0;
}

$avatar_img = '';
if ( $profiledata['user_avatar_type'] && $profiledata['user_allowavatar'] )
{
	switch( $profiledata['user_avatar_type'] )
	{
		case USER_AVATAR_UPLOAD:
			$avatar_img = ( $board_config['allow_avatar_upload'] ) ? '<img src="' . $board_config['avatar_path'] . '/' . $profiledata['user_avatar'] . '" alt="" border="0" />' : '';
			break;
		case USER_AVATAR_REMOTE:
			$avatar_img = ( $board_config['allow_avatar_remote'] ) ? '<img src="' . $profiledata['user_avatar'] . '" alt="" border="0" />' : '';
			break;
		case USER_AVATAR_GALLERY:
			$avatar_img = ( $board_config['allow_avatar_local'] ) ? '<img src="' . $board_config['avatar_gallery_path'] . '/' . $profiledata['user_avatar'] . '" alt="" border="0" />' : '';
			break;
	}
}

$poster_rank = '';
$rank_image = '';
if ( $profiledata['user_rank'] )
{
	for($i = 0; $i < count($ranksrow); $i++)
	{
		if ( $profiledata['user_rank'] == $ranksrow[$i]['rank_id'] && $ranksrow[$i]['rank_special'] )
		{
			$poster_rank = $ranksrow[$i]['rank_title'];
			$rank_image = ( $ranksrow[$i]['rank_image'] ) ? '<img src="' . $ranksrow[$i]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
		}
	}
}
else
{
	for($i = 0; $i < count($ranksrow); $i++)
	{
		if ( $profiledata['user_posts'] >= $ranksrow[$i]['rank_min'] && !$ranksrow[$i]['rank_special'] )
		{
			$poster_rank = $ranksrow[$i]['rank_title'];
			$rank_image = ( $ranksrow[$i]['rank_image'] ) ? '<img src="' . $ranksrow[$i]['rank_image'] . '" alt="' . $poster_rank . '" title="' . $poster_rank . '" border="0" /><br />' : '';
		}
	}
}

$temp_url = append_sid("privmsg.$phpEx?mode=post&amp;" . POST_USERS_URL . "=" . $profiledata['user_id']);
$pm_img = '<a href="' . $temp_url . '"><img src="' . $images['icon_pm'] . '" alt="' . $lang['Send_private_message'] . '" title="' . $lang['Send_private_message'] . '" border="0" /></a>';
$pm = '<a href="' . $temp_url . '">' . $lang['Send_private_message'] . '</a>';

if ( !empty($profiledata['user_viewemail']) || $userdata['user_level'] == ADMIN )
{
	$email_uri = ( $board_config['board_email_form'] ) ? append_sid("profile.$phpEx?mode=email&amp;" . POST_USERS_URL .'=' . $profiledata['user_id']) : 'mailto:' . $profiledata['user_email'];

	$email_img = '<a href="' . $email_uri . '"><img src="' . $images['icon_email'] . '" alt="' . $lang['Send_email'] . '" title="' . $lang['Send_email'] . '" border="0" /></a>';
	$email = '<a href="' . $email_uri . '">' . $lang['Send_email'] . '</a>';
}
else
{
	$email_img = '&nbsp;';
	$email = '&nbsp;';
}

$www_img = ( $profiledata['user_website'] ) ? '<a href="' . $profiledata['user_website'] . '" target="_userwww"><img src="' . $images['icon_www'] . '" alt="' . $lang['Visit_website'] . '" title="' . $lang['Visit_website'] . '" border="0" /></a>' : '&nbsp;';
$www = ( $profiledata['user_website'] ) ? '<a href="' . $profiledata['user_website'] . '" target="_userwww">' . $profiledata['user_website'] . '</a>' : '&nbsp;';

if ( !empty($profiledata['user_icq']) )
{
	$icq_status_img = '<a href="http://wwp.icq.com/' . $profiledata['user_icq'] . '#pager"><img src="http://web.icq.com/whitepages/online?icq=' . $profiledata['user_icq'] . '&img=5" width="18" height="18" border="0" /></a>';
	$icq_img = '<a href="http://wwp.icq.com/scripts/search.dll?to=' . $profiledata['user_icq'] . '"><img src="' . $images['icon_icq'] . '" alt="' . $lang['ICQ'] . '" title="' . $lang['ICQ'] . '" border="0" /></a>';
	$icq =  '<a href="http://wwp.icq.com/scripts/search.dll?to=' . $profiledata['user_icq'] . '">' . $lang['ICQ'] . '</a>';
}
else
{
	$icq_status_img = '&nbsp;';
	$icq_img = '&nbsp;';
	$icq = '&nbsp;';
}

$aim_img = ( $profiledata['user_aim'] ) ? '<a href="aim:goim?screenname=' . $profiledata['user_aim'] . '&amp;message=Hello+Are+you+there?"><img src="' . $images['icon_aim'] . '" alt="' . $lang['AIM'] . '" title="' . $lang['AIM'] . '" border="0" /></a>' : '&nbsp;';
$aim = ( $profiledata['user_aim'] ) ? '<a href="aim:goim?screenname=' . $profiledata['user_aim'] . '&amp;message=Hello+Are+you+there?">' . $lang['AIM'] . '</a>' : '&nbsp;';

$msn_img = ( $profiledata['user_msnm'] ) ? $profiledata['user_msnm'] : '&nbsp;';
$msn = $msn_img;

$yim_img = ( $profiledata['user_yim'] ) ? '<a href="http://edit.yahoo.com/config/send_webmesg?.target=' . $profiledata['user_yim'] . '&amp;.src=pg"><img src="' . $images['icon_yim'] . '" alt="' . $lang['YIM'] . '" title="' . $lang['YIM'] . '" border="0" /></a>' : '';
$yim = ( $profiledata['user_yim'] ) ? '<a href="http://edit.yahoo.com/config/send_webmesg?.target=' . $profiledata['user_yim'] . '&amp;.src=pg">' . $lang['YIM'] . '</a>' : '';

$temp_url = append_sid("search.$phpEx?search_author=" . urlencode($profiledata['username']) . "&amp;showresults=posts");
$search_img = '<a href="' . $temp_url . '"><img src="' . $images['icon_search'] . '" alt="' . sprintf($lang['Search_user_posts'], $profiledata['username']) . '" title="' . sprintf($lang['Search_user_posts'], $profiledata['username']) . '" border="0" /></a>';
$search = '<a href="' . $temp_url . '">' . sprintf($lang['Search_user_posts'], $profiledata['username']) . '</a>';

$user_points = ($userdata['user_level'] == ADMIN || user_is_authed($userdata['user_id'])) ? '<a href="' . append_sid("pointscp.$phpEx?" . POST_USERS_URL . "=" . $profiledata['user_id']) . '" class="gen" title="' . sprintf($lang['Points_link_title'], $board_config['points_name']) . '">' . $profiledata['user_points'] . '</a>' : $profiledata['user_points'];

if ($board_config['points_donate'] && $userdata['user_id'] != ANONYMOUS && $userdata['user_id'] != $profiledata['user_id'])
{
	$donate_points = '<br />' . sprintf($lang['Points_donate'], '<a href="' . append_sid("pointscp.$phpEx?mode=donate&amp;" . POST_USERS_URL . "=" . $profiledata['user_id']) . '" class="genmed" title="' . sprintf($lang['Points_link_title_2'], $board_config['points_name']) . '">', '</a>');
}
else
{
	$donate_points = '';
}

##=== ADR START: show viewprofile info ===###
if($board_config['Adr_profile_display']){
	define ('IN_ADR_CHARACTER', true);
	define ('IN_ADR_SHOPS', true);
	define ('IN_ADR_SKILLS', true);
	define ('IN_ADR_BATTLE', true);
	include_once($phpbb_root_path . 'adr/includes/adr_global.'.$phpEx);

	// Get the general config
	$adr_general = adr_get_general_config();
	$searchid = $profiledata['user_id'];

   // Who is looking at this page?
   if((!(isset($HTTP_POST_VARS[POST_USERS_URL]) || isset($HTTP_GET_VARS[POST_USERS_URL]))) || ( empty($HTTP_POST_VARS[POST_USERS_URL]) && empty($HTTP_GET_VARS[POST_USERS_URL]))){
      $view_userdata = $userdata;}
   else{
      $view_userdata = get_userdata(intval($HTTP_GET_VARS[POST_USERS_URL]));}

	$sql = "SELECT c.*, r.race_name, r.race_img, r.race_weight, r.race_weight_per_level, e.element_name, e.element_img, a.alignment_name, a.alignment_img, cl.class_name, cl.class_img, cl.class_update_xp_req
		FROM  " . ADR_CHARACTERS_TABLE . " c, " . ADR_RACES_TABLE . " r, " . ADR_ELEMENTS_TABLE . " e, " . ADR_ALIGNMENTS_TABLE . " a, " . ADR_CLASSES_TABLE . " cl
		WHERE c.character_id = '$searchid'
		AND cl.class_id = c.character_class
		AND r.race_id = c.character_race
		AND e.element_id = c.character_element
		AND a.alignment_id = c.character_alignment";
	if(!($result = $db->sql_query($sql))){
		message_die(CRITICAL_ERROR, 'Error Getting Adr Users!');}
	$row = $db->sql_fetchrow($result);

	if(!(is_numeric($row['character_class']))){
		$template->assign_block_vars('adr_profile_none', array());
	}
	else{
		$template->assign_block_vars('adr_profile', array());

		$class = adr_get_lang($row['class_name']);
		$race = adr_get_lang($row['race_name']);
		$element = adr_get_lang($row['element_name']);
		$alignment = adr_get_lang($row['alignment_name']);

		// Work out weight stats
		$max_weight = adr_weight_stats($row['character_level'], $row['race_weight'], $row['race_weight_per_level'], $row['character_might']);

		// Count up characters current weight
		$sql = "SELECT SUM(item_weight) AS total FROM  " . ADR_SHOPS_ITEMS_TABLE . "
			WHERE item_owner_id = '$searchid'
			AND item_in_warehouse = '0'
			AND item_duration > '0'
			AND item_in_shop = '0'";
		if(!($result = $db->sql_query($sql))){
			message_die(CRITICAL_ERROR, 'Error Getting Adr Users!');}
		$weight = $db->sql_fetchrow($result);
		$current_weight = (!empty($weight[total])) ? $weight[total] : 0;

		//changed from max_hp to max_xp
   		$max_xp = $row['class_update_xp_req'];
   		for($p = 1; $p < $row['character_level']; $p++){
    	  	$max_xp = floor($max_xp *(($adr_general['next_level_penalty'] + 100) /100));}

		// Create bar widths
		list($hp_percent_width, $hp_percent_empty) = adr_make_bars($row['character_hp'], $row['character_hp_max'], '200');
		list($mp_percent_width, $mp_percent_empty) = adr_make_bars($row['character_mp'], $row['character_mp_max'], '200');
		list($exp_percent_width, $exp_percent_empty) = adr_make_bars($row['character_xp'], $max_xp, '200');
		list($weight_percent_width, $weight_percent_empty) = adr_make_bars($current_weight, $max_weight, '200');

		// Get skill infos
		$skills = adr_get_skill_data('');

		$sql = "SELECT item_in_shop, item_in_warehouse FROM " . ADR_SHOPS_ITEMS_TABLE . "
			WHERE item_owner_id = '$searchid'
			AND item_duration > '0'
			AND item_monster_thief = '0'";
		if(!($result = $db->sql_query($sql))){
			message_die(CRITICAL_ERROR, 'Error Getting Adr Users!');}
		$items = $db->sql_fetchrowset($result);

		$items_owned = count($items);
		$items_in_inventory = 0;
		$items_in_shop = 0;
        $items_in_warehouse = 0;

		if($items_owned){
			for($p = 0; $p < $items_owned; $p++){
				if(($items[$p]['item_in_shop'] == '0') && ($items[$p]['item_in_warehouse'] == '0')) $items_in_inventory++;
				elseif($items[$p]['item_in_warehouse'] == '1') $items_in_warehouse++;
				else $items_in_shop++;
			}
		}

		$inventory_link = append_sid("adr_character_inventory.$phpEx?" . POST_USERS_URL . "=" . $searchid . "");

		$sql = " SELECT shop_id FROM " . ADR_SHOPS_TABLE . "
			WHERE shop_owner_id = '$searchid'";
		if(!($result = $db->sql_query($sql))){
			message_die(CRITICAL_ERROR, 'Error Getting Adr Users!');}
		$shop = $db->sql_fetchrow($result);
		$shop_link = append_sid("adr_shops.$phpEx?mode=see_shop&amp;shop_id=" . $shop['shop_id'] . "");
		if(is_numeric($shop['shop_id'])){
			$template->assign_block_vars('adr_profile.shop', array());}
	}

	$template->assign_vars(array(
		'ITEMS_OWNED' => $items_owned,
		'ITEMS_INVENTORY' => $items_in_inventory,
		'ITEMS_SHOP' => $items_in_shop,
		'ITEMS_WAREHOUSE' => $items_in_warehouse,
		'SHOP_LINK' => $shop_link,
		'INVENTORY_LINK' => $inventory_link,
		'MINING' => $row['character_skill_mining'],
		'MINING_IMG' => $skills[1]['skill_img'],
		'STONE' => $row['character_skill_stone'],
		'STONE_IMG' => $skills[2]['skill_img'],
		'FORGE' => $row['character_skill_forge'],
		'FORGE_IMG' => $skills[3]['skill_img'],
		'ENCHANTMENT' => $row['character_skill_enchantment'],
		'ENCHANTMENT_IMG' => $skills[4]['skill_img'],
		'TRADING' => $row['character_skill_trading'],
		'TRADING_IMG' => $skills[5]['skill_img'],
		'THIEF' => $row['character_skill_thief'],
		'THIEF_IMG' => $skills[6]['skill_img'],
		'CAULDRON' => $row['character_skill_cauldron'],
		'CAULDRON_IMG' => $skills[10]['skill_img'],
		'CRAFT' => $row['character_skill_craft'],
		'CRAFT_IMG' => $skills[11]['skill_img'],
		'LEVEL' => $row['character_level'],
		'POWER' => $row['character_might'],
		'AGILITY' => $row['character_dexterity'],
		'CONSTIT' => $row['character_constitution'],
		'INT' => $row['character_intelligence'],
		'WIS' => $row['character_wisdom'],
		'CHA' => $row['character_charisma'],
		'POINTS' => number_format($view_userdata['user_points']),
		'SP' => number_format($row['character_sp']),
		'FP' => number_format($row['character_fp']),
		'HP' => number_format($row['character_hp']),
		'MP' => number_format($row['character_mp']),
		'EXP' => number_format($row['character_xp']),
		'HP_MAX' => number_format($row['character_hp_max']),
		'MP_MAX' => number_format($row['character_mp_max']),
 		'EXP_MAX' => number_format($max_xp),
 		'WEIGHT' => number_format($current_weight),
 		'WEIGHT_MAX' => number_format($max_weight),
		'HP_PERCENT_WIDTH' => $hp_percent_width,
		'MP_PERCENT_WIDTH' => $mp_percent_width,
		'EXP_PERCENT_WIDTH' => $exp_percent_width,
		'WEIGHT_PERCENT_WIDTH' => $weight_percent_width,
		'WEIGHT_PERCENT_EMPTY' => $weight_percent_empty,
		'HP_PERCENT_EMPTY' => $hp_percent_empty,
		'MP_PERCENT_EMPTY' => $mp_percent_empty,
		'EXP_PERCENT_EMPTY' => $exp_percent_empty,
		'BATTLE_VICTORIES' => ($row['character_victories'] + $row['character_victories_pvp']),
		'BATTLE_DEFEATS' => ($row['character_defeats'] + $row['character_defeats_pvp']),
		'BATTLE_FLEES' => ($row['character_flees'] + $row['character_flees_pvp']),
		'BATTLE_PVP_VICTORIES' => $row['character_pvp_victories'],
		'BATTLE_PVP_DEFEATS' => $row['character_pvp_defeats'],
		'BATTLE_PVP_FLEES' => $row['character_pvp_flees'],
		'AC' => $row['character_ac'],
		'NAME' => $row['character_name'],
		'BIO' => str_replace("\n", "\n<br />\n", $row['character_desc']),
		'AVATAR_IMG' => $avatar_img,
		'CLASS' => $class,
		'RACE' => $race,
		'ELEMENT' => $element,
		'ALIGNMENT' => $alignment,
		'CLASS_IMG' => $row['class_img'],
		'RACE_IMG' => $row['race_img'],
		'ELEMENT_IMG' => $row['element_img'],
		'ALIGNMENT_IMG' => $row['alignment_img'],
		'HP_PERCENT_WIDTH' => $hp_percent_width,
		'MP_PERCENT_WIDTH' => $mp_percent_width,
		'EXP_PERCENT_WIDTH' => $exp_percent_width,
		'L_CHAR_INFOS' => $lang['Adr_character_chars_infos'],
		'L_PERSONAL_STATS'	=> $lang['Adr_job_personal_stats'],
		'L_VITAL_STATS' => $lang['Adr_vital_stats'],
		'L_BATTLE_STATS_TITLE' => $lang['Adr_character_battle_stats_title'],
		'L_BATTLE_STATISTICS' => $lang['Adr_character_battle_statistics'],
		'L_BATTLE_VICTORIES' => $lang['Adr_character_victories'],
		'L_BATTLE_DEFEATS' => $lang['Adr_character_defeats'],
		'L_BIO' => $lang['Adr_character_new_bio'],
		'L_POINTS_INFOS_TITLE'=> $lang['Adr_character_chars_points'],
		'L_CLASS' => $lang['Adr_character_class'],
		'L_RACE' => $lang['Adr_character_race'],
		'L_ELEMENT' => $lang['Adr_character_element'],
		'L_ALIGNMENT' => $lang['Adr_character_alignment'],
		'L_HEALTH'=> $lang['Adr_character_health'],
		'L_MAGIC' => $lang['Adr_character_magic'],
		'L_EXPERIENCE' => $lang['Adr_character_experience'],
		'L_WEIGHT' => $lang['Adr_character_weight'],
		'L_AC' => $lang['Adr_character_ac'],
		'L_POWER' => $lang['Adr_character_power'],
		'L_AGILITY' => $lang['Adr_character_agility'],
		'L_CONSTIT' => $lang['Adr_character_endurance'],
		'L_INT' => $lang['Adr_character_intelligence'],
		'L_WIS' => $lang['Adr_character_willpower'],
		'L_CHA' => $lang['Adr_character_charm'],
		'L_POINTS' => $board_config['points_name'],
		'L_BATTLE_STATISTICS' => $lang['Adr_character_battle_statistics'],
		'L_BATTLE_VICTORIES' => $lang['Adr_character_victories'],
		'L_BATTLE_DEFEATS' => $lang['Adr_character_defeats'],
		'L_BATTLE_FLEES' => $lang['Adr_character_flees'],
		'L_BATTLE_SEE' => $lang['Adr_character_battle_history'],
		'L_NAME' => $lang['Adr_races_name'],
		'L_DESC' => $lang['Adr_races_desc'],
		'L_IMG' => $lang['Adr_races_image'],
		'L_LEVEL' => $lang['Adr_character_level'],
		'L_PROGRESS' => $lang['Adr_character_progress'],
		'L_SKILLS' => $lang['Adr_character_skills'],
		'L_CHARACTER_OF' => sprintf($lang['Adr_character_of'], $profiledata['username']),
		'L_MINING' => $lang['Adr_mining'],
		'L_MINING_DESC' => adr_get_lang($skills[1]['skill_desc']),
		'L_STONE' => $lang['Adr_stone'],
		'L_STONE_DESC' => adr_get_lang($skills[2]['skill_desc']),
		'L_FORGE' => $lang['Adr_forge'],
		'L_FORGE_DESC' => adr_get_lang($skills[3]['skill_desc']),
		'L_ENCHANTMENT' => $lang['Adr_enchantment'],
		'L_ENCHANTMENT_DESC' => adr_get_lang($skills[4]['skill_desc']),
		'L_TRADING' => $lang['Adr_trading'],
		'L_TRADING_DESC' => adr_get_lang($skills[5]['skill_desc']),
		'L_THIEF' => $lang['Adr_thief'],
		'L_THIEF_DESC' => adr_get_lang($skills[6]['skill_desc']),
		'L_NO_CHARACTER' => $lang['Adr_character_lack'],
		'L_ITEMS' => $lang['Adr_items_prefs'],
		'L_COUNT_ITEMS' => $lang['Adr_count_items'],
		'L_COUNT_ITEMS_INVENTORY' => $lang['Adr_count_items_inventory'],
		'L_COUNT_ITEMS_SHOPS' => $lang['Adr_count_items_shop'],
		'L_COUNT_ITEMS_WAREHOUSE' => $lang['Adr_count_items_warehouse'],
		'L_SEE_INVENTORY' => $lang['Adr_see_inventory'],
		'L_SEE_SHOP' => $lang['Adr_see_shop'],
		'L_NO_SHOP' => $lang['Adr_no_shop'],
		'U_NAME' => append_sid("adr_character.$phpEx?" . POST_USERS_URL . "=" . $profiledata['user_id']),
	));
}
##=== ADR END ===##

//
// Generate page
//
$page_title = $lang['Viewing_profile'];
include($phpbb_root_path . 'includes/page_header.'.$phpEx);

if (function_exists('get_html_translation_table'))
{
	$u_search_author = urlencode(strtr($profiledata['username'], array_flip(get_html_translation_table(HTML_ENTITIES))));
}
else
{
	$u_search_author = urlencode(str_replace(array('&amp;', '&#039;', '&quot;', '&lt;', '&gt;'), array('&', "'", '"', '<', '>'), $profiledata['username']));
}

$template->assign_vars(array(
	'USERNAME' => $profiledata['username'],
	'JOINED' => create_date($lang['DATE_FORMAT'], $profiledata['user_regdate'], $board_config['board_timezone']),
	'POSTER_RANK' => $poster_rank,
	'RANK_IMAGE' => $rank_image,
	'POSTS_PER_DAY' => $posts_per_day,
	'POSTS' => $profiledata['user_posts'],
	'PERCENTAGE' => $percentage . '%', 
	'POST_DAY_STATS' => sprintf($lang['User_post_day_stats'], $posts_per_day), 
	'POST_PERCENT_STATS' => sprintf($lang['User_post_pct_stats'], $percentage), 

	'SEARCH_IMG' => $search_img,
	'SEARCH' => $search,
	'PM_IMG' => $pm_img,
	'PM' => $pm,
	'EMAIL_IMG' => $email_img,
	'EMAIL' => $email,
	'WWW_IMG' => $www_img,
	'WWW' => $www,
	'ICQ_STATUS_IMG' => $icq_status_img,
	'ICQ_IMG' => $icq_img, 
	'ICQ' => $icq, 
	'AIM_IMG' => $aim_img,
	'AIM' => $aim,
	'MSN_IMG' => $msn_img,
	'MSN' => $msn,
	'YIM_IMG' => $yim_img,
	'YIM' => $yim,

	'POINTS' => $user_points,
	'DONATE_POINTS' => $donate_points,

	'LOCATION' => ( $profiledata['user_from'] ) ? $profiledata['user_from'] : '&nbsp;',
	'OCCUPATION' => ( $profiledata['user_occ'] ) ? $profiledata['user_occ'] : '&nbsp;',
	'INTERESTS' => ( $profiledata['user_interests'] ) ? $profiledata['user_interests'] : '&nbsp;',
	'AVATAR_IMG' => $avatar_img,

	'L_VIEWING_PROFILE' => sprintf($lang['Viewing_user_profile'], $profiledata['username']), 
	'L_ABOUT_USER' => sprintf($lang['About_user'], $profiledata['username']), 
	'L_AVATAR' => $lang['Avatar'], 
	'L_POSTER_RANK' => $lang['Poster_rank'], 
	'L_JOINED' => $lang['Joined'], 
	'L_TOTAL_POSTS' => $lang['Total_posts'], 
	'L_SEARCH_USER_POSTS' => sprintf($lang['Search_user_posts'], $profiledata['username']), 
	'L_CONTACT' => $lang['Contact'],
	'L_EMAIL_ADDRESS' => $lang['Email_address'],
	'L_EMAIL' => $lang['Email'],
	'L_PM' => $lang['Private_Message'],
	'L_ICQ_NUMBER' => $lang['ICQ'],
	'L_YAHOO' => $lang['YIM'],
	'L_AIM' => $lang['AIM'],
	'L_MESSENGER' => $lang['MSNM'],
	'L_WEBSITE' => $lang['Website'],
	'L_LOCATION' => $lang['Location'],
	'L_OCCUPATION' => $lang['Occupation'],
	'L_INTERESTS' => $lang['Interests'],

	'L_POINTS' => $board_config['points_name'],

	'U_SEARCH_USER' => append_sid("search.$phpEx?search_author=" . $u_search_author),

	'S_PROFILE_ACTION' => append_sid("profile.$phpEx"))
);

$template->pparse('body');

include($phpbb_root_path . 'includes/page_tail.'.$phpEx);

?>