<?php
/***************************************************************************
 *                          	  lang_adr_faq.php
 *                            -------------------
 *   begin			: Wednesday Oct 13, 2004
 *   copyright		: Seteo-Bloke
 *   notes			: Based upon the phpBB faq file
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

  
$faq[] = array("--","General RPG Guide");
$faq[] = array("How do I make money to purchase items from the stores?", "You can make money from posting in the forum and also by defeat monsters & other players in battle. How much you gain is down to forum administrator choice");
$faq[] = array("What are Spirit Points (SP) & how do I use them?", "SP is very much like the currency used for purchasing items from the stores. The difference is you can only gain SP from defeating monsters & spend it on characteristic upgrades on your character. This method is non-cheatable");
$faq[] = array("What are Faction Points (FP) & how do I use them?", "FP works in the same way as SP but are only gainable from PvP battles instead. They can be used to purchase special items from the forum stores. This feature is not fully implemented in this version of ADR so you will not be able to gain any until the next release.");

$faq[] = array("--","Character Sheet Guide");
$faq[] = array("What is the special time zone used for?", "In future versions of the RPG mod this will serve more of a purpose for things such as shop open & close times. This special time zone works at 4x the speed of normal time to accommodate people in different time zones around the globe");
$faq[] = array("What is my Character Age used for?", "This is simply to show how long your character has been created for. This is worked out against the special RPG time zone as described above");
$faq[] = array("What is the Health Points (HP) bar used for?", "This is the current amount of health you have left for battle. To replenish it you will need to either buy some health potions from the shop or visit the temple for healing");
$faq[] = array("What is the Mana/Mind Points (MP) bar used for?", "This is the current amount of mana or mind points you have left for battle. To replenish it you will need to either buy some mana potions from the shop or visit the temple for healing. This is required for casting spells in battle");
$faq[] = array("What is the Weight bar used for?", "This is the cumulative weight of all the items you currently have in your inventory. You can reduce this by placing items in the Warehouse");
$faq[] = array("What is the Experience bar used for?", "You can gain experience from battling in the monster and PvP arena. Once you reach maximum Experience points you will be asked to levelup. If you do not then you will not be able to battle until you have done so");
$faq[] = array("What are Battle & Skills Quota's used for?", "These are the maximum uses of skills & battles you can have per day. Once you've used up your quota you will have to wait until your replenish period comes around to top up your quota values again.");

$faq[] = array("--","Personal Characteristic Uses");
$faq[] = array("Armour Class", "This stat is used to calculate your defence stat when beginning a new battle.");
$faq[] = array("Strength", "This is used as part of your battle attack calculation.");
$faq[] = array("Dexterity", "This is used as part of your battle attack calculation.");
$faq[] = array("Constitution", "This is used as part of your battle defence calculation.");
$faq[] = array("Intelligence", "This is used as part of your magic attack calculation.");
$faq[] = array("Wisdom", "This is used part of your magic defence calculation.");
$faq[] = array("Charm", "This is used to help determine buying and selling prices for items.");

$faq[] = array("--","Monster Battle Guide");
$faq[] = array("Where & how do I battle monsters?", "To battle in the monsters arena you need to go to the 'Town Place' & go to 'Battle'.");
$faq[] = array("I'm receiving an error about excess Weight when trying to battle!", "You are over-weight! You need to shed some weight by either selling some items in your inventory or placing some items into your Warehouse. You can gain additional weight upon each level up. Different races gain different amounts");
$faq[] = array("How can I equip my weapon & armour prior to battle?", "You can do this by going into your Character Sheet & choosing the 'Equipment' option. Whatever you select here will always be the default on the equip screen prior to monster & PvP battles");
$faq[] = array("I can't equip weapons or armour I recently bought from a store!", "This will be because the administrator has enabled a limit on all items used in battle. This means you can only equip items with power equal to or less than your current character level");
$faq[] = array("How is my attack & defense stats calculated during battle?", "Attack stats are calculated by (( Power + Endurance ) x 2) & Defense stats are calculated by ( Agility + Willpower + Armour Class )");
$faq[] = array("What do Amulets work during battle?", "Amulets replenish MP per turn. The amount it replenishes per turn depends on the items power & will only show a replenish message if you have less than max MP.");
$faq[] = array("What do Rings work during battle?", "Rings replenish HP per turn. The amount it replenishes per turn depends on the items power & will only show a replenish message if you have less than max HP");
$faq[] = array("A monster has stolen an item from my inventory! How can I get it back?", "Monsters have an ability to steal items & money from your inventory during battle. You can recover any items stolen by defeating the monster but if you lose then you will lose the item forever. Money stolen is non-recoverable");
$faq[] = array("How can I prevent a monster stealing my items & money during a battle?", "Store your unneeded items in the Warehouse & bank your money in the Vault");
$faq[] = array("Why do I constantly miss a monster when attacking during a battle?", "If you attack stat is less than the monsters attack stat then you will more likely miss than hit. The bigger the difference the likely to miss");
$faq[] = array("My weapon/Armour has gone missing during battle & the monster did not steal it!", "Always watch your items durability! If it drops down to zero then the item will break and will no longer be usable nor repairable!");
$faq[] = array("I'm low on health/mana after battle. How can I replenish them?", "Either buy potions in the stores or go to the Temple in the 'Town Place' & choose 'Healing Light' from the Temple");
$faq[] = array("I died in battle. How do I get revived?", "You will need to go to the 'Town Place' and get resurrected via the Temple");

$faq[] = array("--","Player vs. Player (PvP) Battle Guide");
$faq[] = array("I'm receiving an error about excess Weight when trying to battle!", "You are over-weight! You need to shed some weight by either selling some items in your inventory or placing some items into your Warehouse. You can gain additional weight upon each level up. Different races gain different amounts");
$faq[] = array("I just started a PvP battle and my HP/MP are not full. Why?", "Before a PvP match begins always make sure to first visit the temple to replenish your HP and MP!");
$faq[] = array("I can't equip weapons or armour I recently bought from a store!", "This will be because the administrator has enabled a limit on all items used in battle. This means you can only equip items with power equal to or less than your current character level");
$faq[] = array("Why do PvP battles take so long to finish?", "PvP battles are dependant on both users being online at the same time. If one is not then you will need to wait until they come online and end their turn");
$faq[] = array("Will I gain experience and money from winning a PvP battle?", "Yes, but the amount depends on the level difference between yourself and your opponent. The lower you are when you win the more you will gain from victory");
$faq[] = array("I'm low on health/mana after battle. How can I replenish them?", "Either buy potions in the stores or go to the Temple in the 'Town Place' & choose 'Healing Light' from the Temple");
$faq[] = array("I died during a PvP battle but I don't appear to be dead according to my Character Sheet. Why?", "PvP battles work differently to monster battles with regards your current HP and MP values. When a PvP battle begins your HP & MP at that moment are placed into the database and then any damage you are dealt only affects the HP/MP for that specific PvP battle unlike monster battles which directly affect your current HP/MP values in your Character Sheet. This is because you can fight multiple PvP battles simultanously and it would make things unfair if you were to die in one battle while dying across all your other battles at the same time.");

$faq[] = array("--","Skills Guide");
$faq[] = array("What are the benefits of training skills?", "Via the 'Town Place' you can train any of the 4 skills on offer and 2 more skills can be trained elsewhere. Training skills means you gain more money or enhance items beyond their standard power");
$faq[] = array("What is the Mining skill?", "You can use the forge to mine for raw materials. These can be improved with the Stone Cutting skill to increase value and to then sell on in the stores");
$faq[] = array("What is the Stone Cutting skill?", "You can improve raw materials, thus increasing the value when being sold to the forums stores");
$faq[] = array("What is the Forge skill?", "Here you can repair low durability weapons & recharge spells. The higher the skill the better repair per successful use");
$faq[] = array("What is the Enchanting skill?", "This allows you to improve the power of a weapon by combining it with a powerful spell");
$faq[] = array("What is the Thief skill?", "If you chose this path be prepared for fines and/or Jail sentances when you fail!");

?>
