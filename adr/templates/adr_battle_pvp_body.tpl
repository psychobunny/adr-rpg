<form method="post" action="{S_PVP_ACTION}">
<br />
<table width="100%" class="forumline" align="center" valign="middle">
	<tr>
		<th align="center" width="100%" valign="middle" colspan="3">
			{NAME}&nbsp;vs&nbsp;{OPPONENT_NAME}
		</th>
	</tr>
	<tr>
		<td class="row2" align="center" width="40%" valign="top">
			<table width="100%">
				<tr>
					<td colspan="3" align="center" valign="top" height="25"><b><span class="gen">{NAME}</span></b></td>
				</tr>
				<tr>
					<td align="center"><span class="gensmall">HP: {HP} / {HP_MAX}</td>
					<td align="center" rowspan="4" colspan="2" height="75%">{AVATAR_IMG}&nbsp;</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_red_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_red_middle.gif" width="{HP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{HP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_red_end.gif" width="6" height="13" /></td>
				</tr>
				<tr>
					<td align="center"><span class="gensmall">MP: {MP} / {MP_MAX}</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_blue_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_blue_middle.gif" width="{MP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{MP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_blue_end.gif" width="6" height="13" /></td>
				</tr>
			</table></td>
		<td class="row1" align="center" width="20%"><img src="./adr/images/misc/vs.gif" /></td>
		<td class="row2" align="center" width="40%" valign="top">
			<table width="100%">
				<tr>
					<td colspan="3" align="center" height="25" valign="top"><b><span class="gen">{OPPONENT_NAME}</span></b></td>
				</tr>
				<tr>
					<td align="center" rowspan="4" colspan="2" height="75%">{OPPONENT_IMG}</td>
					<td align="center"><span class="gensmall">HP: {OPPONENT_HP} / {OPPONENT_HP_MAX}</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_red_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_red_middle.gif" width="{OPPONENT_HP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{OPPONENT_HP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_red_end.gif" width="6" height="13" /></td>
				</tr>
				<tr>
					<td align="center"><span class="gensmall">MP: {OPPONENT_MP} / {OPPONENT_MP_MAX}</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_blue_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_blue_middle.gif" width="{OPPONENT_MP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{OPPONENT_MP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_blue_end.gif" width="6" height="13" /></td>
				</tr>
			</table></td>
	</tr>
	<tr>
		<td class="row1" width ="40%">
		<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" class="forumline">
			<th width="100%" valign="top" colspan="2" style="border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1" bordercolor="#C0C0C0">
				{L_ATTRIBUTES}:
			</th>
              <tr>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_PHY_ATT}:</b>&nbsp;{ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_PHY_DEF}:</b>&nbsp;{DEF}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_ATT}:</b>&nbsp;{M_ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_DEF}:</b>&nbsp;{M_DEF}</span><br />
			</td>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_ALIGNMENT}:</b>&nbsp;{ALIGNMENT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_ELEMENT}:</b>&nbsp;{ELEMENT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_CLASS}:</b>&nbsp;{CHALLENGER_CLASS}</span><br />
			</td>
              </tr>
            </table>
        </td>
		<td class="row1" align="center"><span class="gen"><a href="{S_PVP_ACTION}">{L_BATTLE_REFRESH}</a></span></td>
		<td class="row1" width ="40%">
			<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2" class="forumline">
			<th width="100%" valign="top" colspan="2" style="border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1" bordercolor="#C0C0C0">
				{L_ATTRIBUTES}:
			</th>
              <tr>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_PHY_ATT}:</b>&nbsp;{OPPONENT_ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_PHY_DEF}:</b>&nbsp;{OPPONENT_DEF}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_ATT}:</b>&nbsp;{OPPONENT_M_ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_DEF}:</b>&nbsp;{OPPONENT_M_DEF}</span><br />
			</td>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_ALIGNMENT}:</b>&nbsp;{OPPONENT_ALIGNMENT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_ELEMENT}:</b>&nbsp;{OPPONENT_ELEMENT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_CLASS}:</b>&nbsp;{OPPONENT_CLASS}</span><br />
			</td>
              </tr>
              </table>
        </td>
	</tr>
	<tr>
		<td class="row1" align="center" colspan="3">
			<span class="gen">
				{BATTLE_ACTION}
			</span>
		</td>
	</tr>
</table>
<br clear="all" />

<!-- BEGIN pvp -->
<table cellspacing="0" cellpadding="3" border="1" align="center" class="forumline" width="80%">
	</tr>
		<th align="center" colspan="2" >{L_ACTIONS}</th>
	</tr>
	</tr>
		<td align="right" class="row2" width="50%" >{ATTACK}&nbsp;&nbsp;&nbsp;</td>
		<td align="left" class="row2" width="50%" >&nbsp;&nbsp;&nbsp;<input type="submit" style="width: 125" value="{L_ATTACK}" name="attack" class="mainoption" /></td>
	</tr>
	</tr>
		<td align="right" class="row1" width="50%" >{SPELL}&nbsp;&nbsp;&nbsp;</td>
		<td align="left" class="row1" width="50%" >&nbsp;&nbsp;&nbsp;<input type="submit" style="width: 125" value="{L_SPELL}" name="spell" class="mainoption" /></td>
	</tr>
	</tr>
		<td align="right" class="row2" width="50%" >{POTION}&nbsp;&nbsp;&nbsp;</td>
		<td align="left" class="row2" width="50%" >&nbsp;&nbsp;&nbsp;<input type="submit" style="width: 125" value="{L_POTION}" name="potion" class="mainoption" /></td>
	</tr>
	</tr>
		<td align="center" class="row2" width="100%" colspan="2" ><input type="submit" style="width: 125" value="{L_FLEE}" name="flee" class="mainoption" /></td>
	</tr>

</table>
<!-- END pvp -->
<br clear="all" />

<table width="80%" class="forumline" align="center">
	<tr>
		<th align="center" width="100%" valign="middle">
			{L_COMMS}
		</th>
	</tr>
	<tr>
		<td align="center" class="row1" valign="top" width="100%">
			<span class="genmed">{L_TYPE_HERE}:&nbsp;
				<input type="text" value="" name="custom_taunt" length="80"><br><br>
				{TAUNT_LIST}
				<input type="submit" value="Chat" class="mainoption"><br>
			</span>
		</td>
	</tr>
	<tr>
		<td align="center" class="row1" valign="top" width="100%">
			<iframe width="100%" height="150" left="0" frameborder="0" src={S_CHATBOX} class="row1"></iframe>
		</td>
	</tr>
</table>
</form>

