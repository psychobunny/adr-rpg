<?php 
/***************************************************************************
 *					adr_character_prefs.php
 *				------------------------
 *	begin 			: 03/02/2004
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
define('IN_ADR_CHARACTER', true);
define('IN_ADR_VAULT', true);
define('IN_ADR_PREFERENCES', true);

$phpbb_root_path = './'; 
include($phpbb_root_path . 'extension.inc'); 
include($phpbb_root_path . 'common.'.$phpEx);

$loc = 'character_prefs';
$sub_loc = 'adr_character_prefs';

//
// Start session management
$userdata = session_pagestart($user_ip, PAGE_ADR); 
init_userprefs($userdata); 
// End session management
//

include($phpbb_root_path . 'adr/includes/adr_global.'.$phpEx);

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
	$redirect = "adr_character.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login.$phpEx?redirect=$redirect", true));
}

// Includes the tpl and the header
adr_template_file('adr_character_prefs_body.tpl');

include($phpbb_root_path . 'includes/page_header.'.$phpEx);
$user_id = $userdata['user_id'];

// Get the general settings
$adr_general = adr_get_general_config();
adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);

if ( (!( isset($HTTP_POST_VARS[POST_USERS_URL]) || isset($HTTP_GET_VARS[POST_USERS_URL]))) || ( empty($HTTP_POST_VARS[POST_USERS_URL]) && empty($HTTP_GET_VARS[POST_USERS_URL])))
{ 
	$view_userdata = $userdata; 
} 
else 
{ 
	$view_userdata = get_userdata(intval($HTTP_GET_VARS[POST_USERS_URL])); 
} 
$searchid = $view_userdata['user_id'];

if ( $user_id != $searchid )
{
	$message = $lang['Adr_no_access'] .'<br /><br />'.sprintf($lang['Adr_return'],"<a href=\"" .append_sid("adr_character.$phpEx?".POST_USERS_URL."=$searchid") . "\">", "</a>") ;
	message_die( GENERAL_MESSAGE,$message);
}

// Get the general settings
$adr_general = adr_get_general_config();

// See if the user has ever created a character or no
$row = adr_get_user_infos($user_id);

$vault_prefs = $HTTP_POST_VARS['vault_prefs_submit'];
$pvp_prefs = $HTTP_POST_VARS['pvp_prefs_submit'];
$general_prefs = $HTTP_POST_VARS['general_prefs_submit'];

// Vault prefs
$sql = "SELECT * FROM " . ADR_VAULT_USERS_TABLE . "
	WHERE owner_id = $user_id ";
if ( !($result = $db->sql_query($sql)) ) 
{ 
	message_die(CRITICAL_ERROR, 'Error Getting Vault Users!'); 
}
$vault = $db->sql_fetchrow($result);

if($general_prefs)
{
	$account_protect = intval($HTTP_POST_VARS['account_protect']);
	$loan_protect = intval($HTTP_POST_VARS['loan_protect']);
	$pvp_notif_pm = intval($HTTP_POST_VARS['pvp_notif_pm']);
	$pvp_accept = intval($HTTP_POST_VARS['pvp_accept']);
	$character_pref_give_pm = intval($HTTP_POST_VARS['character_pref_give_pm']);
	$character_pref_seller_pm = intval($HTTP_POST_VARS['character_pref_seller_pm']);
	$prefs_tax_pm_notify = intval($HTTP_POST_VARS['prefs_tax_pm_notify']);

	$sql= "UPDATE " . ADR_CHARACTERS_TABLE . " 
		SET prefs_pvp_notif_pm = $pvp_notif_pm,
			prefs_pvp_allow = $pvp_accept,
			prefs_tax_pm_notify = $prefs_tax_pm_notify,
			character_pref_give_pm = $character_pref_give_pm,
			character_pref_seller_pm = $character_pref_seller_pm 
		WHERE character_id = '$user_id'";
	if(!($result = $db->sql_query($sql))){ 
		message_die(GENERAL_ERROR, "Can't update preferences" , "", __LINE__, __FILE__, $sql);} 
	
	$sql= "UPDATE " . ADR_VAULT_USERS_TABLE . " 
		SET account_protect = $account_protect,
			loan_protect = $loan_protect
		WHERE owner_id = '$user_id'";
	if(!($result = $db->sql_query($sql))){
		message_die(GENERAL_ERROR, $lang['Vault_update_error'] , "", __LINE__, __FILE__, $sql);}

	adr_previous(Adr_character_prefs_updated, adr_character_prefs, '');
}

// Show warning if user has no acive vault account
if(!is_numeric($vault['owner_id'])){
	$template->assign_block_vars('no_vault_account', array(
		'L_VAULT_NOT_AVAILABLE' => $lang['Adr_vault_not_available']
	));
}

$template->assign_vars(array(
	'VAULT_ACCOUNT_PROTECT_CHECKED' => (is_numeric($vault['owner_id'])) ? ($vault['account_protect'] ? 'CHECKED' : '') : 'DISABLED',
	'VAULT_LOAN_PROTECT_CHECKED' => (is_numeric($vault['owner_id'])) ? ($vault['loan_protect'] ? 'CHECKED' : '') : 'DISABLED',
	'PVP_NOTIF_PM_CHECKED' => ( $row['prefs_pvp_notif_pm'] ? 'CHECKED' :'' ),
	'PVP_ALLOW_CHECKED' => ( $row['prefs_pvp_allow'] ? 'CHECKED' :'' ),
	'GIVE_ITEM_PM_CHECKED' => ( $row['character_pref_give_pm'] ? 'CHECKED' :'' ),
	'SELLER_ITEM_PM_CHECKED' => ( $row['character_pref_seller_pm'] ? 'CHECKED' :'' ),
	'PREFS_TAX_PM_NOTIFY' => ($row['prefs_tax_pm_notify'] ? 'CHECKED' :''),
	'L_GENERAL' => $lang['Adr_general_pref'],
	'L_GIVE_ITEM_PM' => $lang['Adr_general_give_item_pref'],
	'L_SELLER_ITEM_PM' => $lang['Adr_general_seller_item_pref'],
	'L_PREFS' => $lang['Adr_character_preferences'],
	'L_ADR_VAULT' => $lang['Adr_vault_page_name'],
	'L_VAULT_ACCOUNT_PROTECT' => $lang['Adr_vault_pref_account_protect'],
	'L_VAULT_LOAN_PROTECT' => $lang['Adr_vault_pref_loan_protect'],
	'L_PVP' => $lang['Adr_pvp_prefs'],
	'L_PVP_NOTIF_PM' => $lang['Adr_pvp_prefs_notification_pm'],
	'L_PREFS_TAX_PM_NOTIFY' => $lang['Adr_prefs_tax_pm_notify'],
	'L_SUBMIT' => $lang['Submit'],
	'L_PVP_ALLOW' => $lang['Adr_pvp_prefs_allow_defies'],
	'S_CHARACTER_ACTION' => append_sid("adr_character_prefs.$phpEx"),
));

include($phpbb_root_path . 'adr/includes/adr_header.'.$phpEx);

$template->pparse('body');
include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
 
?> 