<?php
/***************************************************************************
 *                               mod_install.php
 *                            -------------------
 *   begin                : Sunday, April 14, 2002
 *   copyright            : (C) 2002 Bulletin Board Mods
 *   email                : robbie@robbieshields.net
 *
 *   $Id: mod_install.php,v 1.0.1 2003/12/08 17:13:00 Robbie Shields Exp $
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
 
function _sql($sql, &$errored, &$error_ary, $echo_dot = true)
{
	global $db;

	if (!($result = $db->sql_query($sql)))
	{  
		$errored = true;
		$error_ary['sql'][] = (is_array($sql)) ? $sql[$i] : $sql;
		$error_ary['error_code'][] = $db->sql_error();
	}

	if ($echo_dot)
	{
		echo '.';
		flush();
	}

	return $result;
}

define('IN_PHPBB', 1);
$phpbb_root_path = './';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'config.'.$phpEx);
include($phpbb_root_path . 'includes/constants.'.$phpEx);
include($phpbb_root_path . 'includes/db.'.$phpEx);
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
//
// End session management
//

if (!$userdata['session_logged_in'])
{
	header('Location: ' . append_sid("login.$phpEx?redirect=mod_install.$phpEx", true));
}

if ($userdata['user_level'] != ADMIN)
{
	message_die(GENERAL_MESSAGE, $lang['Not_Authorised']);
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Mod Installation</title>
<meta http-equiv="Content-Type" content="text/html;">
<meta http-equiv="Content-Style-Type" content="text/css">
<style type="text/css">
<!--

font,th,td,p,body { font-family: "Courier New", courier; font-size: 11pt }

a:link,a:active,a:visited { color : #006699; }
a:hover		{ text-decoration: underline; color : #DD6900;}

hr	{ height: 0px; border: solid #D1D7DC 0px; border-top-width: 1px;}

.maintitle,h1,h2	{font-weight: bold; font-size: 22px; font-family: "Trebuchet MS",Verdana, Arial, Helvetica, sans-serif; text-decoration: none; line-height : 120%; color : #000000;}

.ok	{color:green}

/* Import the fancy styles for IE only (NS4.x doesn't use the @import function) */
@import	url("templates/subSilver/formIE.css"); 
-->
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#006699" vlink="#5584AA">

<table width="100%" border="0" cellspacing="0" cellpadding="10" align="center"> 
	<tr>
		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><img src="templates/subSilver/images/logo_phpBB.gif" border="0" alt="Forum Home" vspace="1" /></td>
				<td align="center" width="100%" valign="middle"><span class="maintitle">Mod Installation</span></td>
			</tr>
		</table></td>
	</tr>
</table>

<br	clear="all" />

<h2>Information</h2>

<?php

echo '<p>Database type &nbsp; &nbsp;:: <b>' . SQL_LAYER . '</b><br />' . "\n";

$sql = "SELECT config_value  
	FROM " . CONFIG_TABLE . " 
	WHERE config_name = 'version'";
if (!($result = $db->sql_query($sql)))
{
	die("Couldn't obtain version info");
}

$row = $db->sql_fetchrow($result);

$sql = array();

echo 'phpBB version &nbsp; &nbsp;:: <b>2' . $row['config_value'] . '</b></p>' . "\n";

$sql[] = "ALTER TABLE " . FORUMS_TABLE . " ADD points_disabled TINYINT(1) NOT NULL AFTER prune_enable";
$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_notify_donation TINYINT(1) NOT NULL AFTER user_notify_pm";
$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD user_points INT NOT NULL";
$sql[] = "ALTER TABLE " . USERS_TABLE . " ADD admin_allow_points TINYINT(1) DEFAULT '1' NOT NULL";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_reply', '1')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_topic', '2')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_page', '1')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_post', '1')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES('points_browse', '1')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_donate', '1')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_name', 'Points')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_user_group_auth_ids', '')";
$sql[] = "INSERT INTO " . CONFIG_TABLE . " VALUES ('points_system_version', '2.1.1')";

echo '<h2>Updating database schema & data</h2>' . "\n";
echo '<p>Progress :: <b>';
flush();

$error_ary = array();
$errored = false;
if (count($sql))
{
	for($i = 0; $i < count($sql); $i++)
	{
		_sql($sql[$i], $errored, $error_ary);
	}

	echo '</b> <b class="ok">Done</b><br />Result &nbsp; :: ' . "\n";

	if ($errored)
	{
		echo '<b>Some queries failed, the statements and errors are listing below</b>' . "\n";
		echo '<ul>';

		for($i = 0; $i < count($error_ary['sql']); $i++)
		{
			echo '<li>Error :: <b>' . $error_ary['error_code'][$i]['message'] . '</b><br />';
			echo 'SQL &nbsp; :: <b>' . $error_ary['sql'][$i] . '</b><br /><br /></li>';
		}

		echo '</ul>' . "\n";
		echo '<p>Contact me so I can fix the errors.</p>' . "\n";
		exit();
	}
	else
	{
		echo '<b>No errors</b>' . "\n";
	}
}

echo '<h2>Install completed</h2>' . "\n";
echo 'You can now delete this file. To undo any changes run the mod_uninstall.php file.';
?>

<br	clear="all" />

</body>
</html>