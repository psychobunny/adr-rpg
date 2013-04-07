<?php
/***************************************************************************
 *                                 adr_constants.php
 *                            -------------------
 *   begin                : 31/01/2004
 *   copyright            : Dr DLP / Malicious Rabbit
 *
 *
 ***************************************************************************/

if ( !defined('IN_PHPBB') )
{
	die('Hacking attempt');
}

// Let's define the tables . Erf ... There are many , so broke them into categories
define('ADR_GENERAL_TABLE', $table_prefix.'adr_general'); // General table : contains all the mod infos
define('ADR_VAULT_EXCHANGE_TABLE',$table_prefix.'adr_vault_exchange'); // Table of the exchanges : needs to be defined all the time , because of price updates
define('ADR_VAULT_USERS_TABLE',$table_prefix.'adr_vault_users');
define('ADR_EXPLOIT_FIX', $table_prefix .'adr_create_exploit_fix');
define('ADR_BUG_FIX', $table_prefix .'adr_bug_fix');

if ( defined('IN_ADR_CHARACTER') )
{
	define('ADR_ALIGNMENTS_TABLE', $table_prefix.'adr_alignments');
	define('ADR_CHARACTERS_TABLE', $table_prefix.'adr_characters');
	define('ADR_CLASSES_TABLE', $table_prefix.'adr_classes');
	define('ADR_ELEMENTS_TABLE', $table_prefix.'adr_elements');
	define('ADR_RACES_TABLE', $table_prefix.'adr_races');
	define('ADR_SKILLS_TABLE', $table_prefix.'adr_skills');
}

if ( defined('IN_ADR_SHOPS') )
{
	define('ADR_SHOPS_TABLE', $table_prefix.'adr_shops');
	define('ADR_SHOPS_GENERAL_TABLE', $table_prefix.'adr_shops_general');
	define('ADR_SHOPS_ITEMS_TABLE', $table_prefix.'adr_shops_items');
	define('ADR_SHOPS_ITEMS_TYPE_TABLE', $table_prefix.'adr_shops_items_type');
	define('ADR_SHOPS_ITEMS_QUALITY_TABLE', $table_prefix.'adr_shops_items_quality');
	define('ADR_STORES_TABLE', $table_prefix.'adr_stores');
	define('ADR_STORES_STATS_TABLE', $table_prefix.'adr_stores_stats');
	define('ADR_STORES_USER_HISTORY', $table_prefix.'adr_stores_user_history');
}

if ( defined('IN_ADR_VAULT') )
{
	define('ADR_VAULT_BLACKLIST_TABLE',$table_prefix.'adr_vault_blacklist');
	define('ADR_VAULT_EXCHANGE_USERS_TABLE',$table_prefix.'adr_vault_exchange_users');
	define('ADR_VAULT_GENERAL_TABLE',$table_prefix.'adr_vault_general');
	define('ADR_VAULT_USERS_TABLE',$table_prefix.'adr_vault_users');
}

if ( defined('IN_ADR_BATTLE') )
{
	define('ADR_BATTLE_MONSTERS_TABLE',$table_prefix.'adr_battle_monsters');
	define('ADR_BATTLE_LIST_TABLE',$table_prefix.'adr_battle_list');
	define('ADR_BATTLE_PVP_TABLE',$table_prefix.'adr_battle_pvp');
	define('ADR_BATTLE_COMMUNITY',$table_prefix.'adr_battle_community');
}

if ( defined('IN_ADR_CELL') )
{
	define('ADR_JAIL_USERS_TABLE', $table_prefix.'adr_jail_users');
	define('ADR_JAIL_VOTES_TABLE', $table_prefix.'adr_jail_votes');
}

?>
