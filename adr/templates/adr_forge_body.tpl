<form method="post" action="{S_FORGE_ACTION}">

<!-- BEGIN main -->
<br />
<table cellspacing="2" cellpadding="2" border="1" align="center" class="forumline" width="50%" >
	<tr>
		<td align="center" class="row1" onMouseOver="this.style.backgroundColor='{T_TD_COLOR2}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR1}" onClick="window.location.href='{U_MINING}';"><span class="gen">{L_MINING}</span></td>
	</tr>
	<tr>
		<td align="center" class="row2" onMouseOver="this.style.backgroundColor='{T_TD_COLOR1}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR2}" onClick="window.location.href='{U_STONE}';"><span class="gen">{L_STONE}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" onMouseOver="this.style.backgroundColor='{T_TD_COLOR2}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR1}" onClick="window.location.href='{U_REPAIR_ITEM}';"><span class="gen">{L_REPAIR_ITEM}</span></td>
	</tr>
	<tr>
		<td align="center" class="row2" onMouseOver="this.style.backgroundColor='{T_TD_COLOR1}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR2}" onClick="window.location.href='{U_RECHARGE_ITEM}';"><span class="gen">{L_RECHARGE_ITEM}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" onMouseOver="this.style.backgroundColor='{T_TD_COLOR2}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR1}" onClick="window.location.href='{U_ENCHANT_ITEM}';"><span class="gen">{L_ENCHANT_ITEM}</span></td>
	</tr>
</table>
<!-- END main -->

<!-- BEGIN mining -->
<br />
<table cellspacing="2" cellpadding="2" border="1" align="center" class="forumline" width="80%" >
	<tr>
		<td align="center" class="CatHead" colspan="2"><span class="gen"><b>{L_MINING}</b></span><br /><span class="genmed">{L_MINING_EXPLAIN}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_TOOL}</span></td>
		<td align="center" class="row2" ><span class="gen">{TOOL_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" colspan="2" class="row2" ><input type="hidden" name="mode" value="mining_action"><input type="submit" value="{L_GO_MINING}" class="mainoption" /></td>
	</tr>
</table>
<!-- END mining -->

<!-- BEGIN repair -->
<br />
<table cellspacing="2" cellpadding="2" border="1" align="center" class="forumline" width="80%" >
	<tr>
		<td align="center" class="CatHead" colspan="2"><span class="gen"><b>{L_REPAIR_ITEM}</b></span><br /><span class="genmed">{L_REPAIR_ITEM_EXPLAIN}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_TOOL}</span></td>
		<td align="center" class="row2" ><span class="gen">{TOOL_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_ITEMS}</span></td>
		<td align="center" class="row2" ><span class="gen">{ITEMS_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" colspan="2" class="row2" ><input type="hidden" name="mode" value="repair_action"><input type="submit" value="{L_GO_REPAIR}" class="mainoption" /></td>
	</tr>
</table>
<!-- END repair -->

<!-- BEGIN recharge -->
<br />
<table cellspacing="2" cellpadding="2" border="1" align="center" class="forumline" width="80%" >
	<tr>
		<td align="center" class="CatHead" colspan="2"><span class="gen"><b>{L_RECHARGE_ITEM}</b></span><br /><span class="genmed">{L_RECHARGE_ITEM_EXPLAIN}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_TOOL}</span></td>
		<td align="center" class="row2" ><span class="gen">{TOOL_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_ITEMS}</span></td>
		<td align="center" class="row2" ><span class="gen">{ITEMS_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" colspan="2" class="row2" ><input type="hidden" name="mode" value="recharge_action"><input type="submit" value="{L_GO_REPAIR}" class="mainoption" /></td>
	</tr>
</table>
<!-- END recharge -->

<!-- BEGIN stone -->
<br />
<table cellspacing="2" cellpadding="2" border="1" align="center" class="forumline" width="80%" >
	<tr>
		<td align="center" class="CatHead" colspan="2"><span class="gen"><b>{L_STONE}</b></span><br /><span class="genmed">{L_STONE_EXPLAIN}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_TOOL}</span></td>
		<td align="center" class="row2" ><span class="gen">{TOOL_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_ITEMS}</span></td>
		<td align="center" class="row2" ><span class="gen">{ITEMS_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" colspan="2" class="row2" ><input type="hidden" name="mode" value="stone_action"><input type="submit" value="{L_GO_REPAIR}" class="mainoption" /></td>
	</tr>
</table>
<!-- END stone -->

<!-- BEGIN enchant -->
<br />
<table cellspacing="2" cellpadding="2" border="1" align="center" class="forumline" width="80%" >
	<tr>
		<td align="center" class="CatHead" colspan="2"><span class="gen"><b>{L_ENCHANT_ITEM}</b></span><br /><span class="genmed">{L_ENCHANT_ITEM_EXPLAIN}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_TOOL}</span></td>
		<td align="center" class="row2" ><span class="gen">{TOOL_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" class="row1" ><span class="gen">{L_SELECT_ITEMS}</span></td>
		<td align="center" class="row2" ><span class="gen">{ITEMS_LIST}</span></td>
	</tr>
	<tr>
		<td align="center" colspan="2" class="row2" ><input type="hidden" name="mode" value="enchant_action"><input type="submit" value="{L_GO_REPAIR}" class="mainoption" /></td>
	</tr>
</table>
<!-- END enchant -->
</form>
<br clear="all" />
