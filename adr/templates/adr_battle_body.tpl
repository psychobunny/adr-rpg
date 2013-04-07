<form method="post" action="{S_CHARACTER_ACTION}">

<table width="100%" class="forumline" align="center" valign="middle">
	<tr>
		<th align="center" width="100%" valign="middle" colspan="3">
			{NAME}&nbsp;vs&nbsp;{MONSTER_NAME}
		</th>
	</tr>
	<tr>
		<td class="row2" align="center" width="40%" valign="top">
			<table width="100%">
				<tr>
					<td colspan="3" align="center" valign="top" height="25"><b><span class="gen">{NAME}</span></b></td>
				</tr>
				<tr>
					<td align="center"><span class="gensmall">{L_HP} {HP} / {HP_MAX}</td>
					<td align="center" rowspan="4" colspan="2" height="75%">{AVATAR_IMG}&nbsp;</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_red_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_red_middle.gif" width="{HP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{HP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_red_end.gif" width="6" height="13" /></td>
				</tr>
				<tr>
					<td align="center"><span class="gensmall">{L_MP} {MP} / {MP_MAX}</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_blue_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_blue_middle.gif" width="{MP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{MP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_blue_end.gif" width="6" height="13" /></td>
				</tr>
			</table></td>
		<td class="row1" align="center" width="20%"><img src="./adr/images/misc/vs.gif" /></td>
		<td class="row2" align="center" width="40%" valign="top">
			<table width="100%">
				<tr>
					<td colspan="3" align="center" height="25" valign="top"><b><span class="gen">{MONSTER_NAME}</span></b></td>
				</tr>
				<tr>
					<td align="center" rowspan="4" colspan="2" height="75%"><img src="./adr/images/monsters/{MONSTER_IMG}" /></td>
					<td align="center"><span class="gensmall">{L_HP} {MONSTER_HP} / {MONSTER_HP_MAX}</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_red_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_red_middle.gif" width="{MONSTER_HP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{MONSTER_HP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_red_end.gif" width="6" height="13" /></td>
				</tr>
				<tr>
					<td align="center"><span class="gensmall">{L_MP} {MONSTER_MP} / {MONSTER_MP_MAX}</td>
				</tr>
				<tr>
					<td align="center"><img src="adr/images/misc/bar_blue_begin.gif" width="6" height="13" /><img src="adr/images/misc/bar_blue_middle.gif" width="{MONSTER_MP_WIDTH}" height="13" /><img src="adr/images/misc/bar_emp.gif" width="{MONSTER_MP_EMPTY}" height="13" border="0" /><img src="adr/images/misc/bar_blue_end.gif" width="6" height="13" /></td>
				</tr>
			</table></td>
	</tr>
	<tr>
		<td class="row1" width ="40%">
		<table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" class="forumline">
			<th width="100%" valign="top" colspan="2" style="border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1" bordercolor="#C0C0C0">
				{L_ATTRIBUTES}:
			</th>
              <tr>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_PHY_ATT}:</b> {ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_PHY_DEF}:</b> {DEF}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_ATT}:</b> {M_ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_DEF}:</b> {M_DEF}</span><br />
			</td>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_ALIGNMENT}:</b> {ALIGNMENT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_ELEMENT}:</b> {ELEMENT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_CLASS}:</b> {CLASS}</span><br />
			</td>
              </tr>
            </table>
        </td>
		<td class="row1">&nbsp;</td>
		<td class="row1" width ="40%">
			<table border="1" cellpadding="3" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2" class="forumline">
			<th width="100%" valign="top" colspan="2" style="border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1" bordercolor="#C0C0C0">
				{L_ATTRIBUTES}:
			</th>
              <tr>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_PHY_ATT}:</b> {MONSTER_ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_PHY_DEF}:</b> {MONSTER_DEF}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_ATT}:</b> {MONSTER_M_ATT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_MAG_DEF}:</b> {MONSTER_M_DEF}</span><br />
			</td>
                <td class="row1" width="50%" valign="top">
			<span class="gensmall">&nbsp;<b>{L_ALIGNMENT}:</b> {MONSTER_ALIGNMENT}</span><br />
			<span class="gensmall">&nbsp;<b>{L_ELEMENT}:</b> {MONSTER_ELEMENT}</span><br />
			</td>
              </tr>
              </table>
        </td>
	</tr>
	<tr>
		<td align="center" class="row1" valign="top" colspan="3">
			<iframe width="100%" height="200" left="0" frameborder=0 src="{S_CHATBOX}" class="row1"></iframe>
		</td>
	</tr>
</table>
<br clear="all" />

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
		<td align="center" class="row1" width="100%" colspan="2" ><input type="submit" style="width: 125" value="{L_DEFEND}" name="defend" class="mainoption" /></td>
	</tr>
	</tr>
		<td align="center" class="row2" width="100%" colspan="2" ><input type="submit" style="width: 125" value="{L_FLEE}" name="flee" class="mainoption" /></td>
	</tr>
</table>
</form>

