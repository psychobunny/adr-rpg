 
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
  </tr>
</table>

<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
  <tr> 
	<th class="thHead" colspan="2" height="25" nowrap="nowrap">{L_VIEWING_PROFILE}</th>
  </tr>
  <tr> 
	<td class="catLeft" width="40%" height="28" align="center"><b><span class="gen">{L_AVATAR}</span></b></td>
	<td class="catRight" width="60%"><b><span class="gen">{L_ABOUT_USER}</span></b></td>
  </tr>
  <tr> 
	<td class="row1" height="6" valign="top" align="center">{AVATAR_IMG}<br /><span class="postdetails">{POSTER_RANK}</span></td>
	<td class="row1" rowspan="3" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="3">
		<tr> 
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">{L_JOINED}:&nbsp;</span></td>
		  <td width="100%"><b><span class="gen">{JOINED}</span></b></td>
		</tr>
		<tr> 
		  <td valign="top" align="right" nowrap="nowrap"><span class="gen">{L_TOTAL_POSTS}:&nbsp;</span></td>
		  <td valign="top"><b><span class="gen">{POSTS}</span></b><br /><span class="genmed">[{POST_PERCENT_STATS} / {POST_DAY_STATS}]</span> <br /><span class="genmed"><a href="{U_SEARCH_USER}" class="genmed">{L_SEARCH_USER_POSTS}</a></span></td>
		</tr>
		<tr> 
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">{L_LOCATION}:&nbsp;</span></td>
		  <td><b><span class="gen">{LOCATION}</span></b></td>
		</tr>
		<tr> 
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">{L_WEBSITE}:&nbsp;</span></td>
		  <td><span class="gen"><b>{WWW}</b></span></td>
		</tr>
		<tr> 
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">{L_OCCUPATION}:&nbsp;</span></td>
		  <td><b><span class="gen">{OCCUPATION}</span></b></td>
		</tr>
		<tr> 
		  <td valign="top" align="right" nowrap="nowrap"><span class="gen">{L_INTERESTS}:</span></td>
		  <td> <b><span class="gen">{INTERESTS}</span></b></td>
		</tr>
		<tr>
		  <td valign="top" align="right" nowrap="nowrap"><span class="gen">{L_POINTS}:</span></td>
		  <td><b><span class="gen">{POINTS}</span></b><span class="genmed">{DONATE_POINTS}</span></td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr> 
	<td class="catLeft" align="center" height="28"><b><span class="gen">{L_CONTACT} {USERNAME} </span></b></td>
  </tr>
  <tr> 
	<td class="row1" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="3">
		<tr> 
		  <td valign="middle" align="right" nowrap="nowrap"><span class="gen">{L_EMAIL_ADDRESS}:</span></td>
		  <td class="row1" valign="middle" width="100%"><b><span class="gen">{EMAIL_IMG}</span></b></td>
		</tr>
		<tr> 
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">{L_PM}:</span></td>
		  <td class="row1" valign="middle"><b><span class="gen">{PM_IMG}</span></b></td>
		</tr>
		<tr> 
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">{L_MESSENGER}:</span></td>
		  <td class="row1" valign="middle"><span class="gen">{MSN}</span></td>
		</tr>
		<tr> 
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">{L_YAHOO}:</span></td>
		  <td class="row1" valign="middle"><span class="gen">{YIM_IMG}</span></td>
		</tr>
		<tr> 
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">{L_AIM}:</span></td>
		  <td class="row1" valign="middle"><span class="gen">{AIM_IMG}</span></td>
		</tr>
		<tr> 
		  <td valign="middle" nowrap="nowrap" align="right"><span class="gen">{L_ICQ_NUMBER}:</span></td>
		  <td class="row1"><script language="JavaScript" type="text/javascript"><!-- 

		if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 && navigator.userAgent.indexOf('6.') == -1 )
			document.write(' {ICQ_IMG}');
		else
			document.write('<table cellspacing="0" cellpadding="0" border="0"><tr><td nowrap="nowrap"><div style="position:relative;height:18px"><div style="position:absolute">{ICQ_IMG}</div><div style="position:absolute;left:3px;top:-1px">{ICQ_STATUS_IMG}</div></div></td></tr></table>');
		  
		  //--></script><noscript>{ICQ_IMG}</noscript></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<!-- BEGIN adr_profile_none -->
<br class="gensmall" />
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0" align="center">
  <tr>
	<th class="thHead" colspan="2" height="15" nowrap="nowrap">{L_NO_CHARACTER}</th>
  </tr>
</table>
<!-- END adr_profile_none -->
<!-- BEGIN adr_profile -->
<br class="gensmall" />
<table cellspacing="0" cellpadding="1" border="1" align="center" class="forumline" width="100%">
	<tr>
		<th align="center" width="100%" colspan="3" >{L_CHARACTER_OF}</th>
	</tr>
	<tr>
		<td class="row1" align="center" valign="top" width="20%">
			<br>
			<table cellspacing="2" cellpadding="0" border="2" align="center" width="100%">
				<tr>
					<th class="row1" align="center" width="60%" colspan="2"><b>{NAME}</b>
					<br><span class="gensmall"><b>{L_LEVEL}:&nbsp;{LEVEL}</b></span></th>
				</tr>
				<tr>
					<td class="row1" align="left"><span class="gen">&nbsp;&nbsp;&nbsp;{L_CLASS}:</td>
					<td class="row2" align="center"><span class="gensmall"><img src="adr/images/classes/{CLASS_IMG}" alt="{CLASS}"><br />{CLASS}</span></td>
				</tr>
				<tr>
					<td class="row1" align="left"><span class="gen">&nbsp;&nbsp;&nbsp;{L_RACE}:</td>
					<td class="row2" align="center"><span class="gensmall"><img src="adr/images/races/{RACE_IMG}" alt="{RACE}"><br />{RACE}</span></td>
				</tr>
				<tr>
					<td class="row1" align="left"><span class="gen">&nbsp;&nbsp;&nbsp;{L_ELEMENT}:</td>
					<td class="row2" align="center"><span class="gensmall"><img src="adr/images/elements/{ELEMENT_IMG}" alt="{ELEMENT}"><br />{ELEMENT}</span></td>
				</tr>
				<tr>
					<td class="row1" align="left"><span class="gen">&nbsp;&nbsp;&nbsp;{L_ALIGNMENT}:</td>
					<td class="row2" align="center"><span class="gensmall"><img src="adr/images/alignments/{ALIGNMENT_IMG}" alt="{ALIGNMENT}"><br />{ALIGNMENT}</span></td>
				</tr>
			</table>
			<br>
			<table cellspacing="2" cellpadding="1" border="1" align="center" width="100%">
                <tr>
                    <th align="center" class="row2" width="5%" colspan="3">{L_POINTS_INFOS_TITLE}</td>
                </tr>
                <tr>
                    <td align="center" class="row1" width="5%"><img src="adr/images/misc/au.gif" alt="{L_POINTS}"></td>
                    <td align="center" class="row1" width="65%"><span class="gensmall">{L_POINTS}</span></td>
                    <td align="center" class="row1" width="30%" colspan="2"><span class="gensmall">{POINTS}</span></td>
                </tr>
			</table>
			<br>
			<table cellspacing="2" cellpadding="1" border="1" align="center" width="100%">
				<tr>
					<th align="center" colspan="2">{L_ITEMS}</th>
				</tr>
				<tr>
					<td class="row1" align="center" colspan="2" ><span class="gensmall"><a href="{INVENTORY_LINK}" alt="{L_SEE_INVENTORY}" target="_blank">{L_COUNT_ITEMS_INVENTORY}</a>: {ITEMS_INVENTORY}</span></td>
				</tr>
				<tr>
					<td class="row1" align="center" colspan="2" ><span class="gensmall">{L_COUNT_ITEMS_WAREHOUSE}: {ITEMS_WAREHOUSE}</span></td>
				</tr>
				<!-- BEGIN shop -->
				<tr>
					<td class="row1" align="center" colspan="2" ><span class="gensmall"><a href="{SHOP_LINK}" target="_blank">{L_COUNT_ITEMS_SHOPS}</a>: {ITEMS_SHOP}</span></td>
				</tr>
				<!-- END shop -->
				<tr>
					<td class="row2" align="center" colspan="2"><span class="gensmall">{L_COUNT_ITEMS}: {ITEMS_OWNED}</span></td>
				</tr>
			</table>
		</span></td>
		<td class="row1" align="center" valign="top" width="60%">
			<br>
			<table cellspacing="1" cellpadding="2" border="1" align="center" class="forumline" width="100%">
				<tr>
					<th align="center" colspan="2" width="100%">{L_BATTLE_STATISTICS}</th>
				</tr>
				<tr>
					<td align="center" class="row1" width="50%"><span class="gensmall">{L_BATTLE_VICTORIES}</span></td>
					<td align="center" class="row2" width="25%"><span class="gensmall">{BATTLE_VICTORIES}</span></td>
				</tr>
				<tr>
					<td align="center" class="row1" width="50%"><span class="gensmall">{L_BATTLE_DEFEATS}</span></td>
					<td align="center" class="row2" width="25%"><span class="gensmall">{BATTLE_DEFEATS}</span></td>
				</tr>
				<tr>
					<td align="center" class="row1" width="50%"><span class="gensmall">{L_BATTLE_FLEES}</span></td>
					<td align="center" class="row2" width="25%"><span class="gensmall">{BATTLE_FLEES}</span></td>
				</tr>
				<tr>
					<td align="center" class="catBottom" colspan="3">&nbsp;</td>
				</tr>
			</table>
			<br>
			<table cellspacing="1" cellpadding="2" border="1" align="center" class="forumline" width="100%">
				<tr>
					<th align="center" colspan="3">{L_SKILLS}</th>
				</tr>
				<tr>
					<td class="row2" align="center"><span class="gensmall"><b>{L_IMG}</b></span></td>
					<td class="row2" align="center"><span class="gensmall"><b>{L_DESC}</b></span></td>
					<td class="row2" align="center"><span class="gensmall"><b>{L_LEVEL}</b></span></td>
				</tr>
				<tr>
					<td class="row1" align="center"><img src="adr/images/skills/{MINING_IMG}" alt="{L_MINING}"></td>
					<td class="row1" align="center"><span class="gensmall">{L_MINING_DESC}</span></td>
					<td class="row1" align="center"><span class="gensmall">{MINING}</span></td>
				</tr>
				<tr>
					<td class="row2" align="center"><img src="adr/images/skills/{STONE_IMG}" alt="{L_STONE}"></td>
					<td class="row2" align="center"><span class="gensmall">{L_STONE_DESC}</span></td>
					<td class="row2" align="center"><span class="gensmall">{STONE}</span></td>
				</tr>
				<tr>
					<td class="row1" align="center"><img src="adr/images/skills/{FORGE_IMG}" alt="{L_FORGE}"></td>
					<td class="row1" align="center"><span class="gensmall">{L_FORGE_DESC}</span></td>
					<td class="row1" align="center"><span class="gensmall">{FORGE}</span></td>
				</tr>
				<tr>
					<td class="row2" align="center"><img src="adr/images/skills/{ENCHANTMENT_IMG}" alt="{L_ENCHANTMENT}"></td>
					<td class="row2" align="center"><span class="gensmall">{L_ENCHANTMENT_DESC}</span></td>
					<td class="row2" align="center"><span class="gensmall">{ENCHANTMENT}</span></td>
				</tr>
				<tr>
					<td class="row1" align="center"><img src="adr/images/skills/{THIEF_IMG}" alt="{L_THIEF}"></td>
					<td class="row1" align="center"><span class="gensmall">{L_THIEF_DESC}</span></td>
					<td class="row1" align="center"><span class="gensmall">{THIEF}</span></td>
				</tr>
				<tr>
					<td align="center" class="catBottom" colspan="3">&nbsp;</td>
				</tr>
			</table>
		</td>
		</span>
		</td>
		<td class="row1" align="center" valign="top" width="20%">
			<br>
			<table cellspacing="2" cellpadding="1" border="1" align="center" valign="top" width="100%">
                <tr>
                    <th align="center">{L_VITAL_STATS}</td>
                </tr>
				<tr>
					<td align="center" class="row2">
						<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
						<tr>
							<td align="left"><span class="gensmall">&nbsp;&nbsp;{L_HEALTH}: {HP}/{HP_MAX}</td>
						</tr>
						<tr>
							<td align="left">&nbsp;<img src="adr/images/misc/bar_red_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_red_middle.gif" width="{HP_PERCENT_WIDTH}" height="13" border="0" /><img src="adr/images/misc/bar_emp.gif" width="{HP_PERCENT_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_red_end.gif" width="6" height="13" /></td>
						</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" class="row2">
						<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
						<tr>
							<td align="left"><span class="gensmall">&nbsp;&nbsp;{L_MAGIC}: {MP}/{MP_MAX}</td>
						</tr>
						<tr>
							<td align="left">&nbsp;<img src="adr/images/misc/bar_blue_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_blue_middle.gif" width="{MP_PERCENT_WIDTH}" height="13" border="0" /><img src="adr/images/misc/bar_emp.gif" width="{MP_PERCENT_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_blue_end.gif" width="6" height="13" /></td>
						</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" class="row2">
						<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
						<tr>
							<td align="left"><span class="gensmall">&nbsp;&nbsp;{L_WEIGHT}: {WEIGHT}/{WEIGHT_MAX}</td>
						</tr>
						<tr>
							<td align="left">&nbsp;<img src="adr/images/misc/bar_orange_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_orange_middle.gif" width="{WEIGHT_PERCENT_WIDTH}" height="13" border="0" /><img src="adr/images/misc/bar_emp.gif" width="{WEIGHT_PERCENT_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_orange_end.gif" width="6" height="13" /></td>
						</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td align="center" class="row2">
						<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
						<tr>
							<td align="left"><span class="gensmall">&nbsp;&nbsp;{L_EXPERIENCE}: {EXP}/{EXP_MAX}</td>
						</tr>
						<tr>
							<td align="left">&nbsp;<img src="adr/images/misc/bar_green_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_green_middle.gif" width="{EXP_PERCENT_WIDTH}" height="13" border="0" /><img src="adr/images/misc/bar_emp.gif" width="{EXP_PERCENT_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_green_end.gif" width="6" height="13" /></td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
			<br>
			<table cellspacing="2" cellpadding="1" border="1" align="center" width="100%">
                <tr>
                    <th align="center" class="row2" width="5%" colspan="3">{L_CHAR_INFOS}</td>
                </tr>
                <tr>
                    <td align="center" class="row2" width="5%"><img src="adr/images/misc/ac.gif" alt="{L_AC}"></td>
                    <td align="center" class="row2" width="65%"><span class="gensmall">{L_AC}</span></td>
                    <td align="center" class="row2" width="30%"><span class="gensmall">{AC}</span></td>
                </tr>
                <tr>
                    <td align="center" class="row2" width="5%"><img src="adr/images/misc/str.gif" alt="{L_POWER}"></td>
                    <td align="center" class="row2" width="65%"><span class="gensmall">{L_POWER}</span></td>
                    <td align="center" class="row2" width="30%"><span class="gensmall">{POWER}</span></td>
                </tr>
                <tr>
                    <td align="center" class="row2" width="5%"><img src="adr/images/misc/dex.gif" alt="{L_AGILITY}"></td>
                    <td align="center" class="row2" width="65%"><span class="gensmall">{L_AGILITY}</span></td>
                    <td align="center" class="row2" width="30%"><span class="gensmall">{AGILITY}</span></td>
                </tr>
                <tr>
                    <td align="center" class="row2" width="5%"><img src="adr/images/misc/int.gif" alt="{L_INT}"></td>
                    <td align="center" class="row2" width="65%"><span class="gensmall">{L_INT}</span></td>
                    <td align="center" class="row2" width="30%"><span class="gensmall">{INT}</span></td>
                </tr>
                <tr>
                    <td align="center" class="row2" width="5%"><img src="adr/images/misc/look.gif" alt="{L_WIS}"></td>
                    <td align="center" class="row2" width="65%"><span class="gensmall">{L_WIS}</span></td>
                    <td align="center" class="row2" width="30%"><span class="gensmall">{WIS}</span></td>
                </tr>
                <tr>
                    <td align="center" class="row2" width="5%"><img src="adr/images/misc/cha.gif" alt="{L_CHA}"></td>
                    <td align="center" class="row2" width="65%"><span class="gensmall">{L_CHA}</span></td>
                    <td align="center" class="row2" width="30%"><span class="gensmall">{CHA}</span></td>
                </tr>
                <tr>
                    <td align="center" class="row2" width="5%"><img src="adr/images/misc/const.gif" alt="{L_CONSTIT}"></td>
                    <td align="center" class="row2" width="65%"><span class="gensmall">{L_CONSTIT}</span></td>
                    <td align="center" class="row2" width="30%"><span class="gensmall">{CONSTIT}</span></td>
                </tr>
			</table>
		</td>
	</tr>
</table>
<!-- END adr_profile -->


<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
	<td align="right"><span class="nav"><br />{JUMPBOX}</span></td>
  </tr>
</table>
