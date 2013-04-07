<?php 
/*************************************************************************** 
* 						lang_adr_admin.php [English] 
* 							------------------- 
*
* 						Translation : 
* 					Forums : 
* 
****************************************************************************/ 

if ( defined ('IN_ADR_ADMIN') )
{
	if ( defined ('IN_ADR_ITEM_TYPE'))
	{
		$lang['Adr_item_type_explain']='Here you can configure Item Types. Add, edit or delete them.'; 
		$lang['Adr_item_type_add_edit']='Add or edit of Item Types';
		$lang['Adr_item_type_name']='Name';
		$lang['Adr_item_type_name_explain']='The name of the item type. You can use a language key.';
		$lang['Adr_item_type_id']='ID';
		$lang['Adr_item_type_id_explain']='The ID of the Item Type';
		$lang['Adr_item_type_price']='Price';
		$lang['Adr_item_type_price_explain']='The basic price of the Item Type.';
		$lang['Adr_item_type_successful_added']='New Item Type successfully added';
		$lang['Adr_item_type_successful_edited']='Item Type successfully edited';
		$lang['Adr_item_type_successful_deleted']='Item Type deleted successfully';
		$lang['Adr_item_type_add']='Add an Item Type';
		$lang['Adr_item_type_category']='Category';
		$lang['Adr_item_type_category_explain']='Select a category from the drop down list or write a new category in the text field';
	}
	if ( defined ('IN_ADR_CHARACTER'))
	{
		// Races
		$lang['Adr_races_explain']='Here you can configure races. Add, edit or delete them.'; 
		$lang['Adr_races_add']='Add a race';
		$lang['Adr_races_add_edit']='Add or edit or races';
		$lang['Adr_races_add_edit_explain']='Here you can add or edit races.'; 
		$lang['Adr_races_name_explain']='You can use a language key';
		$lang['Adr_races_image_explain']='The image must be placed into the directory /adr/images/races/';
		$lang['Adr_races_level']='User level';
		$lang['Adr_races_level_explain']='You can define a user level for the use of this race';
		$lang['Adr_races_level_all']='All';
		$lang['Adr_races_level_admin']='Administrator';
		$lang['Adr_races_level_mod']='Moderator';
		$lang['Adr_race_successful_added']='New race successfully added';
		$lang['Adr_race_successful_edited']='Race successfully edited';
		$lang['Adr_race_default']='You can not delete the default race';
		$lang['Adr_race_successful_deleted']='Race deleted successfully';
		$lang['Adr_races_weight']='Base max weight';
		$lang['Adr_races_weight_per_level']='Percentage of weight increase at level up';

		// Classes
		$lang['Adr_classes_explain']='Here you can configure classes. Add, edit or delete them.'; 
		$lang['Adr_classes_add']='Add a class';
		$lang['Adr_classes_add_edit']='Add or edit of classes';
		$lang['Adr_classes_add_edit_explain']='Here you can add or edit classes.'; 
		$lang['Adr_classes_image_explain']='The image must be placed into the directory /adr/images/classes/';
		$lang['Adr_classes_level_explain']='You can define a user level for the use of this class';
		$lang['Adr_classes_req_might']='Minimum value of the characteristic Strength';
		$lang['Adr_classes_req_dext']='Minimum value of the characteristic Dexterity';
		$lang['Adr_classes_req_const']='Minimum value of the characteristic Constitution';
		$lang['Adr_classes_req_int']='Minimum value of the characteristic Intelligence';
		$lang['Adr_classes_req_wis']='Minimum value of the characteristic Wisdom';
		$lang['Adr_classes_req_cha']='Minimum value of the characteristic Charm';
		$lang['Adr_classes_req_ma']='Minimum value of the characteristic Magic Attack';
		$lang['Adr_classes_req_md']='Minimum value of the characteristic Magic Resistance';
		$lang['Adr_class_successful_added']='New class successfully added';
		$lang['Adr_class_successful_edited']='Class successfully edited';
		$lang['Adr_class_default']='You can not delete the default class';
		$lang['Adr_class_successful_deleted']='Class deleted successfully';
		$lang['Adr_classes_update_xp_req']='Required experience points to level up';
		$lang['Adr_classes_update_of']='Is an evolution of';
		$lang['Adr_classes_update_of_req']='Minimum level to evolve to this class';
		$lang['Adr_classes_selectable']='Can be chosen during character creation';
		$lang['Adr_classes_evolution_none']='Is not an evolution';

		// Elements
		$lang['Adr_elements_add']='Add an element';
		$lang['Adr_elements_explain']='Here you can configure elements. Add, edit or delete them.'; 
		$lang['Adr_elements_add_edit']='Addition and edition of elements';
		$lang['Adr_elements_add_edit_explain']='Here you can add or edit elements.';
		$lang['Adr_elements_colour']='Element Colour';
		$lang['Adr_elements_colour_ex']='Here you can set a colour to be applied to item names during battle.<br>You can set using an actual name, eg. red, as long as it has been defined in your css file otherwise you will need to add as a <a href="http://www.w3schools.com/html/html_colornames.asp" target="_blank">hex value</a> instead.';
		$lang['Adr_elements_image_explain']='The image must be placed into the directory /adr/images/elements/';
		$lang['Adr_elements_level_explain']='You can define a user level for the use of this element';
		$lang['Adr_element_successful_added']='New element successfully added';
		$lang['Adr_element_successful_edited']='Element successfully edited';
		$lang['Adr_element_successful_deleted']='Element deleted successfully';
		$lang['Adr_element_default']='You can not delete the default element';

		$lang['Adr_element_oppose_str']='Chose an opposing element that this element will be stronger than';
		$lang['Adr_element_oppose_weak']='Chose an opposing element that this element will be weaker than';
		$lang['Adr_element_oppose_str_dmg']='Chose a percentage for the stronger element';
		$lang['Adr_element_oppose_same_dmg']='Chose a percentage for the same element';
		$lang['Adr_element_oppose_weak_dmg']='Chose a percentage for the weaker element';

		// Alignments
		$lang['Adr_alignments_add']='Add an alignment';
		$lang['Adr_alignments_explain']='Here you can configure alignments. Add, edit or delete them.'; 
		$lang['Adr_alignments_add_edit']='Add or edit of alignments';
		$lang['Adr_alignments_add_edit_explain']='Here you can add or edit alignments.';
		$lang['Adr_alignments_image_explain']='The image must be placed into the directory /adr/images/alignments/';
		$lang['Adr_alignments_level_explain']='You can define a user level for the use of this alignment';
		$lang['Adr_alignment_successful_added']='New alignment successfully added';
		$lang['Adr_alignment_successful_edited']='Alignment successfully edited';
		$lang['Adr_alignment_successful_deleted']='Alignment deleted successfully';
		$lang['Adr_alignment_default']='You can not delete the default alignment';

		//Skills
		$lang['Adr_skills_explain']='Here you can edit the skills';
		$lang['Adr_skills_req']='Uses';
		$lang['Adr_skills_add_edit']='Edit of the skills';
		$lang['Adr_skills_req_explain']='Number of successful uses before the skill increases';
		$lang['Adr_skills_successful_edited']='Skill successfully updated';
		$lang['Adr_skills_chance']='Chances';
		$lang['Adr_skills_chance_explain']='Percentage of successful usage of the skill for each level';

		// Inventory
		$lang['Adr_character_admin_inventory']='View User Inventory';
		$lang['Adr_delete_inventory']='Delete Entire Inventory';
		$lang['Adr_character_inventory_title']=' Inventory & Warehouse Contents';
		$lang['Adr_admin_delete_entire_inventory']='Entire inventory deleted';
		$lang['Adr_admin_item_deleted']='Item(s) deleted from user inventory';
	}

	if ( defined ('IN_ADR_SETTINGS'))
	{
		// General settings	
		$lang['Adr_admin_general_settings']='General settings';
		$lang['Adr_admin_general_settings_explain']='Here you can edit the options relative to ADR';
		$lang['Adr_admin_general_character_creation']='Character creation';
		$lang['Adr_admin_general_character_page_name']='Name of the character creation page';
		$lang['Adr_admin_general_character_allow_reroll']='Allow users to reroll their statistics';
		$lang['Adr_admin_general_character_allow_delete']='Allow users to make a new character';
		$lang['Adr_admin_general_character_stats_max']='Maximum value of the characteristics';
		$lang['Adr_admin_general_character_stats_min']='Minimum value of the characteristics';
		$lang['Adr_character_general_update_error']='Error during the update of the general settings';
		$lang['Adr_character_general_update_success']='General settings successfully edited';

		$lang['Adr_admin_general_shop_settings']='Shop settings';
		$lang['Adr_admin_general_item_base_price_settings']='Items settings - Base price';
		$lang['Adr_admin_general_item_modifier_price_settings']='Items settings - Modifiers';
		$lang['Adr_admin_general_item_modifier_power_settings']='Modifiers by the item power';
		$lang['Adr_admin_general_item_modifier_power_settings_explain']='You can define a percentage value for the item value according to its power';
		$lang['Adr_admin_general_item_modifier_quality_settings']='Modifiers by the item quality';
		$lang['Adr_admin_general_item_modifier_quality_settings_explain']='You can define a percentage value for the item value according to its quality';
		$lang['Adr_admin_general_item_modifier_type_settings']='Items base price';
		$lang['Adr_admin_general_item_modifier_type_settings_explain']='You can define a base price for the item value according to its type';
		$lang['Adr_admin_general_item_modifier_power']='Percent of the item base value earned for each level of power';
		$lang['Adr_admin_allow_steal']='Allow users to steal from shops';
		$lang['Adr_admin_allow_steal_sell']='Allow stolen items to be resold?';
		$lang['Adr_admin_allow_steal_sell_ex']='Disabling this option will prevent users from selling stolen items back to forum stores. These item can only be sold via a user created store.';
		$lang['Adr_admin_allow_steal_lvl']='Minimum Level to use Thief Skill';
		$lang['Adr_admin_allow_steal_lvl_ex']='The minimum character level required in order for a user to begin stealing items from forum stores.';
		$lang['Adr_admin_steal_show']='Show Item Difficulty Level in Forum Stores';
		$lang['Adr_admin_steal_show_ex']='This will enable users to see the difficulty level set on each item when viewing forum stores';

		$lang['Adr_admin_cache_int']='Cache Auto-update Interval';
		$lang['Adr_admin_cache_int_ex']='This option allows the cache files to auto-refresh themselves once every x minutes. This also checks for any quotas due for replenishing.<br>15 mins is recommended. Drop the value down if you find the quotas are not refreshing properly. Dropping this value too low may result in heavy server load - recommend 5 mins minimum if you are suffering from quota issues.';

		$lang['Adr_admin_new_shop_price']='Price required to open a new shop';
		$lang['Adr_admin_character_age']='Initial character age at creation';
		$lang['Adr_admin_experience_posting']='Experience while posting';
		$lang['Adr_admin_weight_enable_title']='Battle Weight Restrictions';
		$lang['Adr_admin_weight_enable']='Turn Weight restriction on / off';
		$lang['Adr_admin_experience_posting_new']='Experience points earned for creating a new topic';
		$lang['Adr_admin_experience_posting_reply']='Experience points earned for a reply';
		$lang['Adr_admin_experience_posting_edit']='Experience points earned for editing a post';
		$lang['Adr_skill_trading_power']='Percentage of price modification for each skill level';
		$lang['Adr_skill_thief_failure_amend']='Fine for the thieves (only if the theft fails)';
		$lang['Adr_skill_thief_failure_amend_explain']='Minimum value of the fine. If the item price is higher the amount of the fine will be the item price. You can leave this value null if you do not want to give a fine to thieves';
		$lang['Adr_fail_steal_punishment']='What to do if the user doesn\'t have enough points to pay the fine?';
		$lang['Adr_fail_steal_punishment0']='Don\'t inflict the fine';
		$lang['Adr_fail_steal_punishment1']='Make pay all the available points';
		$lang['Adr_fail_steal_punishment2']='Imprisonment';
		$lang['Adr_fail_steal_type']='Imprisonment type in this case';
		$lang['Adr_fail_steal_type0']='Deny access to the forums';
		$lang['Adr_fail_steal_type1']='Deny new posts';
		$lang['Adr_fail_steal_type2']='Deny reading posts';
		$lang['Adr_fail_steal_time']='Number of imprisonment\'s hours';

		$lang['Adr_battle_item_power_level']='Limit the use of the items during the battles';
		$lang['Adr_battle_item_power_level_explain']='If you check this option, users will only be able to use items whose the power is less or equal to their own character level';
		$lang['Adr_town_training_grounds_admin']='Training';
		$lang['Adr_town_training_grounds_admin_change_allow']='Allow change of class';
		$lang['Adr_town_training_grounds_admin_change_cost']='Cost for the change of class';
		$lang['Adr_town_training_grounds_admin_skill_cost']='Cost of skill training ( per level )';
		$lang['Adr_town_training_grounds_admin_charac_cost']='Cost of the characteristic training ( per level )';
		$lang['Adr_town_training_grounds_admin_upgrade_cost']='Cost of promotion';

		$lang['Adr_use_cache']='Use the cache system';
		$lang['Adr_use_cache_explain']='The cache system reduces the number of SQL queries. If you want to use it, you have to make a CHMOD 666 or higher on the following files :';
		$lang['Adr_display_profile']='Profile display';
		$lang['Adr_display_profile_allow']='Activate the display of the character information into the profile';
		$lang['Adr_display_topics']='Topics display';
		$lang['Adr_display_topics_level']='Display the level';
		$lang['Adr_display_topics_text']='As text';
		$lang['Adr_display_topics_pic']='As image';
		$lang['Adr_display_topics_class']='Display the class';
		$lang['Adr_display_topics_race']='Display the race';
		$lang['Adr_display_topics_element']='Display the element';
		$lang['Adr_display_topics_alignment']='Display the alignment';
		$lang['Adr_display_topics_pvp']='Display PvP link';
		$lang['Adr_display_topics_rank']='Display ADR current rank';
		$lang['Adr_display_topics_battle_stats']='Display current battle statistics';
		$lang['Adr_next_level_penalty']='Penalty for the level up';
		$lang['Adr_next_level_penalty_explain']='Percent of additional experience points required to level-up ( the higher a characters level, the more he needs experience points required to level-up ) ';
		$lang['Adr_admin_regen_period_title']='Battle & Skill Usage Limit';
		$lang['Adr_admin_regen_enable']='Enable Battle & Skill limits';
		$lang['Adr_admin_regen_period']='Period per battle & skill regeneration (in days)';
		$lang['Adr_admin_battle_limit']='Number of battles allowed per day';
		$lang['Adr_admin_skill_limit']='Number of successful skill training';
		$lang['Adr_admin_trading_limit']='Number of successful store trades';
		$lang['Adr_admin_thief_limit']='Number of successful store thefts';
		$lang['Adr_admin_enable_rpg_title']='Enable / Disable RPG';
		$lang['Adr_admin_enable_rpg']='Turn entire RPG on/off';
		$lang['Adr_admin_posts']='Enable minimum post restriction on new character creation:';
		$lang['Adr_admin_posts_min']='Minimum posts required to create a new character:';
		$lang['Adr_admin_character_tax']='Shop & Warehouse Taxes';
		$lang['Adr_admin_character_shop_tax']='Open shop tax amount:';
		$lang['Adr_admin_character_shop_dura']='Duration between charge for shop tax:';
		$lang['Adr_admin_character_wh_tax']='Open warehouse tax amount:';
		$lang['Adr_admin_character_wh_dura']='Duration between charge for warehouse tax:';
		$lang['Adr_admin_days']='days';
      	$lang['Adr_admin_hours']='hours';
      	$lang['Adr_admin_mins']='minutes';

		$lang['Adr_pvp']='Battles between users';
		$lang['Adr_display_topics_link']='Display the link to the character';
		$lang['Adr_pvp_enable_pvp']='Enable battles between users';
		$lang['Adr_pvp_defies_max']='Maximum number of simultaneous PvP battles per user';
		$lang['Adr_pvp_stats_exp_modifier_explain']='Defines a percentage difference for the experience gained for each degree of difference between the two users';
		$lang['Adr_pvp_stats_reward_modifier_explain']='Defines a percentage difference for the reward gained for each degree of difference between the two users';
	}

	if ( defined ('IN_ADR_SHOPS'))
	{
		$lang['Adr_shops_item_title']='Management of the items in the forum shop';
		$lang['Adr_shops_item_title_explain']='Here you can manage the forum shop items';
		$lang['Adr_shops_item_add']='Add an item';
		$lang['Adr_shops_item_add_title']='Add or edit items';
		$lang['Adr_shops_item_add_title_explain']='Here you can add and edit the forum shop items';
		$lang['Adr_items_image_explain']='The image must be placed into the directory /adr/images/items/';
		$lang['Adr_shops_items_successful_edited']='Item successfully updated';
		$lang['Adr_shops_items_successful_added']='Item successfully added';
		$lang['Adr_shops_items_successful_deleted']='Item successfully deleted';
		$lang['Adr_items_duration_max']='Maximum duration';
		$lang['Adr_item_max_skill']='Maximum Power from Forge use:';
		$lang['Adr_item_sell_back']='Resell Percentage Penalty:';
		$lang['Adr_item_sell_back_explain']='This is the percentage penalty off the standard forum shop price for the item when sold back to the forum shop. This calculation is made before taking item quality, duration & trading skill into account for the final resell price.';
		$lang['Adr_item_sell_back_title']='Resell';
		$lang['Adr_items_price_explain']='If you leave this field empty, the ideal price will be calculated and used ( recommended )';
		$lang['Adr_shops_item_element']='Element type: (weapons & spells only)';
		$lang['Adr_shops_item_element_str']='Percentage dealt against weaker opposing element:';
		$lang['Adr_shops_item_element_same']='Percentage dealt against the same element:';
		$lang['Adr_shops_item_element_weak']='Percentage dealt against stronger opposing element:';

		$lang['Adr_items_store']='Add to store type:';
		$lang['Adr_items_element_none']='No Element';
		$lang['Adr_items_dex_explain']='When the user equips the above item for battle, this value will be added on top of the items Power value. *This has no affect on Rings & Amulets*';
		$lang['Adr_items_mp_use_explain']='If set, this value will remove additional MP from the user when using a *weapon* or *spell*.';

		$lang['Adr_store_title']='Forum Shop Categories';
		$lang['Adr_store_title_explain']='Create & edit shop categories:';
		$lang['Adr_store_name']='Store Name:';
		$lang['Adr_store_desc']='Description:';
		$lang['Adr_store_status']='Status:';
		$lang['Adr_store_sales']='Sales Status:';
		$lang['Adr_store_auth']='Make an admin-only item:';
		$lang['Adr_store_view']='Set shop items as non-buyable (view only)';
		$lang['Adr_store_view_title']='View:';
		$lang['Adr_store_cat_add']='Add New Category';
		$lang['Adr_store_status_closed']='Closed';
		$lang['Adr_store_status_open']='Open';
		$lang['Adr_store_sales_on']='Sale On';
		$lang['Adr_store_sales_off']='Normal';
		$lang['Adr_store_auth_all']='All';
		$lang['Adr_store_auth_admin']='Admin Only';
		$lang['Adr_store_open']='Open';
		$lang['Adr_store_closed']='Closed';
		$lang['Adr_store_normal']='Normal';
		$lang['Adr_store_sale']='Sale';
		$lang['Adr_store_all']='All Users';
		$lang['Adr_store_admin']='Admin Only';
		$lang['Adr_store_image_explain']='The image must be placed into the directory /adr/images/store/';
		$lang['Adr_store_cats_successful_deleted']='Store successfully deleted';
		$lang['Adr_store_cats_successful_edit']='Store successfully updated';
		$lang['Adr_store_cats_successful_new']='Store successfully created';
		$lang['Adr_items_steal_explain']='Choose the difficulty level for being able to steal this item from the forum stores. The value in brackets is the Difficulty Class (dc) and should be roughly doubled to work out what level a character needs to be to have a chance at successfully stealing the item. This value is invisible to the end user & is recommended to stay secret.';

		// Item Restriction keys
        $lang['Adr_admin_item_restrict_title']='Item Use Restrictions';
        $lang['Adr_admin_item_restrict_class_enable']='Enable Class Restriction';
        $lang['Adr_admin_item_restrict_class_enable_explain']='Enabling this option will enable the restriction of this item to one or more specified classes.<br>Disabling this option will make this item available to all classes';
        $lang['Adr_admin_item_restrict_class']='Class Selection';
        $lang['Adr_admin_item_restrict_alignment_enable']='Enable Alignment Restriction';
        $lang['Adr_admin_item_restrict_alignment_enable_explain']='Enabling this option will enable the restriction of this item to one or more specified alignments.<br>Disabling this option will make this item available to all alignments';
        $lang['Adr_admin_item_restrict_alignment']='Alignment Selection';
        $lang['Adr_admin_item_restrict_race_enable']='Enable Race Restriction';
        $lang['Adr_admin_item_restrict_race_enable_explain']='Enabling this option will enable the restriction of this item to one or more specified races.<br>Disabling this option will make this item available to all races';
        $lang['Adr_admin_item_restrict_race']='Race Selection';
        $lang['Adr_admin_item_restrict_element_enable']='Enable Element Restriction';
        $lang['Adr_admin_item_restrict_element_enable_explain']='Enabling this option will enable the restriction of this item to one or more specified elements.<br>Disabling this option will make this item available to all elements';
        $lang['Adr_admin_item_restrict_element']='Element Selection';
		$lang['Adr_admin_item_restrict_level']='Level Restriction';
		$lang['Adr_admin_item_restrict_level_explain']='This is the minimum level of the character required in order to use this item.';
		$lang['Adr_admin_item_restrict_chars']='Characteristic Restriction';
		$lang['Adr_admin_item_restrict_chars_explain']='Here you can set minimum characteristics required in order to use this item';
		$lang['Adr_admin_item_mass_delete']='Mass Deletion Item From Character Inventories';
		$lang['Adr_admin_item_mass_delete_ex']='Checking this option will delete all instances of this item from character inventories.<br>The database search is by the item name only, set above, so you should check this option BEFORE renaming an item if you so wish to mass delete this item.<br>This option will NOT delete any instance of the item name which is assigned to the forum stores so you will still see this item listed in the ACP section forum shop items list.';

		$lang['Adr_items_price_sp']='Spirit Points Price';
		$lang['Adr_items_price_sp_explain']='You can add an additional cost to this item with Spirit Points (SP). This is gained by defeating monsters in battle.<br>If set to zero then it will not be shown in forum store view.';
		$lang['Adr_items_price_fp']='Faction Points Price';
		$lang['Adr_items_price_fp_explain']='You can add an additional cost to this item with Faction Points (FP). This is gained by defeating other members in PvP battles.<br>If set to zero then it will not be shown in forum store view.';
	}

	if ( defined ('IN_ADR_VAULT'))
	{
		$lang['Adr_vault_update_error']='Error during the update of the vault configuration';
		$lang['Adr_vault_updated_return_settings']='The vault configuration has been updated successfully. <br /><br />Click %sHere%s to return to the vault management screen';
		$lang['Adr_vault_settings']='Vault Configuration';
		$lang['Adr_vault_settings_explain']='Here you can manage all the options related to the Vault system';
		$lang['Adr_vault_use']='Activate the Vault';
		$lang['Adr_vault_settings_name']='Name of the Vault';
		$lang['Adr_vault_interests_rate']='Interests rate';
		$lang['Adr_vault_interests_rate_explain']='Percentage of the users total account sum that will earned per interest time';
		$lang['Adr_vault_interests_time']='Interest Time';
		$lang['Adr_vault_interests_time_explain']='Time period between two interest payments (in seconds).';
		$lang['Adr_vault_loan_use']='Activate the loan system';
		$lang['Adr_vault_loan_interests']='Loan interests rate';
		$lang['Adr_vault_loan_interests_explain']='Percentage of the borrowed sum that the user will have to pay back';
		$lang['Adr_vault_loan_interests_time']='Loan interests time';
		$lang['Adr_vault_loan_interests_time_explain']='Time after which the user must have paid back his loan (in seconds).';
		$lang['Adr_vault_max_sum']='Maximum sum';
		$lang['Adr_vault_max_sum_explain']='Maximum amount of points that a user can borrow';
		$lang['Adr_vault_requirements']='Requirements';
		$lang['Adr_vault_requirements_explain']='Minimum amount of posts a user must have to access the loan system.';
		$lang['Adr_vault_attack_use']='Activate attack the treasury system';
		$lang['Adr_vault_time_explain']='Corresponds to ';
		$lang['Adr_vault_exchange_settings']='Stock Exchange Configuration';
		$lang['Adr_vault_exchange_settings_explain']='Here you can manage the stock exchange system';
		$lang['Adr_vault_exchange_use']='Activate the stock exchange system';
		$lang['Adr_vault_exchange_min']='Minimum percentage variation';
		$lang['Adr_vault_exchange_min_explain']='This represents the minimum variation of the stocks price';
		$lang['Adr_vault_exchange_max']='Maximum percent of variations';
		$lang['Adr_vault_exchange_max_explain']='This represents the maximum variation of the stocks price';
		$lang['Adr_vault_exchange_time']='Time between variations';
		$lang['Adr_vault_exchange_time_explain']='This represents the time between the two variations of the stock prices (in seconds) ';
		$lang['Adr_vault_exchange_updated_return_settings']='The stock exchange configuration has been edited successfully. <br /><br />Click %sHere%s to return to the stock exchange management';
		$lang['Adr_vault_exchange_actions_name']='Name';
		$lang['Adr_vault_exchange_actions_desc']='Description';
		$lang['Adr_vault_exchange_actions_amount']='Price';
		$lang['Adr_vault_exchange_action']='Action';
		$lang['Adr_vault_exchange_edit']='Edit';
		$lang['Adr_vault_exchange_delete']='Delete';
		$lang['Adr_vault_exchange_actions_add']='Add a stock';
		$lang['Adr_vault_exchange_settings_add']='Add a stock';
		$lang['Adr_vault_exchange_settings_explain_add']='This form allows you to add a stock';
		$lang['Adr_vault_exchange_actions_add']='Add a stock';
		$lang['Adr_vault_exchange_settings_edit']='Edit a stock';
		$lang['Adr_vault_exchange_settings_explain_edit']='This form allows you to edit a stock';
		$lang['Adr_vault_exchange_actions_edit']='Edit a stock';
		$lang['Adr_vault_exchange_added_return_settings']='The new stock has been added successfully. <br /><br />Click %sHere%s to return to the stock exchange management';
		$lang['Adr_vault_exchange_edited_return_settings']='The new stock has been edited successfully. <br /><br />Click %sHere%s to return to the stock exchange management';
		$lang['Adr_vault_exchange_deleted_return_settings']='The new stock has been deleted successfully. <br /><br />Click %sHere%s to return to the stock exchange management';
		$lang['Adr_vault_users_title']='Account Owners Management';
		$lang['Adr_vault_users_title_explain']='Here you can edit the account owners statistics';
		$lang['Adr_vault_user_select']='Select a user';
		$lang['Adr_vault_user_select_list']='From this list';
		$lang['Adr_vault_user_select_input']='Or by entering a username';
		$lang['Adr_vault_user']='User';
		$lang['Adr_vault_user_account']='Account';
		$lang['Adr_vault_user_on_account']='Into the account';
		$lang['Adr_vault_no_loan']='No loan';
		$lang['Adr_vault_user_loan']='Borrowed sum';
		$lang['Adr_vault_user_pay_off']='Pay back this user\'s loan';
		$lang['Adr_vault_user_preferences']='Preferences';
		$lang['Adr_vault_user_protect_account']='Protected account';
		$lang['Adr_vault_user_protect_loan']='Protected loan';
		$lang['Adr_vault_users_updated_return_settings']='The update of this user has been made successfully. <br /><br /> Click %sHere%s to return to the account owners management';
	}

	if ( defined ('IN_ADR_BATTLE'))
	{
		$lang['Adr_battle_settings']='Battle settings';
		$lang['Adr_battle_settings_explain']='Here you can configure the options of the battle system';
		$lang['Adr_battle_use']='Activate the battle system';
		$lang['Adr_battle_monsters']='Battles against monsters';
		$lang['Adr_battle_monsters_stats_modifier']='Modification of the characteristics according to the difference of level';
		$lang['Adr_battle_monsters_stats_modifier_explain']='Define a characteristic percentage difference for each degree of difference between the level of the user and the level of the monster';
		$lang['Adr_battle_monsters_modifier_type']='Type of monster battle modifier calculation used:';
		$lang['Adr_battle_monsters_modifier_type_explain']='The old type calculation is used in all versions of ADR prior to v0.3.4.<br />The new type calculation is that posted by Xanathis on the ADR support forum (recommended)';
		$lang['Adr_battle_monsters_modifier_type_1']='Old Type';
		$lang['Adr_battle_monsters_modifier_type_2']='New Type';
		$lang['Adr_battle_monster_stats_exp_min']='Minimum experience earned if the user wins';
		$lang['Adr_battle_monster_stats_exp_max']='Maximum experience earned if the user wins';
		$lang['Adr_battle_monster_stats_exp_modifier']='Modification of experience earned according to the difference of level';
		$lang['Adr_battle_monster_stats_exp_modifier_explain']='Define a difference of percentage earned for each degree of difference between the level of the user and the level of the monster';
		$lang['Adr_battle_monster_stats_sp_modifier']='Modification of Spirit Points (SP) earned according to the difference of level';
		$lang['Adr_battle_monster_stats_sp_modifier_explain']='Define a difference of percentage earned for each degree of difference between the level of the user and the level of the monster';
		$lang['Adr_battle_monster_stats_reward_min']='Minimum points earned if the user wins';
		$lang['Adr_battle_monster_stats_reward_max']='Maximum points earned if the user wins';
		$lang['Adr_battle_monster_stats_reward_modifier']='Modification of the points earned according to the difference of level';
		$lang['Adr_battle_monster_stats_reward_modifier_explain']='Define a difference of points percentage for each degree of difference between the level of the user and the level of the monster';
		$lang['Adr_admin_monsters']='Monsters';
		$lang['Adr_admin_monsters_explain']='Here you can add, edit or delete the monsters of the battle system';
		$lang['Adr_monsters_name']='Name of the monster';
		$lang['Adr_monsters_image']='Image';
		$lang['Adr_monsters_level']='Level';
		$lang['Adr_admin_monsters_base_hp']='Health points';
		$lang['Adr_admin_monsters_base_def']='Defence';
		$lang['Adr_admin_monsters_att']='Attack';
		$lang['Adr_admin_monsters_element']='Element';
		$lang['Adr_admin_monsters_ma']='Magic Attack';
		$lang['Adr_admin_monsters_md']='Magic Resistance';
		$lang['Adr_admin_monsters_base_mp']='Mana points';
		$lang['Adr_admin_monsters_base_mp_power']='Spell power';
		$lang['Adr_admin_monsters_base_sp']='Spirit Points (SP)';
		$lang['Adr_admin_monsters_custom_spell']='Custom Spell Name';
		$lang['Adr_admin_monsters_custom_spell_explain']='Enter a custom spell name for this monster to use during battle. Leaving this empty will use a default spell name.';
		$lang['Adr_admin_monsters_thief_skill']='Thief skill level';
		$lang['Adr_monsters_add']='Add a monster';
		$lang['Adr_monsters_add_edit']='Add or edit monsters';
		$lang['Adr_monsters_add_edit_explain']='Here you can add and edit the monsters for the battle system';
		$lang['Adr_monsters_image_explain']='The image must be placed into the directory /adr/images/monsters/';
		$lang['Adr_monster_successful_added']='New monster added successfully';
		$lang['Adr_monster_successful_deleted']='Monster deleted successfully';
		$lang['Adr_monster_successful_edited']='Monster edited successfully';
		$lang['Adr_battle_thief']='Monster Thief Settings';
		$lang['Adr_battle_thief_enable']='Enable monster arena thief feature?';
		$lang['Adr_battle_thief_points']='Percentage of points to steal from user';
	}

	if ( defined ('IN_ADR_TOOLS'))
	{
		$lang['Adr_admin_tools_cache_settings']='Cache management';
		$lang['Adr_admin_tools_cache_settings_explain']='Resync the cache if you see some gaps between your settings and the mod';
		$lang['Adr_admin_tools_update_cache']='Resync the cache';
		$lang['Adr_admin_tools_cache_updated']='Cache updated successfully';
		$lang['Adr_admin_tools_convertors_settings']='Convertors';
		$lang['Adr_admin_tools_convertors_settings_explain']='Using this form, you can convert the database entries of other RPG mods for use in ADR';
		$lang['Adr_admin_tools_convertors_update']='Update';
		$lang['Adr_admin_tools_convertors_update_items']='Convert the items of the SHOP mod by Zarath';
		$lang['Adr_admin_tools_convertors_update_bank']='Convert the accounts of the BANK mod by Zarath';
		$lang['Adr_admin_tools_convertors_delete']='Delete';
		$lang['Adr_admin_tools_convertors_delete_item']='Delete the database entries of the SHOP mod by Zarath';
		$lang['Adr_admin_tools_convertors_delete_vault']='Delete the database entries of the VAULT mod by Dr DLP';
		$lang['Adr_admin_tools_convertors_delete_bank']='Delete the database entries of the BANK mod by Zarath';
		$lang['Adr_admin_tools_convertors_bank_updated']='BANK mod converted successfully';
		$lang['Adr_admin_tools_convertors_bank_deleted']='BANK mod removed successfully';
		$lang['Adr_admin_users_updated']='RPG STATS mod converted successfully';
		$lang['Adr_admin_tools_convertors_update_users']='Convert the characters of the RPG STATS mod by Moogie';
		$lang['Adr_admin_tools_convertors_delete_rpg_stats']='Delete the database entries of the RPG STATS mod by Moogie';
		$lang['Adr_admin_tools_convertors_update_vault']='Convert the accounts of the VAULT mod by Dr DLP';
		$lang['Adr_admin_tools_convertors_vault_deleted']='VAULT mod removed successfully';
		$lang['Adr_admin_tools_convertors_rpg_stats_deleted']='RPG STATS mod removed successfully';
		$lang['Adr_admin_tools_convertors_shop_deleted']='SHOP mod removed successfully';
		$lang['Adr_admin_tools_convertors_vault_updated']='VAULT mod converted successfully';
		$lang['Adr_admin_tools_convertors_shop_updated']='SHOP mod converted successfully';
		$lang['Adr_admin_tools_convertors_jail_updated']='JAIL mod converted successfully';
		$lang['Adr_admin_tools_convertors_update_jail']='Convert the characters of the JAIL mod by Dr DLP';
		$lang['Adr_admin_tools_convertors_jail_deleted']='JAIL mod removed successfully';
		$lang['Adr_admin_tools_convertors_delete_jail']='Delete the database entries of the JAIL mod by Dr DLP';
		$lang['Adr_admin_tools_convertors_warnings']='READ CAREFULLY !!.<br /><br /> All the following actions are non-reversable!. Be sure to understand what you are about to do. Make first a backup of your database!.<br /><br />The mod author is not responsible if you make errors while using theses functions.';
		$lang['Adr_admin_tools_resync_items']='Resync items price';
		$lang['Adr_admin_tools_resync_items_explain']='This allows to recalculate the forum\'s shop items price, based upon your settings in the price modifiers.';
		$lang['Adr_admin_tools_resync_items_action']='Resync items price';
		$lang['Adr_admin_tools_items_updated']='Prices successfully recalculated';
		$lang['Adr_admin_tools_armaggedon']='Delete all the shops, items and characters';
		$lang['Adr_admin_tools_armaggedon_explain']='If you click on this button all the shops, items and characters created by your users will be deleted. <br /><b>This cannot be undone!.</b> ';
		$lang['Adr_admin_tools_armaggedon_characters']='Delete all ADR Characters only';
		$lang['Adr_admin_tools_armaggedon_zero_dura']='Clean up Shop Items table of ZERO duration items';
        $lang['Adr_admin_tools_armaggedon_battle_list']='Delete all monster battle text';
		$lang['Adr_admin_tools_armaggedon_optimise']='Optimise Tables';
		$lang['Adr_admin_tools_armaggedon_shops']='Delete all ADR user shops only';
		$lang['Adr_admin_tools_armaggedon_user_items']='Delete all ADR user items only';
		$lang['Adr_admin_tools_armaggedon_shops_items']='Delete all ADR forum shop(s) items only';
		$lang['Adr_admin_tools_armaggedon_done']='Deletion successfully processed';
		$lang['Adr_admin_tools_armaggedon_dura']='Zero duration items deleted database';
		$lang['Adr_admin_tools_armaggedon_shops_yes']='All shop items deleted from database';
		$lang['Adr_admin_tools_armaggedon_shops_done']='Deletion of all forum store items successful.';
		$lang['Adr_admin_tools_user_items']='Deletion of all user items successful.';
	}

	if ( defined ('IN_ADR_USERS'))
	{
		$lang['Adr_admin_character_inventory']='Select a users inventory';
		$lang['Adr_admin_character_delete']='Delete this character - This cannot be reversed afterwards!';
		$lang['Adr_admin_character_edit']='Validate the modifications';
		$lang['Adr_admin_character_charac']='Characteristics';
		$lang['Adr_admin_character_edited']='Character successfully edited';
		$lang['Adr_admin_character_deleted']='Character successfully deleted';
		$lang['Adr_admin_character_lack']='This user does not have a character';
		$lang['Adr_user_admin']='Characters management';
		$lang['Adr_user_admin_explain']='Here you can edit or delete the characters in ADR mod';
		$lang['Adr_user_battle_skills']='Battle & Skill Limits';
		$lang['Adr_user_battle_limit']='Current battles remaining:';
		$lang['Adr_user_skill_limit']='Current skill use remaining:';
		$lang['Adr_user_trading_limit']='Current trading skill uses remaining:';
		$lang['Adr_user_thief_limit']='Current thief skill uses remaining:';
	}

	if ( defined ('IN_ADR_TRACKER'))
	{
		$lang['Adr_tracker_title']='Track ADR Items';
		$lang['Adr_tracker_text']='Here you can view purchases, sales, donations & thefts';
		$lang['Adr_tracker_name']='User:';
		$lang['Adr_tracker_item']='Item:';
		$lang['Adr_tracker_from']='From User:';
		$lang['Adr_tracker_shop']='Shop Name:';
		$lang['Adr_tracker_action']='Action:';
		$lang['Adr_tracker_date']='Date:';
		$lang['Adr_tracker_clear']='Clear List';
	}
}
?>
