<?php 
/*************************************************************************** 
* 						lang_adr.php [English] 
* 							------------------- 
*
* 						Translation : 
* 					Forums : 
* 
****************************************************************************/ 

// General language keys
$lang['Adr_your_character_lack']='You first need to create a character before performing this action';
$lang['Adr_return'] = 'Click %shere%s to return to the previous page';
$lang['Adr_lack_points']= 'You cannot afford this action';
$lang['Adr_lack_sp']= 'You have not acquired enough Spirit Points (SP) to complete this action';
$lang['Adr_default_points_name']='Points';
$lang['Adr_character_lack']='This user has not created a character yet';
$lang['Adr_character_ban']='The administrator of this forum has banned you from using any of the RPG features.<br /><br />Please contact your administrator for further details.';
$lang['Adr_races_name']='Name';
$lang['Adr_races_desc']='Description';
$lang['Adr_races_image']='Image';
$lang['Adr_copyright']='Credits';
$lang['Adr_days']='days';
$lang['Adr_day']='day';
$lang['Adr_hours']='hours';
$lang['Adr_hour']='hour';
$lang['Adr_minutes']='minutes';
$lang['Adr_minute']='minute';
$lang['Adr_less_min']='Less than a minute ago.';
$lang['Adr_show_only_mine']='Only show items available to me';
$lang['Adr_show_all']='Show all items';
$lang['Adr_shops_no_thief']='Sorry, prisoners are not permitted in this area.';

// Abrev. characteristic keys
$lang['Adr_char_lvl']='Lvl';
$lang['Adr_char_dex']='Dex';
$lang['Adr_char_int']='Int';
$lang['Adr_char_wis']='Wis';
$lang['Adr_char_str']='Str';
$lang['Adr_char_cha']='Cha';
$lang['Adr_char_con']='Con';
$lang['Adr_char_restrict_title']='Min. Restrictions';
$lang['Adr_shop_stolen_info']='%sStolen%s %s from %s on %s%s';
$lang['Adr_shop_stolen_by_you']='me';
$lang['Adr_shop_stolen_by']='by %s';
$lang['Adr_shop_stolen_no_sell']='Some of your items were not sold!';
$lang['Adr_shop_stolen_no_sell1']='%s%s%s is a stolen item and no store keepers will purchase this from you.';
$lang['Adr_shop_stolen_no_sell2']='Try selling stolen items in your own store.';
$lang['Adr_shop_inventory_link']='Click %shere%s to return to your inventory.';
$lang['Adr_shop_steal_min_lvl']='You are not high enough level to use the Thief skill.';
$lang['Adr_shop_steal_min_lvl2']='The minimum character level for this skill is %s%s%s.';
$lang['Adr_shop_donated_by']='%sDonated%s by %s on %s%s';

$lang['Adr_lack_sp']= 'You have not acquired enough %s to complete this transaction';
$lang['Adr_lack_fp']= 'You have not acquired enough %s to complete this transaction';
$lang['Adr_update_quota_timer']='Update Due Soon...';
$lang['Adr_shop_total_items']='Total Items';
$lang['Adr_my']='My ';
$lang['Adr_character_prefs_updated']='Your preferences have been updated';
$lang['Adr_items_select_action']='Select an action';
$lang['Adr_quick_nav']='Quick Navigation';
$lang['Adr_not_authed']='You are not authorised to do this';
$lang['Adr_misc_page_name']='My Control Panel';
$lang['Adr_disabled_admin_msg1']='Administration mode';
$lang['Adr_disabled_admin_msg2']='RPG is disabled to normal users at the moment.';
$lang['Adr_disabled_dbupdate_error']='You MUST delete the "adr_db_update.php" from your server for security reasons!';
$lang['Adr_items_type_all']='All';
$lang['Adr_items_select']='Category';
$lang['Adr_items_select_quantity']='Quantity to buy:';
$lang['Adr_disable_rpg'] = 'The RPG is currently disabled';
$lang['Adr_posts'] = 'Sorry, but you do not meet the minimum post count to create a new character';
$lang['On']='On';
$lang['Off']='Off';
$lang['Closed']='View Only';
$lang['year']='Year: ';
$lang['month']='Month: ';
$lang['week']='Week: ';
$lang['day']='Day: ';
$lang['hour']='Hour: ';
$lang['Adr_faq_title']='RPG FAQ';
$lang['Dispose']='Dispose';
$lang['Adr_shops_no_thief']='Sorry, prisoners are not permitted in this area.';

// Skills
$lang['Adr_skill_mining_desc']='Mining Skill';
$lang['Adr_skill_stone_desc']='Stone Cutting Skill';
$lang['Adr_skill_forge_desc']='Forge Skill';
$lang['Adr_skill_enchantment_desc']='Enchantment Skill';
$lang['Adr_skill_trading_desc']='Trading Skill';
$lang['Adr_skill_thief_desc']='Theft Skill';

// Reporting cheats to admin
$lang['Adr_report_pm_sub']='A hack attempt has been made within ADR';
$lang['Adr_report_pm_msg']='A hack attempt has been made by the user %s. The user has attempted to access the admin only shop via a direct URL address but failed';
$lang['Adr_report_pm_msg2']='A hack attempt has been made by the user %s. The user has attempted to use a Vault exploit to gain infinite cash but failed because the exploit has now been fixed';
$lang['Adr_report_pm_pvp']='A hack attempt has been made by the user %s. The user has attempted to use a PvP battle exploit to gain infinite cash and experience but failed because the exploit has now been fixed';

// Warehouse & shop tax keys
$lang['Adr_tax_pm_sub']='[RPG] Notification of taxes paid';
$lang['Adr_character_warehouse_closed']='You are not able to pay your %s %s rent on your open Warehouse. It has now been closed.';
$lang['Adr_character_shop_closed']='You are not able to pay your %s %s rent on your open Shop. It has now been closed.';
$lang['Adr_character_warehouse_tax']='You have been charged %s %s for your open Warehouse.';
$lang['Adr_character_shop_tax']='You have been charged %s %s for your open Shop.';
$lang['Adr_character_quota_timer']='Next Quota Replenish';
$lang['Adr_prefs_tax_pm_notify']='Enable PM notification of shop & warehouse taxes';

if ( defined ( 'IN_ADR_CHARACTER' ))
{
	$lang['Adr_character_new']='Creation of a new character';
	$lang['Adr_character_status_jail_topic']='Status: %sJailed%s';
	$lang['adr_stats_rank']='Rank: %s of %s';
	$lang['Adr_pvp_post_attack']='Attack!';
	$lang['Adr_pvp_post_your_turn']='Your Turn!';
   	$lang['Adr_pvp_post_text']='PvP';
	$lang['Adr_pvp_post_opponent_turn']='%s\'s Turn';
	$lang['Adr_monster_list_hp']='HP';
	$lang['Adr_monster_list_mp']='MP';
	$lang['Adr_monster_list_att']='Att';
	$lang['Adr_monster_list_def']='Def';
	$lang['Adr_monster_list_ma']='Magic Att';
	$lang['Adr_monster_list_md']='Magic Def';
	$lang['Adr_character_battle_stats_title']='Battle Statistics';
	$lang['Adr_character_characteristics']='Characteristics';
	$lang['Adr_character_power']='Strength';
	$lang['Adr_character_agility']='Dexterity';
	$lang['Adr_character_endurance']='Constitution';
	$lang['Adr_character_intelligence']='Intelligence';
	$lang['Adr_character_willpower']='Wisdom';
	$lang['Adr_character_charm']='Charm';
	$lang['Adr_character_ma']='Magic Attack';
	$lang['Adr_character_md']='Magic Resistance';
	$lang['Adr_character_ac']='Armour Class';
	$lang['Adr_character_sp']='Spirit Points';
	$lang['Adr_character_fp']='Faction Points';
	$lang['Adr_character_stats_monster']='Monster Battles';
	$lang['Adr_character_stats_pvp']='PvP Battles';
	$lang['Adr_character_reroll']='Reroll';
	$lang['Adr_character_races_select']='Select a race:';
	$lang['Adr_character_elements_select']='Select an element:';
	$lang['Adr_character_alignments_select']='Select an alignment:';
	$lang['Adr_character_races_mini_faq']='Information about this race';
	$lang['Adr_character_elements_mini_faq']='Information about this element';
	$lang['Adr_character_alignments_mini_faq']='Information about this alignment';
	$lang['Adr_character_new_name']='Choose a name for your character: ';
	$lang['Adr_character_characteristics_no_modifiers']='No Modifiers';
	$lang['Adr_character_characteristics_might_modifiers']='Strength Modifier';
	$lang['Adr_character_characteristics_dext_modifiers']='Dexterity Modifier';
	$lang['Adr_character_characteristics_const_modifiers']='Constitution Modifier';
	$lang['Adr_character_characteristics_int_modifiers']='Intelligence Modifier';
	$lang['Adr_character_characteristics_wis_modifiers']='Wisdom Modifier';
	$lang['Adr_character_characteristics_cha_modifiers']='Charm Modifier';
	$lang['Adr_character_age']='Character Age:';
	$lang['Adr_character_age_old1']='%s Year Old';
	$lang['Adr_character_age_old2']='%s Years Old';
	$lang['Adr_character_new_bio']='Biography';
	$lang['Adr_character_new_bio_explain']='Here you can enter the story behind your character';
	$lang['Adr_character_new_step2']='Continue';
	$lang['Adr_character_new_step4']='Finish';
	$lang['Adr_character_new_class']='Choice of class';
	$lang['Adr_character_must_select_class']='You must choose a class';
	$lang['Adr_character_success']='Your character has been successfully created';
	$lang['Adr_character_impossible']='Your current characteristics forbid you access to all the classes. Please make a new character';
	$lang['Adr_character_twice']='You can not create more than one character';
	$lang['Adr_character_same_name_creation']='Your chosen character name has already been taken!';
	$lang['Adr_level_up']='Level Up!';
	$lang['Adr_level_up_select']='Select the characteristic you wish to upgrade';
	$lang['Adr_level_up_perform']='Upgrade';
	$lang['Adr_level_up_congrats']='Congratulations! You are now level %s!';

	// Character creation
	$lang['Adr_races_bonus_might']='Strength Bonus';
	$lang['Adr_races_bonus_dext']='Dexterity Bonus';
	$lang['Adr_races_bonus_const']='Constitution Bonus';
	$lang['Adr_races_bonus_int']='Intelligence Bonus';
	$lang['Adr_races_bonus_wis']='Wisdom Bonus';
	$lang['Adr_races_bonus_cha']='Charm Bonus';
	$lang['Adr_races_bonus_ma']='Magic Attack Bonus';
	$lang['Adr_races_bonus_md']='Magic Resistance Bonus';
	$lang['Adr_races_malus_ma']='Magic Attack Penalty';
	$lang['Adr_races_malus_md']='Magic Resistance Penalty';
	$lang['Adr_races_malus_might']='Strength Penalty';
	$lang['Adr_races_malus_dext']='Dexterity Penalty';
	$lang['Adr_races_malus_const']='Constitution Penalty';
	$lang['Adr_races_malus_int']='Intelligence Penalty';
	$lang['Adr_races_malus_wis']='Wisdom Penalty';
	$lang['Adr_races_malus_cha']='Charm Penalty';
	$lang['Adr_races_bonus_mining']='Bonus to the Mining Skill';
	$lang['Adr_races_bonus_stone']='Bonus to the skill Stone Cutting';
	$lang['Adr_races_bonus_forge']='Bonus to the skill Forge';
	$lang['Adr_races_bonus_enchant']='Bonus to the skill Enchantment';
	$lang['Adr_races_bonus_trading']='Bonus to the skill Trading';
	$lang['Adr_races_bonus_thief']='Bonus to the skill Theft';
	$lang['Adr_classes_base_hp']='Base hit points';
	$lang['Adr_classes_base_mp']='Base magic points';
	$lang['Adr_classes_base_ac']='Base armour class points';
	$lang['Adr_classes_update_hp']='Hit points earned at each level up';
	$lang['Adr_classes_update_mp']='Magic points earned at each level up';
	$lang['Adr_classes_update_ac']='Armour class points earned at each level up';

	// Main character page
	$lang['Adr_character_of']='%s\'s Character';
	$lang['Adr_character']='Character';
	$lang['Adr_character_class']='Class';
	$lang['Adr_character_race']='Race';
	$lang['Adr_character_element']='Element';
	$lang['Adr_character_alignment']='Alignment';
	$lang['Adr_character_health']='Health Points:';
	$lang['Adr_character_magic']='Mana Points:';
	$lang['Adr_character_experience']='Experience:';	
	$lang['Adr_character_weight']='Weight';
	$lang['Adr_character_overweight_error']='You are currently over encumbered!';
	$lang['Adr_mining']='Mining';
	$lang['Adr_stone']='Stone cutting';
	$lang['Adr_forge']='Forge';
	$lang['Adr_enchantment']='Enchantment';
	$lang['Adr_trading']='Trading';
	$lang['Adr_thief']='Theft';
	$lang['Adr_character_skills']='Skills';
	$lang['Adr_character_skills_pay']='Skills & Characteristic Upgrades';
	$lang['Adr_character_sp_skills']='Choose payment method for Skill upgrades';
	$lang['Adr_character_sp_character']='Choose payment method for Characteristic upgrades';
	$lang['Adr_sp']='Spirit Points (SP)';
	$lang['Adr_character_level']='Level';
	$lang['Adr_character_progress']='Progress';	
	$lang['Adr_character_delete']='Delete Current Character';
	$lang['Adr_character_delete_confirm']='Are you sure you really want to delete your character?';
	$lang['Adr_no_access']='You are not authorised to access this page';
	$lang['Adr_character_successful_deleted']='Your character has been deleted';
	$lang['Adr_character_active_loan']='You cannot delete your character with an outstanding Vault loan active';
	$lang['Adr_character_edit']='Update Character Biography';
	$lang['Adr_character_bio_updated']='Your biography has been successfully edited';

	// Language keys for races , classes , skills , elements and alignments
	// Classes
	$lang['Adr_class_fighter']='Fighter';
	$lang['Adr_class_fighter_desc']='The basic fighter';
	$lang['Adr_class_barbare']='Barbarian';
	$lang['Adr_class_barbare_desc']='Bloody warrior';
	$lang['Adr_class_druid']='Druid';
	$lang['Adr_class_druid_desc']='Nature\'s protector';
	$lang['Adr_class_bard']='Bard';
	$lang['Adr_class_bard_desc']='Musician, thief and fighter';
	$lang['Adr_class_magician']='Magician';
	$lang['Adr_class_magician_desc']='Spell user';
	$lang['Adr_class_monk']='Monk';
	$lang['Adr_class_monk_desc']='Hand to hand warrior';
	$lang['Adr_class_paladin']='Paladin';
	$lang['Adr_class_paladin_desc']='Holy fighter';
	$lang['Adr_class_priest']='Priest';
	$lang['Adr_class_priest_desc']='Defender of his God';
	$lang['Adr_class_sorceror']='Archmage';
	$lang['Adr_class_sorceror_desc']='Very powerful sorcerer';
	$lang['Adr_class_thief']='Thief';
	$lang['Adr_class_thief_desc']='Thief';

	// Elements
	$lang['Adr_element_water']='Water';
	$lang['Adr_element_water_desc']='Element water';
	$lang['Adr_element_earth']='Earth';
	$lang['Adr_element_earth_desc']='Element earth';
	$lang['Adr_element_holy']='Holy';
	$lang['Adr_element_holy_desc']='Element holy';
	$lang['Adr_element_fire']='Fire';
	$lang['Adr_element_fire_desc']='Element fire';
	$lang['Adr_element_ice']='Ice';
	$lang['Adr_element_ice_desc']='Element ice';
	$lang['Adr_element_wind']='Wind';
	$lang['Adr_element_wind_desc']='Element wind';

	// Alignments
	$lang['Adr_alignment_neutral']='Neutral';
	$lang['Adr_alignment_neutral_desc']='Alignment neutral';
	$lang['Adr_alignment_evil']='Evil';
	$lang['Adr_alignment_evil_desc']='Alignment evil';
	$lang['Adr_alignment_good']='Good';
	$lang['Adr_alignment_good_desc']='Alignment good';

	// Races
	$lang['Adr_race_human']='Human';
	$lang['Adr_race_human_desc']='The most common race';
	$lang['Adr_race_half-orc']='Half Orc';
	$lang['Adr_race_half-orc_desc']='Race half-Orc';
	$lang['Adr_race_half-elf']='Half Elf';
	$lang['Adr_race_half-elf_desc']='Race half-Elf';
	$lang['Adr_race_dwarf']='Dwarf';
	$lang['Adr_race_dwarf_desc']='Race Dwarf';
	$lang['Adr_race_gnome']='Gnome';
	$lang['Adr_race_gnome_desc']='Race Gnome';
	$lang['Adr_race_elf']='Elf';
	$lang['Adr_race_elf_desc']='Race Elf';
	$lang['Adr_race_halfeling']='Hobbit';
	$lang['Adr_race_halfeling_desc']='Race Hobbit';

	$lang['Adr_character_battle_history_monsters']='View Monster Arena Battle History';
	$lang['Adr_character_battle_history_players']='View PvP Arena Battle History';
	$lang['Adr_pvp_player_name']='Opponent\'s name';
	$lang['Adr_pvp_player_level']='Opponent\'s level';
	$lang['Adr_pvp_result']='Result';
	$lang['Adr_pvp_stopped_current']='%s abandoned battle';
	$lang['Adr_pvp_flee_current']='%s fled battle';
	$lang['Adr_pvp_victory_current']='%s was Victorious';

	$lang['Adr_give_item_subject']='You have received a gift from %s';
	$lang['Adr_give_item_msg']='You have received a %s from the member %s';
	$lang['Adr_seller_item_subject']='[RPG] Latest transaction from your store';
	$lang['Adr_seller_item_msg']='%s has purchased the following from your store to the total price of %s %s: %s%s%s.';
	$lang['Adr_general_pref']='General';
	$lang['Adr_general_give_item_pref']='Enable notification of gifts received';
	$lang['Adr_general_seller_item_pref']='Enable notification of items sold in personal shop';

	// new viewprofile keys
    $lang['Adr_count_items_warehouse']='Warehouse';
    $lang['Adr_vital_stats']='Vital Stats';
    $lang['Adr_character_chars_infos']='Characteristics';
    $lang['Adr_character_chars_points']='Currency Info';
}

if ( defined ( 'IN_ADR_SHOPS' ))
{
	$lang['Adr_shops_categories_item_name']='Item Name';
	$lang['Adr_shops_categories_item_desc']='Item Description';
	$lang['Adr_items_none']='No items';
	$lang['Adr_items_give']='Give';
	$lang['Adr_items_sell']='Sell';
   	$lang['Dispose']='Delete';
	$lang['Adr_items_buy']='Buy';
	$lang['Adr_items_steal']='Steal';
	$lang['Adr_items_action']='Action';
	$lang['Adr_forum_shops_go']='General Stores';
	$lang['Adr_users_shops_list']='The Blackmarket';
	$lang['Adr_items_search']='Item Search';
	$lang['Adr_users_shops_create']='Create a shop';
	$lang['Adr_users_shops_create_success']='Your shop has been created successfully';
	$lang['Adr_users_shops_edited_success']='Your shop has been edited successfully';
	$lang['Adr_users_shops_create_name']='Name of your shop';
	$lang['Adr_users_shops_create_desc']='Description of your shop';
	$lang['Adr_users_shops_create_price']='In order to create you shop, you have to pay the sum of %s %s';
	$lang['Adr_users_shops_manage']='Manage My Store';
	$lang['Adr_users_shops_already']='You can not create more than one shop at any one time';
	$lang['Adr_shop_forums']='Forum shop';
	$lang['Adr_shop_forums_desc']='All the existing items!';
	$lang['Adr_lack_items']='This item is not for sale';
	$lang['Adr_lack_shops']='You first have to create a shop';
	$lang['Adr_buy_item_success']='Items bought successfully for %s %s';
	$lang['Adr_steal_item_success']='Item successfully stolen!';
	$lang['Adr_steal_item_failure']='You have not managed to steal this item';
	$lang['Adr_steal_item_failure_suite']='You had to pay a fine of %s %s for attempted theft';
	$lang['Adr_steal_item_forbidden']='Theft is forbidden';
	$lang['Adr_items_into_shop']='Put up for sale';
	$lang['Adr_items_into_inventory']='Retrieve';
	$lang['Adr_items_edit']='Edit';
	$lang['Adr_items_copy']='Copy';
	$lang['Adr_items_edition']='Edit of the item <b>%s</b>';
	$lang['Adr_inventory_items_successful_edited']='Item successfully edited';
	$lang['Adr_inventory_items_successful_added']='Items successfully added to your shop';
	$lang['Adr_items_donation']='Gift of the items <b>%s</b>';
	$lang['Adr_items_give_to']='Give to:';
	$lang['Adr_give_item_success']='Items successfully given';
	$lang['Adr_shop_items_successful_removed']='These items have been placed into your inventory';
	$lang['Adr_shop_items_successful_deleted']='These items have been deleted';
	$lang['Adr_inventory_items_successful_selled']='These items have been sold';
	$lang['Adr_shop_items_failure_deleted']='This item does not exist';
	$lang['Adr_users_shops_edit']='Update your shop information';
	$lang['Adr_users_shops_delete']='Close your shop';
	$lang['Adr_users_shops_deleted']='Your shop has been closed';
	$lang['Adr_shop_name']='Shop\'s Name';
	$lang['Adr_shop_desc']='Shop\'s Description';
	$lang['Adr_shops_update_date']='Last updated';
	$lang['Adr_users_shops_owner']='Store owner';
	$lang['Adr_shop_owner_name']='Owner';
    $lang['Adr_shops_update_never']='n/a';
	$lang['Adr_battle_no_delete_items']='You cannot delete and item from your inventory while in an active monster battle!';
	$lang['Adr_battle_no_give_items']='You cannot donate an item while in an active monster battle!';
	$lang['Adr_battle_no_give_items_2']='You cannot donate an item to this user at the moment because they\'re in an active monster battle!';
	$lang['Adr_battle_no_sell_items']='You cannot sell items while in an active monster battle!';
	$lang['Adr_battle_no_move_to_shop']='You cannot move an item from you inventory to personal store while in an active monster battle!';
	$lang['Adr_dont_care']='I do not care';
	$lang['Adr_items_type_least']='Minimum quality value:';
	$lang['Adr_items_power_least']='Minimum power value:';
	$lang['Adr_items_level_least']='Minimum level value:';
	$lang['Adr_items_duration_least']='Minimum duration value:';
	$lang['Adr_items_price_max']='Maximum price:';
	$lang['Adr_items_search_criteria']='Research criteria';
	$lang['Adr_search_no_results']='No item match your criteria';
	$lang['Adr_items_sell_confirm']='Item sale';
	$lang['Adr_items_sell_confirm_price']='Do you want to sell these items for %s %s?'; 
	$lang['Adr_shops_item_weight']='Item Weight';
	$lang['Adr_shops_item_element']='Item Element:';
	$lang['Adr_lack_warehouse']='You need to open a Warehouse account first'; 
	$lang['Adr_warehouse_items_fail']='Failed to add to Warehouse'; 
	$lang['Adr_warehouse_items_successful_added']='Successfully moved item(s) to Warehouse'; 
	$lang['Adr_users_warehouse_close']='Close Warehouse';
	$lang['Adr_users_warehouse_deleted']='Warehouse successfully closed';
	$lang['Adr_items_into_warehouse']='Move to Warehouse';
	$lang['Adr_admin_move_success']='Successfully moved admin only item from admin shop to your inventory';
	$lang['Adr_admin_only_area']='This is an administrator only area!<br /><br />This action has been reported to the forum administrator';

	// Items type
	$lang['Adr_items_type_use']='Item type';
	$lang['Adr_items_type_raw_materials']='Raw material';
	$lang['Adr_items_type_rare_raw_materials']='Rare raw material';
	$lang['Adr_items_type_tools_pickaxe']='Pickaxe';
	$lang['Adr_items_type_tools_magictome']='Magic tome';
	$lang['Adr_items_type_weapon']='Weapon';
	$lang['Adr_items_type_enchanted_weapon']='Magic weapon';
	$lang['Adr_items_type_armor']='Armor';
	$lang['Adr_items_type_buckler']='Shield';
	$lang['Adr_items_type_helm']='Helm';
	$lang['Adr_items_type_gloves']='Gloves';
	$lang['Adr_items_type_magic_attack']='Offensive spell';
	$lang['Adr_items_type_magic_defend']='Defensive spell';
	$lang['Adr_items_type_amulet']='Amulet';
	$lang['Adr_items_type_ring']='Ring';
	$lang['Adr_items_type_health_potion']='Health Potion';
	$lang['Adr_items_type_mana_potion']='Mana Potion';
	$lang['Adr_items_type_misc']='Miscellaneous';

	//Shops
	$lang['Adr_items_quality']='Quality';
	$lang['Adr_items_power']='Power';
	$lang['Adr_items_level']='Level';
	$lang['Adr_items_enhancements']='Armour, Weapon & Magic Spell Enhancements';
	$lang['Adr_items_dex']='Additional Power Modifier:';
	$lang['Adr_items_mp_use']='Additional MP Cost:';
	$lang['Adr_shops_categories_item_add_power']='Additional Power: +';
	$lang['Adr_shops_categories_item_mp_use']='Additional MP Cost: -';
	$lang['Adr_items_duration']='Duration';
	$lang['Adr_items_price']='Price';
	$lang['Adr_items_quality_very_poor']='Very poor';
	$lang['Adr_items_quality_poor']='Poor';
	$lang['Adr_items_quality_medium']='Medium';
	$lang['Adr_items_quality_good']='Good';
	$lang['Adr_items_quality_very_good']='Very good';
	$lang['Adr_items_quality_excellent']='Exceptional';
	$lang['Adr_shops_item_add']='Add an item';
	$lang['Adr_store_name']='Store Name:';
	$lang['Adr_store_desc']='Description:';
	$lang['Adr_store_img']='Logo:';
	$lang['Adr_store_status']='Status:';
	$lang['Adr_store_open']='Open';
	$lang['Adr_store_sale']='Store Sale!';
	$lang['Adr_store_closed']='Closed';
	$lang['Adr_store_admin']='Admin Only';
	$lang['Adr_store_closed_msg']='Sorry, but this store is currently closed for business.<br /><br />Please try again later.';
	$lang['Adr_store_item']=' Information';
	$lang['Adr_store_quality']='Quality:';
	$lang['Adr_store_power']='Power:';
	$lang['Adr_store_level']='Level:';
	$lang['Adr_store_duration']='Duration:';
	$lang['Adr_store_price']='Price:';
	$lang['Adr_store_weight']='Weight:';
	$lang['Adr_store_element']='Element:';
	$lang['Adr_store_element_none']='None';
	$lang['Adr_store_not_stealable']='This item cannot be stolen';

	//Items
	$lang['Adr_item_ore']='Rock';
	$lang['Adr_item_ore_desc']='A small rock';
	$lang['Adr_items_sapphire']='Sapphire';
	$lang['Adr_items_sapphire_desc']='Precious stone';
	$lang['Adr_items_diamond']='Diamond';
	$lang['Adr_items_diamond_desc']='Precious stone';
	$lang['Adr_item_tome']='Magic tome';
	$lang['Adr_item_tome_desc']='Needed to enchant items and use spells';
	$lang['Adr_items_miner']='Pickaxe';
	$lang['Adr_items_miner_desc']='Required for mining';
	$lang['Adr_items_scroll_1']='Fireball';
	$lang['Adr_items_scroll_1_desc']='Offensive spell parchment';
	$lang['Adr_items_scroll_2']='Iceball';
	$lang['Adr_items_scroll_2_desc']='Offensive spell parchment';
	$lang['Adr_items_scroll_3']='Armor';
	$lang['Adr_items_scroll_3_desc']='Defensive spell parchment';
	$lang['Adr_items_scroll_4']='Shadow Armour';
	$lang['Adr_items_scroll_4_desc']='Defensive spell parchment';
	$lang['Adr_items_ring_1']='Ring of might';
	$lang['Adr_items_ring_1_desc']='Attacks the enemy with a small discharge of energy';
	$lang['Adr_items_ring_2']='Supreme ring of might';
	$lang['Adr_items_ring_2_desc']='Attacks the enemy with a big discharge of energy';
	$lang['Adr_items_amulet_1']='Amulet of protection';
	$lang['Adr_items_amulet_1_desc']='Protects the owner';
	$lang['Adr_items_amulet_2']='Supreme amulet of protection';
	$lang['Adr_items_amulet_2_desc']='Protects the owner';

	// Steal item keys
	$lang['Adr_steal_item_failure_critical_all_sentence']='Theft attempt!';
	$lang['Adr_steal_item_failure_critical']='You have been caught by the shop owner trying to steal a %s%s%s. Since you do not have enough money to pay the fine, you will be imprisoned.';
	$lang['Adr_steal_item_failure_critical_all']='During this period, you cannot access the forums.';
	$lang['Adr_steal_item_failure_critical_post']='During this period, you cannot post new messages.';
	$lang['Adr_steal_item_failure_critical_read']='During this period, you cannot read or post messages.';

	// Warehouse keys
	$lang['Adr_warehouse_own']='Personal Warehouse';
	$lang['Adr_warehouse_s']='\'s';
	$lang['Adr_warehouse_name']=' Warehouse';
	$lang['Adr_warehouse_none']='You currently do not have an open Warehouse';
	$lang['Adr_warehouse_open']='Open Warehouse';
	$lang['Adr_warehouse_opened']='You have successfully opened a Warehouse';
	$lang['Adr_warehouse_items_successful_removed']='You have successfully moved the item(s) from your Warehouse to your inventory';

	$lang['Adr_check_all']='Check all';
	$lang['Adr_uncheck_all']='Uncheck all';
	$lang['Adr_forge_broken']='This item cannot be used';
	$lang['Adr_forge_max_skill']='This weapon has reached its maximum enhanced power limit and can no longer be upgraded.';
	$lang['Adr_forge_repair_broken_definitive']='This cannot be repaired';
	$lang['Adr_forge_enchant_broken_definitive']='This cannot be recharged';
	$lang['Adr_delete_used_items']='Delete the irreparable items';
	$lang['Adr_character_prefs_items_deleted']='Irreparable items deleted';
	$lang['Adr_trading_limit']='You have used up your trading quota for today';
	$lang['Adr_thief_limit']='You have used up your thief use quota for today';

	$lang['Adr_steal_none']='Not Stealable';
	$lang['Adr_steal_very_easy']='Very Easy';
	$lang['Adr_steal_easy']='Easy';
	$lang['Adr_steal_average']='Average';
	$lang['Adr_steal_tough']='Tough';
	$lang['Adr_steal_challenging']='Challenging';
	$lang['Adr_steal_formidable']='Formidable';
	$lang['Adr_steal_heroic']='Heroic';
	$lang['Adr_steal_impossible']='Near Impossible';
	$lang['Adr_items_steal_dc']='Steal Chance (dc):';
}

if ( defined ('IN_ADR_VAULT'))
{
	$lang['Adr_vault_exchange_actions']='Available stocks';
	$lang['Adr_vault_interests_rate']='Interests rate';
	$lang['Adr_vault_interests_time']='Interest Time';
	$lang['Adr_vault_closed']='The vault is currently closed. <br /> Please try again later';
	$lang['Adr_vault_user_points']='In hand';
	$lang['Adr_vault_no_account']='You do not have an account here';
	$lang['Adr_vault_open_account']='Open an account';
	$lang['Adr_vault_account_opened']='You now have an account. Thank you for your confidence in us';
	$lang['Adr_vault_account']='Personal account';
	$lang['Adr_vault_close_account']='Close Personal Account';
	$lang['Adr_vault_account_closed']='Your account has been closed';
	$lang['Adr_vault_user_informations']='Personal Information';
	$lang['Adr_vault_opened_accounts']='Open accounts';
	$lang['Adr_vault_accounts_sum']='Total possessions';
	$lang['Adr_vault_account_informations']='Deposit and Withdraw';
	$lang['Adr_vault_account_deposit']='Deposit into your account';
	$lang['Adr_vault_deposit']='Deposit';
	$lang['Adr_vault_account_withdraw']='Withdraw from your account';
	$lang['Adr_vault_withdraw']='Withdraw';
	$lang['Adr_vault_deposit_lack']='You do not own that many points';
	$lang['Adr_vault_withdraw_lack']='You can not withdraw that amount from your account';
	$lang['Adr_vault_account_ok']='The requested operations were made on your account';
	$lang['Adr_vault_loan_informations']='Loans';
	$lang['Adr_vault_loan_no_explain']='In order to request a loan, you must have at least';
	$lang['Adr_vault_loan_rate']='Loan interests rate';
	$lang['Adr_vault_loan_time']='Maximum duration of repayment';
	$lang['Adr_vault_loan_max_sum']='Maximum sum you can borrow';
	$lang['Adr_vault_loan_make']='Take out a loan';
	$lang['Adr_vault_loan_action']='Request loan';
	$lang['Adr_vault_loan_no_double']='You can not have two loans at the same time. Please first pay back the first loan';
	$lang['Adr_vault_loan_no_such']='You can not borrow that much';
	$lang['Adr_vault_loan_ok']='You have borrowed the sum of ';
	$lang['Adr_vault_loan_sum']='Borrowed amount';
	$lang['Adr_vault_loan_remaining_time']='Term';
	$lang['Adr_vault_loan_remaining_date']='Corresponds to the';
	$lang['Adr_vault_loan_loan']='The sum to be paid off';
	$lang['Adr_vault_loan_back']='Pay off the loan';
	$lang['Adr_vault_loan_active']='You have made a loan';
	$lang['Adr_vault_loan_lack_points']='You do not have enough to pay off your loan';
	$lang['Adr_vault_loan_pay_off_ok']='Thank you for paying off your loan before the end of the agreed term';
	$lang['Adr_vault_others']='Miscellanous';
	$lang['Adr_vault_preferences']='Preferences';
	$lang['Adr_vault_list']='Account owners list';
	$lang['Adr_vault_stock_exchange']='Stock Exchange';
	$lang['Adr_vault_exchange_previous_price']='Previous';
	$lang['Adr_vault_exchange_worst_price']='Lowest';
	$lang['Adr_vault_exchange_best_price']='Highest';
	$lang['Adr_vault_exchange_owned']='Owned';
	$lang['Adr_vault_exchange_buy']='Buy';
	$lang['Adr_vault_exchange_sell']='Sell';
	$lang['Adr_vault_exchange_none']='None';
	$lang['Adr_vault_loan_none']='None';
	$lang['Adr_vault_stock_lack']='You can not sell more stocks than you currently own';
	$lang['Adr_vault_points_lack']='You do not have enough money to perform the requested actions';
	$lang['Adr_vault_blacklist']='Your account has been frozen';
	$lang['Adr_vault_blacklist_explain']='This is due to your delay in the repayment conditions of the loan to which you agreed. We now have the legal right to freeze your account. <br /> It will be accessible to you after the repayment of the loan and interest for the delay.';
	$lang['Adr_vault_blacklist_due']='You owe us the sum of ';
	$lang['Adr_vault_blacklist_due_payoff']='Pay off the loan and the delay fines ';
	$lang['Adr_vault_due_ok']='Thank you for your full repayment. Please make sure that this does not happen again.';
	$lang['Adr_vault_pref_account_protect']='Hide the sum in my account from others users';
	$lang['Adr_vault_pref_loan_protect']='Hide the amount of my loan to others users';
	$lang['Adr_vault_not_available']='Vault preferences only available when you have an active Vault account.';
	$lang['Adr_vault_account_amount']='Capital';
	$lang['Adr_vault_loan_amount']='Loan';
	$lang['Adr_vault_confidential']='Hidden';
	$lang['Adr_vault_cheater']='Your attempt to use an old Vault exploit for infinate money has been recorded and info sent to the forum administrator';
  	$lang['Adr_vault_exchange_actions_amount']='Current';
   	$lang['Adr_vault_exchange_actions_name']='Stock';
   	$lang['Adr_vault__page_name']='Vault';
   	$lang['Username']='Member';
   	$lang['Profile']='Profile';

	// Fields language keys - Glory to Ptirhiik !
	$lang['Adr_vault_language_key']='You can enter text or a language key (please refer to language/lang_<i>your_language</i>/lang_main.php)';
	$lang['Adr_vault_action_name_1']='Railroad Company';
	$lang['Adr_vault_action_name_2']='The great Dwarf';
	$lang['Adr_vault_action_name_3']='Rabbit Inc.';
	$lang['Adr_vault_action_desc_1']='Society founded in 1859';
	$lang['Adr_vault_action_desc_2']='Society of treatment of metals';
	$lang['Adr_vault_action_desc_3']='The rabbits paradise';
}

if ( defined ('IN_ADR_BATTLE'))
{
	$lang['Adr_battle_equipment']='Equip Prior to Battle';
	$lang['Adr_battle_select_armor']='Select Armour:';
	$lang['Adr_battle_select_buckler']='Select a Shield:';
	$lang['Adr_battle_select_helm']='Select a Helm:';
	$lang['Adr_battle_select_gloves']='Select Gloves:';
	$lang['Adr_battle_select_amulet']='Select an Amulet:';
	$lang['Adr_battle_select_ring']='Select a Ring:';
	$lang['Adr_battle_no_armor']='No Armour';
	$lang['Adr_battle_no_buckler']='No Shield';
	$lang['Adr_battle_no_helm']='No Helm';
	$lang['Adr_battle_no_gloves']='No Gloves';
	$lang['Adr_battle_no_amulet']='No Amulet';
	$lang['Adr_battle_no_ring']='No Ring';
	$lang['Adr_battle_fight']='Begin Battle';
	$lang['Adr_no_monsters']='No monster corresponds to your level. <br /><br />Please speak to your forum administrator.';
	$lang['Adr_attack']='Attack Power';
	$lang['Adr_defense']='Defence Power';
	$lang['Adr_attack_opponent']='Attack';
	$lang['Adr_defend_opponent']='Defend';
	$lang['Adr_flee_opponent']='Flee';
	$lang['Adr_spell_opponent']='Use a Magic Item';
	$lang['Adr_actions_opponent']='Actions';
	$lang['Adr_potion_opponent']='Use a Potion';
	$lang['Adr_battle_no_weapon']='Bare Fists';
	$lang['Adr_battle_no_spell']='No Magic Item';
	$lang['Adr_battle_no_potion']='No Potion';
	$lang['Adr_battle_critical_hit']='Critical Hit!';
	$lang['Adr_battle_won']='You inflict a death blow of %s damage and leave victorious from the battle! You earn %s experience, %s Spirit Points (SP) and %s %s';
	$lang['Adr_battle_pvp_won']='You inflict a death blow of %s damage and leave victorious from the battle! You earn %s experience and %s %s';
	$lang['Adr_battle_stolen_items']='You recover your stolen items from %s\'s dead corpse';
	$lang['Adr_battle_stolen_items_lost']='%s runs off with your stolen goods!';
	$lang['Adr_battle_return']='Click %shere%s to fight again';
	$lang['Adr_battle_regen_xp']='%s regenerates %s HP!';
	$lang['Adr_battle_regen_mp']='%s regenerates %s MP!';
	$lang['Adr_battle_regen_both']='%s regenerates %s HP & %s MP!';
	$lang['Adr_battle_lost']='%s inflicts a death blow of %s damage...you fall lifeless to the ground.';
	$lang['Adr_battle_double_ko']='You and %s inflict death blows upon one another...both falling lifeless to the ground.';
	$lang['Adr_battle_pvp_lost']='Your opponent inflicts a death blow of %s damage...you fall lifeless to the ground.';
	$lang['Adr_battle_temple']='Click %shere%s to go to the temple'; 
	$lang['Adr_character_return']='Click %shere%s to return to your Character Sheet.';
	$lang['Adr_pvp_return']='Click %shere%s to return to your PvP list page.';
	$lang['Adr_battle_character_dead']='You can not fight if you\'re not alive!';
	$lang['Adr_battle_flee']='%s flees from battle!';
	$lang['Adr_battle_opponent_thief_success']='%s successfully steals a %s from %s!';
	$lang['Adr_battle_opponent_thief_failure']='%s attempts to steal a %s from %s but fails!';
	$lang['Adr_battle_opponent_thief_points']='%s successfully steals %s %s from %s\'s pocket!';
	$lang['Adr_battle_spell_monster_str_success']='%s casts a powerful elemental spell inflicting %s damage upon %s!';
	$lang['Adr_battle_spell_monster_same_success']='%s casts an elemental spell conflicting with %s\'s element inflicting %s damage!';
	$lang['Adr_battle_spell_monster_weak_success']='%s casts a weak elemental spell inflicting %s damage upon %s!';
	$lang['Adr_battle_opponent_attack_success']='%s strikes %s inflicting %s damage!';
	$lang['Adr_battle_opponent_spell_success2']='%s casts a spell upon %s inflicting %s damage!';
	$lang['Adr_battle_opponent_spell_success']='%s casts %s upon %s inflicting %s damage!';
	$lang['Adr_battle_opponent_spell_failure']='%s attempts to cast a spell upon %s, but fails!';
	$lang['Adr_battle_opponent_attack_failure']='%s did not manage to deal any damage upon %s!';
	$lang['Adr_battle_opponent_crit']='%s deals a critical hit!';

	$lang['Adr_battle_spell_success']='%s casts %s [%s element] inflicting %s damage upon %s!';
	$lang['Adr_battle_spell_success_norm']='%s casts %s inflicting %s damage upon %s!';
	$lang['Adr_battle_spell_oppose_str_success']='%s casts %s [powerful element] inflicting %s damage upon %s!';
	$lang['Adr_battle_spell_oppose_same_success']='%s casts %s [conflicting element] upon %s inflicting %s damage!';
	$lang['Adr_battle_spell_oppose_weak_success']='%s casts %s [weak element] upon %s inflicting %s damage!';
	$lang['Adr_battle_spell_failure']='%s attempts to cast %s upon %s but fails!';
	$lang['Adr_battle_spell_defensive_success']='%s casts %s increasing his physical attack and defence by %s!';
	$lang['Adr_battle_spell_dura']='%s\'s spell, %s, has run out of charge and is no longer usable!';
	$lang['Adr_battle_spell_dura_fail']='Your spell has run out of charge and is no longer usable!';
	$lang['Adr_battle_spell_def_dura']='%s\'s %s spell has run out of charge and is no longer usable!';
	$lang['Adr_battle_potion_hp_success']='%s consumes a %s restoring %s HP!';
	$lang['Adr_battle_potion_hp_success_none']='%s attempts to consume a %s but is already at max HP!';
	$lang['Adr_battle_potion_hp_dura_none']='%s discards the %s.';
	$lang['Adr_battle_potion_mp_success']='%s consumes a %s restoring %s MP!';
	$lang['Adr_battle_potion_mp_success_none']='%s attempts to consume a %s but is already at max MP!';
	$lang['Adr_battle_attack_success']='%s strikes %s with a %s [%s element] inflicting %s damage!';
	$lang['Adr_battle_attack_success_norm']='%s strikes %s with a %s inflicting %s damage!';
	$lang['Adr_battle_attack_weap_str']='%s strikes %s with a %s [powerful elemental weapon] inflicting %s damage!';
	$lang['Adr_battle_attack_weap_same']='%s strikes %s with a %s [conflicting element] inflicting %s damage!';
	$lang['Adr_battle_attack_weap_weak']='%s strikes %s with a %s [weak element] inflicting %s damage!';
	$lang['Adr_battle_attack_dura']='%s\'s %s has broken and is discarded!';
	$lang['Adr_battle_attack_failure']='%s attempts to strike %s with a %s but misses the attack!';
	$lang['Adr_battle_attack_bare']='%s inflicts %s damage upon %s with his bare fists!';
	$lang['Adr_battle_attack_bare_fail']='%s attempts to strike %s with his bare fists but misses!';
	$lang['Adr_battle_flee_fail']='%s attempts to flee from battle but fails!';
	$lang['Adr_battle_defend']='%s defends against %s attack!';
	$lang['Adr_battle_check']='Incorrect MP cost check. Please contact your ADR administrator';
	$lang['Adr_battle_msg_check']='\'s turn';
	$lang['Adr_battle_msg_monster_start']='gains the initiative & begins the battle!';

	$lang['Adr_character_battle_statistics']='Battle Statistics';
	$lang['Adr_character_victories']='Victories';
	$lang['Adr_character_defeats']='Defeats';
	$lang['Adr_character_flees']='Flees';
	$lang['Adr_character_double_ko']='Double KO\'s';
	$lang['Adr_character_battle_skills']='Battle & Skill Limits';
	$lang['Adr_character_battle_limit']='Monster Arena Battles Remaining:';
	$lang['Adr_character_skill_limit']='Skill Use Remaining:';
	$lang['Adr_character_trading_limit']='Trading Skill Remaining:';
	$lang['Adr_character_thief_limit']='Theft Skill Remaining:';
	$lang['Adr_character_battle_history']='View battle history';
	$lang['Adr_battle_result']='Battle result';
	$lang['Adr_battle_result_victory']='Victory';
	$lang['Adr_battle_result_defeat']='Defeat';
	$lang['Adr_battle_result_flee']='Escape';
	$lang['Adr_battle_result_double_ko']='Double KO!';
	$lang['Adr_battle_monster_name']='Monster\'s name';
	$lang['Adr_battle_monster_level']='Monster\'s level';
	$lang['Adr_battle_disabled']='The battle system is unavailable at the moment. Please try again later';
	$lang['Adr_battle_over_weight'] = 'You are currently over-weight<br /><br />You need to off load some items before you can battle';
	$lang['Adr_battle_limit']='You have used up your battle quota for today';
	$lang['Adr_battle_force_lvl_up']='You need to level your character up before being able to battle again.';

	//Graphical battles keys
	$lang['Adr_battle_attributes']='Attributes';
	$lang['Adr_battle_phy_att']='Melee Att';
	$lang['Adr_battle_phy_def']='Melee Def';
	$lang['Adr_battle_mag_att']='Magic Att';
	$lang['Adr_battle_mag_def']='Magic Def';
	$lang['Adr_battle_alignment']='Alignment';
	$lang['Adr_battle_element']='Element';
	$lang['Adr_battle_class']='Class';

	// Battle community keys
    $lang['Adr_shoutbox_community']='Community';
    $lang['Adr_shoubox_online_list']='Active Online Characters';
    $lang['Adr_shoutbox_enter']='Type Message';
    $lang['Adr_shoutbox_shout']='Shout!';
    $lang['Adr_community_no_users_online']='No other characters currently online.';

	// Shoutbox keys
	$lang['Adr_global_shout_adm_cmd']='[Admin Command]';
	$lang['Adr_global_shout_vitals']='<b>%s</b> Stats: HP: %s/%s, MP: %s/%s';
	$lang['Adr_global_shout_error_1']='You need to add text before posting!';
	$lang['Adr_global_shout_error_2']='Sorry, you exceeded the max characters allowed for a single post.';
	$lang['Adr_global_shout_error_3']='You have not entered the correct format for this admin command. Please refer to the administrator command notes for more details.';
	$lang['Adr_global_shout_error_no_log']='No one has started a chat session today';
	$lang['Adr_global_shout_announcer']='Global Announcer';
	$lang['Adr_global_shout_killme']='<b>%s</b> attempts to kill themselves with a %s';
	$lang['Adr_global_shout_incorrect_user']='The username: <b>%s</b> was not recognised to complete this action.';
	$lang['Adr_global_shout_kill_yes']='The user: <b>%s</b> has been successfully killed';
	$lang['Adr_global_shout_kill_already']='The user: <b>%s</b> is already dead.';
	$lang['Adr_global_shout_endmon_yes']='The monster battle for the user: <b>%s</b> has been successfully cancelled.';
	$lang['Adr_global_shout_endmon_none']='There were no active monster battles found for the user: <b>%s</b>';
	$lang['Adr_global_shout_ban_yes']='The user: <b>%s</b> has been banned from participating in the RPG.';
	$lang['Adr_global_shout_ban_already']='The user: <b>%s</b> is already serving an ADR ban.';
	$lang['Adr_global_shout_unban_yes']='The user: <b>%s</b> has been successfully un-banned from the RPG.';
	$lang['Adr_global_shout_unban_already']='The user: <b>%s</b> is NOT currently serving a ban at the moment.';
	$lang['Adr_global_shout_endallpvp_yes']='All PvP battles have successfully ended for the user: <b>%s</b>';
	$lang['Adr_global_shout_endallpvp_none']='The user: <b>%s</b> has no outstanding PvP battles.';
	$lang['Adr_global_shout_revive_yes']='The user: <b>%s</b> has been successfully revived.';
	$lang['Adr_global_shout_revive_already']='The user: <b>%s</b> is currently alive and does not need to be revived.';
	$lang['Adr_global_shout_ban_pm']='You have been banned from playing the RPG';
	$lang['Adr_global_shout_unban_pm']='You have been un-banned from playing the RPG';
	$lang['Adr_global_shout_pvpme']='%s: PvP me!!';
	$lang['Adr_global_shout_endpvp_yes']='The PvP match between <b>%s</b> and <b>%s</b> has been cancelled.';
	$lang['Adr_global_shout_endpvp_none']='No PvP match found with the battle id of <b>%s</b>.';
	$lang['Adr_global_shout_realname']='%s %s\'s real name is %s. %s';
}

if ( defined ('IN_ADR_TEMPLE'))
{
	$lang['Adr_temple_settings_explain']='Here you can manage the options of the temple';
	$lang['Adr_temple_heal_cost']='Cost to fully heal a character (by level)';
	$lang['Adr_temple_resurrect_cost']='Cost to resurrect a character (by level)';
	$lang['Adr_battle_progress']='You first have to end your current battle.';
	$lang['Adr_temple_heal_cost']='Heal cost';
	$lang['Adr_temple_resurrect_cost']='Resurrection cost';
	$lang['Adr_temple_heal']='Healing Light';
	$lang['Adr_temple_resurrect']='Resurrect';
	$lang['Adr_temple']='Temple';
	$lang['Adr_temple_resurrect_instead']='You need to resurrect your character, not simply heal!';
	$lang['Adr_temple_heal_not']='You do not need to be healed';
	$lang['Adr_temple_heal_instead']='You do not need to be resurrected';
	$lang['Adr_temple_healed']='You are now fully healed and ready for battle.';
	$lang['Adr_temple_resurrected']='You have been revived!';
}

if ( defined ('IN_ADR_CELL'))
{
	$lang['Adr_cell_admin_title_explain']='Here you can imprison or free your users, define their prison sentence or amend their pledge amount';
	$lang['Adr_cell_admin_select_user']='Select a user to imprison';
	$lang['Adr_cell_admin_select']='Imprison this user';
	$lang['Adr_cell_admin_time']='Prison sentence';
	$lang['Adr_cell_admin_time_explain']='Theses values represent the time during which the user will not be authorised to access the forums';
	$lang['Adr_cell_admin_caution']='Pledge amount';
	$lang['Adr_cell_admin_caution_explain']='This is the amount of points the user has to pay to be freed. Set to 0 if you do not want to use this feature or if you do not use a point system on your forums';
	$lang['Adr_cell_admin_celled_ok']='The selected user has been successfully imprisoned';
	$lang['Adr_cell_admin_uncelled_ok']='The selected users have been successfully released';
	$lang['Adr_cell_admin_celled_users']='Imprisoned users';
	$lang['Adr_cell_admin_celled_name']='Name';
	$lang['Adr_cell_admin_celled_caution']='Pledge';
	$lang['Adr_cell_admin_celled_time']='Remaining time';
	$lang['Adr_cell_admin_celled_free']='Free';
	$lang['Adr_cell_admin_manual_update']='Update the prison sentences';
	$lang['Adr_cell_admin_manual_update_explain']='The update of the sentences is made while imprisoned users are connected to your forums. If a user has not come to your forums in a while, the values you see may be incorrect. Click on this button to correct this problem.';
	$lang['Adr_cell_admin_celled_manual_update_ok']='Update of the prison sentences made successfully. The following users have been freed:<br />';
	$lang['Adr_cell_sentence_example']='You have been imprisoned because of offensive language';
	$lang['Adr_cell_sentence']='Sentence';
	$lang['Adr_cell_sentence_explain']='This text will explain the detention reason to the user';
	$lang['Adr_cell_title']='Detention';
	$lang['Adr_cell_explain']='A site admin has imprisoned you. This will last';
	$lang['Adr_cell_time_explain']='Until this time, you will not be able to access these forums';
	$lang['Adr_cell_caution']='It is possible for you to be released from prison by paying a pledge to the sum of ';
	$lang['Adr_cell_caution_pay']='Pay the pledge';
	$lang['Adr_cell_free']='You have now been released from prison. Be careful not to return to it. <br /><br />Click <a href="'.append_sid("index.php").'">here</a> to go the forums index';
	$lang['Adr_cell_celled_time']='Imprisonment duration';
	$lang['Adr_cell_judge_user']='Judge this user';
	$lang['Adr_cell_judgement']='Judgement';
	$lang['Adr_cell_freeable']='Can be freed';
	$lang['Adr_cell_freeable_explain']='If you check this option, the others users will be able to judge this user'; 
	$lang['Adr_cell_cautionnable']='Pledge can be paid';
	$lang['Adr_cell_cautionnable_explain']='If you check this option, others users will be able to pay the pledge for this user';
	$lang['Adr_cell_admin_celled_users_explain']='You can edit the imprisoned users by clicking on their name';
	$lang['Adr_cell_admin_celled_edited_ok']='This user has been edited successfully';
	$lang['Adr_cell_selected_celled']='Selected user:';
	$lang['Adr_cell_judgement_none']='No users are actually imprisoned';
	$lang['Adr_cell_celled_list']='See the imprisonment history';
	$lang['Adr_cell_celled_date']='Imprisonment date';
	$lang['Adr_cell_freed_type']='Freed by';
	$lang['Adr_cell_judgement_never']='No users have been imprisoned yet';
	$lang['Adr_cell_freed_type_still']='This user is still imprisoned';
	$lang['Adr_cell_freed_type_time']='End of the detention period';
	$lang['Adr_cell_freed_type_admin']='Courthouse';
	$lang['Adr_cell_celled_list_history']='Imprisonment history';
	$lang['Adr_cell_imprisonments']='Total imprisonment';
	$lang['Adr_cell_admin_celled_blank']='Clear this users imprisonment history';
	$lang['Adr_cell_admin_celled_blank_explain']='If you check this option, this users\' imprisonment history will be deleted';
	$lang['Adr_cell_admin_update_error']='Error during the update of the jail setting';
	$lang['Adr_cell_updated_return_settings']='The jail settings have been edited successfully. <br /><br />Click %shere%s to return to the jail management'; 
	$lang['Adr_cell_settings_explain']='Here you can edit the general settings of the jail system';
	$lang['Adr_cell_settings_bars']='Display the avatar of imprisoned users behind cell bars';
	$lang['Adr_cell_settings_celleds']='Display the total imprisonment number for this user on topics and in their profile';
	$lang['Adr_cell_settings_caution']='Allow users to pay the pledge for other users';
	$lang['Adr_cell_settings_judge']='Allow users to judge other users';
	$lang['Adr_cell_settings_blank']='Allow users to clear their police record';
	$lang['Adr_cell_settings_blank_sum']='Sum to pay to clear the individuals police record';
	$lang['Adr_cell_judgement']='Judgement';
	$lang['Adr_cell_judgement_pay_sledge']='Pay the pledge';
	$lang['Adr_cell_lack_money']='You don\'t have enough points to perform this action';
	$lang['Adr_cell_sledge_paid']='This user\'s pledge has been successfully paid';
	$lang['Adr_cell_return']='Click %shere%s to return to the courthouse';
	$lang['Adr_cell_settings_voters']='Minimum number of votes in order to validate the judgement'; 
	$lang['Adr_cell_settings_posts']='Minimum number of posts the users must have to be authorised to vote';
	$lang['Adr_cell_caution_not_authed']='This user can\'t be freed by paying a pledge';
	$lang['Adr_cell_judgement_ever']='You have already judged this user';
	$lang['Adr_cell_judgement_explain']='Which is your judgement?';
	$lang['Adr_cell_judgement_guilty']='Guilty';
	$lang['Adr_cell_judgement_innocent']='Innocent';
	$lang['Adr_cell_judgement_not_authed']='You are not authorised to judge this user';
	$lang['Adr_cell_judgement_done']='Your judgement has been registered successfully';
	$lang['Adr_cell_blank_text']='You can clear your police record if you pay the sum of %s';
	$lang['Adr_cell_blank_explain']='Clear your police record';
	$lang['Adr_cell_blank_done']='Your police record have been cleared successfully';
	$lang['Adr_cell_judgement_ever_authed']='This user has been judged guilty';
	$lang['Adr_cell_admin_punishment']='Select the actions forbidden for the user:';
	$lang['Adr_cell_admin_punishment_global']='All';
	$lang['Adr_cell_admin_punishment_posts']='Post new messages';
	$lang['Adr_cell_admin_punishment_read']='Post and read messages';
	$lang['Adr_cell_punishment']='Punishment';
	$lang['Adr_cell_punishment_global']='Banned';
	$lang['Adr_cell_punishment_posts']='Cannot post new messages';
	$lang['Adr_cell_punishment_read']='Cannot read or post messages';
	$lang['Adr_cell_time_explain_posts']='Until this time, you are not allowed to post new messages';
	$lang['Adr_cell_time_explain_read']='Until this time, you are not allowed to read or post messages';
	$lang['Adr_cell_days']='days';
	$lang['Adr_cell_hours']='hours';
	$lang['Adr_cell_minutes']='minutes';
    $lang['Adr_cell_vote_only_once']='You have already submitted a vote for this sentence.';
}

if ( defined ('IN_ADR_FORGE'))
{
	$lang['Adr_forge_repair']='Repair an item';
	$lang['Adr_forge_repair_explain']='This allows you to repair item for free';
	$lang['Adr_forge_recharge']='Recharge a magic item';
	$lang['Adr_forge_recharge_explain']='This allows you to recharge magic items for free';
	$lang['Adr_forge_create']='Create a new item';
	$lang['Adr_forge_enchant']='Enchant an item';
	$lang['Adr_forge_mining']='Go mining';
	$lang['Adr_forge_mining_explain']='Digging allows you to find raw materials';
	$lang['Adr_forge_stone']='Improve raw materials';
	$lang['Adr_forge_stone_explain']='This allows you to improve the quality of your raw materials, so you can sell them for a better price';
	$lang['Adr_forge_mining_select_tool']='Select a tool';
	$lang['Adr_forge_mining_no_tool']='No tool';
	$lang['Adr_forge_mining_go']='Go mining';
	$lang['Adr_forge_mining_tool_needed']='You can\'t dig with your hands!';
	$lang['Adr_forge_mining_failure']='You found nothing';
	$lang['Adr_forge_mining_success']='You found a %s with a value of %s %s !';
	$lang['Adr_forge_repair_no_item']='No item';
	$lang['Adr_forge_repair_select_item']='Select an item to repair';
	$lang['Adr_forge_repair_go']='Repair this item';
	$lang['Adr_forge_repair_tool_needed']='You can\'t repair this item with your hands!';
	$lang['Adr_forge_repair_item_to_repair_needed']='You must select an item to be repaired';
	$lang['Adr_forge_repair_failure_critical']='What clumsiness! You have destroyed this item!';
	$lang['Adr_forge_repair_failure']='You failed to repair this item';
	$lang['Adr_forge_repair_success']='Congratulations! This item can be used %s more times';
	$lang['Adr_forge_recharge_select_item']='Select an item to recharge';
	$lang['Adr_forge_recharge_go']='Recharge';
	$lang['Adr_forge_recharge_failure']='You did not manage to recharge this item';
	$lang['Adr_forge_recharge_tool_needed']='You cannot recharge this item with your hands !';
	$lang['Adr_forge_recharge_item_to_repair_needed']='You must select an item to be recharged';
	$lang['Adr_forge_stone_select_item']='Selection a raw material';
	$lang['Adr_forge_stone_go']='Improve this raw material';
	$lang['Adr_forge_stone_tool_needed']='You need a tool to improve a raw material';
	$lang['Adr_forge_stone_item_to_repair_needed']='You must choose a raw material to be improved';
	$lang['Adr_forge_stone_failure']='You did not manage to improve this raw material';
	$lang['Adr_forge_stone_success']='Congratulations! You have managed to improve the quality of this raw material and now has a duration of %s points!';
	$lang['Adr_forge_enchant_select_tool']='Select a spell';
	$lang['Adr_forge_enchant_select_item']='Select a weapon to enchant';
	$lang['Adr_forge_enchant_go']='Enchant this item';
	$lang['Adr_forge_enchant_explain']='Enchanting an item increases its power';
	$lang['Adr_forge_enchant_no_item']='No magic item';
	$lang['Adr_forge_enchant_tool_needed']='You must choose a magic item to enchant another one';
	$lang['Adr_forge_enchant_item_to_repair_needed']='You must choose an item to enchant';
	$lang['Adr_forge_enchant_failure']='You did not manage to enchant this item';
	$lang['Adr_forge_enchant_success']='Congratulations! You have managed to increase the power of this item by %s points!';
	$lang['Adr_forge_repair_not_needed']='This item does not need to be repaired';
	$lang['Adr_forge_recharge_not_needed']='This item does not need to be recharged';
	$lang['Adr_skill_limit']='You have used up your skill use quota for today';
}

if ( defined('IN_ADR_COPYRIGHT'))
{
	$lang['Translator']='';
	$lang['Adr_copyright_translator']='Translator';
	$lang['Adr_copyright_explain']='All of them have played a high role into the creation of this system';
	$lang['Adr_copyright_images']='Images';
	$lang['Adr_copyright_thanks']='Special Thanks';
	$lang['Adr_copyright_author']='Original Author';
	$lang['Adr_copyright_new_author']='New ADR Developer (v0.30+)';
}

if ( defined('IN_ADR_TOWN'))
{
	$lang['Adr_town_training_grounds']='Training Grounds';
	$lang['Adr_town_training_grounds_train_skill']='Train a Skill';
	$lang['Adr_town_training_grounds_train_charac']='Train a Characteristic';
	$lang['Adr_town_training_grounds_train_upgrade']='Promotion';
	$lang['Adr_town_training_grounds_change_class']='Change Class';
	$lang['Adr_town_training_grounds_train_upgrade_lack_class']='There is no promotion are available for your current class and characteristics';
	$lang['Adr_town_training_grounds_select_upgrade']='Class Promotion Selection';
	$lang['Adr_town_training_grounds_select']='Promote';
	$lang['Adr_town_training_grounds_select_upgrade_cost']='The cost of a promotion is %s %s';
	$lang['Adr_town_training_grounds_select_upgrade_must']='You must select a class';
	$lang['Adr_town_training_grounds_select_upgrade_done']='Class successfully promoted!';
	$lang['Adr_town_training_grounds_change_class_cost']='The cost to change your class is %s %s';
	$lang['Adr_town_training_grounds_change_class_forbid']='You are not allowed to change your class';
	$lang['Adr_town_training_grounds_change_class_must']='You must select a class';
	$lang['Adr_town_training_grounds_change_class_done']='Class successfully modified!';
	$lang['Adr_town_training_grounds_change_class_upgrade']='New Class Selection';
	$lang['Adr_town_training_grounds_change_class']='Change Class';
	$lang['Adr_town_training_grounds_train_skill_cost']='Training Cost';
	$lang['Adr_town_training_grounds_train_skill_action']='Train this skill';
	$lang['Adr_town_training_grounds_train_skill_must']='You must select a skill';
	$lang['Adr_town_training_grounds_train_skill_done']='You have increased the level of this skill';
	$lang['Adr_town_training_grounds_train_charac_action']='Train this Characteristic';
	$lang['Adr_town_training_grounds_train_charac_must']='You must select a characteristic';
	$lang['Adr_town_training_grounds_train_charac_done']='You have increased the level of this characteristic';
	$lang['Adr_town_warehouse']='Warehouse';
	$lang['Adr_lack_warehouse']='Sorry, you do not own a Warehouse.<br /><br />Please open one first';
}

if ( defined('IN_ADR_PREFERENCES'))
{
	$lang['Adr_pvp_prefs']='Battles between users';
	$lang['Adr_pvp_prefs_notification_pm']='Enable notification of events by private message';
	$lang['Adr_pvp_prefs_allow_defies']='Allow other users to challenge me';
}

if ( defined('IN_ADR_EQUIPMENT'))
{
	$lang['Adr_equip']='Equip Prior to Battle';
	$lang['Adr_equip_done']='The selected items have been equipped';
	$lang['Adr_equip_title']='Select your equipment prior to battle';
	$lang['Adr_equip_title_of']='%s\'s Equipment';
	$lang['Adr_equip_armor']='<b>Armour</b>';
	$lang['Adr_equip_buckler']='<b>Shield</b>';
	$lang['Adr_equip_helm']='<b>Helm</b>';
	$lang['Adr_equip_gloves']='<b>Gloves</b>';
	$lang['Adr_equip_amulet']='<b>Amulet</b>';
	$lang['Adr_equip_ring']='<b>Ring</b>';
}

if ( defined('IN_ADR_PVP'))
{
	$lang['Adr_pvp_defy']='Challenge';
	$lang['Adr_pvp_waiting_battles']='Challenges on Standby';
	$lang['Adr_pvp_waiting_battles_you']='Challenges awaiting your approval';
	$lang['Adr_pvp_waiting_battles_other']='Challenges awaiting approval from your opponent';
	$lang['Adr_pvp_current_battles']='Current Battles';
	$lang['Adr_pvp_opponent']='Opponent';
	$lang['Adr_pvp_turn']='Current turn: ';
	$lang['Adr_pvp_join']='Join';
	$lang['Adr_pvp_stop']='Abandon Battle';
	$lang['Adr_pvp_defy_user']='Select a user to challenge';
	$lang['Adr_pvp_defy_already']='A challenge is currently active with this user';
	$lang['Adr_pvp_defy_select']='Select a user to defy';
	$lang['Adr_pvp_defy_ok']='You have challenged this user';
	$lang['Adr_pvp_defied_by']='%s has challenged you';
	$lang['Adr_pvp_defied_by_link']='. You can click on this link : %s to approve or deny this challenge .';
	$lang['Adr_pvp_waiting_accept']='Accept';
	$lang['Adr_pvp_waiting_deny']='Reject';
	$lang['Adr_pvp_deny_ok']='This challenge has been denied';
	$lang['Adr_pvp_denied']='Your challenge has been rejected';
	$lang['Adr_pvp_denied_by']='%s has rejected your challenge.';
	$lang['Adr_pvp_defy_accept']='Accept the Challenge';
	$lang['Adr_pvp_accepted']='Your challenge has been accepted';
	$lang['Adr_pvp_accepted_by']='%s has accepted your challenge.';
	$lang['Adr_pvp_defy_accepted_ok']='The battle can now begin!';
	$lang['Adr_pvp_stopped']='Abandon current challenge';
	$lang['Adr_pvp_stopped_by']='%s has abandoned your challenge.';
	$lang['Adr_pvp_stop_ok']='You have abandoned this challenge';
	$lang['Adr_pvp_disabled']='Battles between players are disabled';
	$lang['Adr_pvp_wrong_turn']='This is not your turn to play!';
	$lang['Adr_pvp_exploit_error']='Trying to use a PvP exploit, eh?.<br /><br />Well, your forum admin has been notified & will deal with your account accordingly! Hahaha...';
	$lang['Adr_pvp_regen_xp']='%s regenerates %s Health points!';
	$lang['Adr_pvp_regen_mp']='%s regenerates %s Mana points!';
	$lang['Adr_pvp_flee']='Victory by default';
	$lang['Adr_pvp_flee_by']='%s has fleed from the PvP battle against you. You have been credited the win by default.';
	$lang['Adr_pvp_flee_failure']='%s attempted to flee from battle but failed!';

	$lang['Adr_pvp_spell_success']='%s casts %s [%s element], upon %s, inflicting %s damage!';
	$lang['Adr_pvp_spell_success_norm']='%s casts %s, upon %s, inflicting %s damage!';
	$lang['Adr_pvp_spell_dura']='%s\'s spell %s has run out of charge and is discarded.';
	$lang['Adr_pvp_spell_failure']='%s casts %s upon %s but fails to inflict any damage!';
	$lang['Adr_pvp_spell_defensive_success']='%s casts %s upon himself. %s\'s physical attack and defense increases by %s points!';
	$lang['Adr_pvp_potion_hp_dura']='%s discards the used %s.';
	$lang['Adr_pvp_potion_hp_success']='%s drinks %s restoring %s HP!';
	$lang['Adr_pvp_potion_mp_success']='%s drinks %s restoring %s MP!';
	$lang['Adr_pvp_attack_dura']='%s\'s %s breaks beyond repair & is discarded.';
	$lang['Adr_pvp_attack_success']='%s strikes %s with a %s [%s element] inflicting %s damage!';
	$lang['Adr_pvp_attack_success_norm']='%s strikes %s with a %s inflicting %s damage!';
	$lang['Adr_pvp_attack_failure']='%s attempts to strike %s with a %s but misses!';
	$lang['Adr_pvp_attack_bare_success']='%s strikes %s with his bare fists inflicting %s points of damage!';
	$lang['Adr_pvp_attack_bare_fail']='%s attempts to strike %s with his bare hands but misses!';
	$lang['Adr_pvp_start_pvp']='PvP match against %s%s%s accepted and has now begun.';
	$lang['Adr_pvp_start_pvp_1']='Click %shere%s to go straight to the battle or click %shere%s to go back to your current PvP battle list.';
	$lang['Adr_pvp_refresh_page']='Refresh Page';

	$lang['Adr_pvp_battle_chat']='Chat';
	$lang['Adr_pvp_lost']='You have been defeated';
	$lang['Adr_pvp_lost_by']='%s inflicted a death blow of %s damage and has defeated you';
	$lang['Adr_pvp_won']='Victory!';
	$lang['Adr_pvp_won_by']='You inflict a death blow of %s damage and are victorious against %s! You win %s experience points and %s %s!';
	$lang['Adr_pvp_turn']='New turn';
	$lang['Adr_pvp_turn_by']='It is currently your turn to play in the challenge against %s';
	$lang['Adr_pvp_end_turn']='You inflict %s damage upon your opponent.<br /><br />Your turn has now ended';
	$lang['Adr_pvp_defy_too_much']='Please finish your current challenges before beginning any new ones';
	$lang['Adr_pvp_waiting_break']='Cancel';
	$lang['Adr_pvp_broken']='Challenge cancelled';
	$lang['Adr_pvp_broken_by']='%s has cancelled the challenge';
	$lang['Adr_pvp_broken_ok']='This challenge has been cancelled';
	$lang['Adr_pvp_see']='View Battle!';
	$lang['Adr_pvp_your_turn']='Your Turn!';
    $lang['Adr_pvp_comms']='PvP Battle Messages';
    $lang['Adr_pvp_custom_taunt']='Type Message';
	$lang['Adr_pvp_defy_too_much_opponent']='The opponent has reached the maximum active PvP battles allowed at any one time. PvP request cancelled.';
	$lang['Adr_pvp_opponent_dead']='The opponent is currently dead. PvP request cancelled.';
	$lang['Adr_battle_flee_pvp']='You successfully flee from battle!';

	// Graphical battle keys
	$lang['Adr_pvp_taunt_none']='Select custom taunt...';
	$lang['Adr_pvp_taunt_1']='Good fight!';
	$lang['Adr_pvp_taunt_2']='Have some!';
	$lang['Adr_pvp_taunt_3']='Ah damn!';
	$lang['Adr_pvp_taunt_4']='Punk!';
	$lang['Adr_pvp_taunt_5']='I\'m gonna slice and dice ya\'!';
	$lang['Adr_pvp_taunt_6']='You son of a...!';
	$lang['Adr_pvp_taunt_7']='Stop waving your Sword around like a feather duster!';
	$lang['Adr_pvp_taunt_8']='Who\'s your daddy?!';
	$lang['Adr_pvp_taunt_9']='Get some, get some!';
	$lang['Adr_pvp_taunt_10']='I\'ll swap ye decks with ye!';
}

?>