<form action="{S_PVP_ACTION}" method="post">
<br />
<table align="center" width="50%" cellspacing="4" cellpadding="1" border="1">
	<tr>
		<td height="50" width="33%" align="center" class="row1" onMouseOver="this.style.backgroundColor='{T_TD_COLOR2}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR1}" onClick="window.location.href='{U_DEFY}';"><span class="gen"><b>{L_DEFY}</b></span></td>
		<td height="50" width="33%" align="center" class="row1" onMouseOver="this.style.backgroundColor='{T_TD_COLOR2}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR1}" onClick="window.location.href='{U_CURRENT}';"><span class="gen"><b>{L_CURRENT}</b></span></td>
		<td height="50" width="33%" align="center" class="row1" onMouseOver="this.style.backgroundColor='{T_TD_COLOR2}'; this.style.cursor='pointer';" onMouseOut=this.style.backgroundColor="{T_TR_COLOR1}" onClick="window.location.href='{U_WAITING}';"><span class="gen"><b>{L_WAITING}</b></span></td>
	</tr>
</table>

<br clear="all" />

<!-- BEGIN equip -->
<br />
<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline" width="75%">
	<tr>
		<th align="center" colspan="2">{L_EQUIPMENT}</th>
	</tr>
	<tr>
		<td align="left" class="row1" width="40%"><span class="gen">&nbsp;&nbsp;{L_SELECT_HELM}:</span></td>
		<td align="left" class="row1"><span class="gen">&nbsp;&nbsp;&nbsp;&nbsp;{SELECT_HELM}</span></td>
	</tr>
	<tr>
		<td align="left" class="row2" width="40%"><span class="gen">&nbsp;&nbsp;{L_SELECT_ARMOR}:</span></td>
		<td align="left" class="row2"><span class="gen">&nbsp;&nbsp;&nbsp;&nbsp;{SELECT_ARMOR}</span></td>
	</tr>
	<tr>
		<td align="left" class="row1" width="40%"><span class="gen">&nbsp;&nbsp;{L_SELECT_GLOVES}:</span></td>
		<td align="left" class="row1"><span class="gen">&nbsp;&nbsp;&nbsp;&nbsp;{SELECT_GLOVES}</span></td>
	</tr>
   <tr>
      <td align="left" class="row2" width="40%"><span class="gen">&nbsp;&nbsp;{L_SELECT_BUCKLER}:</span></td>
      <td align="left" class="row2"><span class="gen">&nbsp;&nbsp;&nbsp;&nbsp;{SELECT_BUCKLER}</span></td>
   </tr>
   <tr>
      <td align="left" class="row1" width="40%"><span class="gen">&nbsp;&nbsp;{L_SELECT_AMULET}:</span></td>
      <td align="left" class="row1"><span class="gen">&nbsp;&nbsp;&nbsp;&nbsp;{SELECT_AMULET}</span></td>
   </tr>
   <tr>
      <td align="left" class="row2" width="40%"><span class="gen">&nbsp;&nbsp;{L_SELECT_RING}:</span></td>
      <td align="left" class="row2"><span class="gen">&nbsp;&nbsp;&nbsp;&nbsp;{SELECT_RING}</span></td>
   </tr>
</table>

<br clear="all" />

<table cellspacing="1" cellpadding="4" border="0" align="center" class="forumline" width="75%">
	<!-- BEGIN defy -->
	<tr>
		<td class="row1" nowrap="nowrap" align="center"><span class="gen">{L_DEFY_USER}: {DEFY}</span></td>
	</tr>
	<tr>
		<td class="catBottom" align="center"><input type="submit" name="defy" value="{L_DEFY}" class="mainoption" /></td>
	</tr>
	<!-- END defy -->
	<!-- BEGIN accept -->
	<tr>
		<td class="catBottom" align="center">
			<input type="hidden" name="battle_id" value="{BATTLE_ID}" />
			<input type="submit" name="accept_action" value="{L_ACCEPT_DEFY}" class="mainoption" />
		</td>
	</tr>
	<!-- END accept -->
</table>
<!-- END equip -->

<!-- BEGIN current_battles -->
<br />
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
		<th class="thTop" nowrap="nowrap" colspan="4">{L_CURRENT_PVP}</th>
	</tr>
	<tr> 
		<th class="thTop" nowrap="nowrap">{L_OPPONENT}</th>
		<th class="thTop" nowrap="nowrap">{L_TURN}</th>
		<th class="thTop" nowrap="nowrap">{L_SEE}</th>
		<th class="thTop" nowrap="nowrap">{L_STOP}</th>
	</tr>
	<!-- BEGIN current -->
	<tr> 
		<td class="{current_battles.current.ROW_CLASS}" align="center"><span class="gen"><a href="{current_battles.current.U_OPPONENT}">{current_battles.current.OPPONENT}</a></span></td>
		<td class="{current_battles.current.ROW_CLASS}" align="center"><span class="gen">{current_battles.current.TURN}</span></td>
		<td class="{current_battles.current.ROW_CLASS}" align="center"><span class="gen"><a href="{current_battles.current.U_SEE}">{L_SEE}</a></span></td>
		<td class="{current_battles.current.ROW_CLASS}" align="center"><span class="gen"><a href="{current_battles.current.U_STOP}">{L_STOP}</a></span></td>
	</tr>
	<!-- END current -->
</table>
<!-- END current_battles -->

<!-- BEGIN waiting_battles -->
<br />
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
		<th class="thTop" nowrap="nowrap" colspan="3">{L_WAITING_YOU}</th>
	</tr>
	<tr> 
		<th class="thTop" nowrap="nowrap">{L_OPPONENT}</th>
		<th class="thTop" nowrap="nowrap">{L_ACCEPT}</th>
		<th class="thTop" nowrap="nowrap">{L_DENY}</th>
	</tr>
	<!-- BEGIN waiting -->
	<tr> 
		<td class="{waiting_battles.waiting.ROW_CLASS}" align="center"><span class="gen"><a href="{waiting_battles.waiting.U_OPPONENT}">{waiting_battles.waiting.OPPONENT}</a></span></td>
		<td class="{waiting_battles.waiting.ROW_CLASS}" align="center"><span class="gen"><a href="{waiting_battles.waiting.U_ACCEPT}" class="gen">{L_ACCEPT}</a></span></td>
		<td class="{waiting_battles.waiting.ROW_CLASS}" align="center"><span class="gen"><a href="{waiting_battles.waiting.U_DENY}">{L_DENY}</a></span></td>
	</tr>
	<!-- END waiting -->
</table>
<br clear="all" />
<table width="100%" cellpadding="3" cellspacing="1" border="0" class="forumline">
	<tr> 
		<th class="thTop" nowrap="nowrap" colspan="4">{L_WAITING_OTHER}</th>
	</tr>
	<tr> 
		<th class="thTop" nowrap="nowrap">{L_OPPONENT}</th>
		<th class="thTop" nowrap="nowrap">{L_BREAK}</th>
	</tr>
	<!-- BEGIN waitings -->
	<tr> 
		<td class="{waiting_battles.waitings.ROW_CLASS}" align="center"><span class="gen"><a href="{waiting_battles.waitings.U_OPPONENT}">{waiting_battles.waitings.OPPONENT}</a></span></td>
		<td class="{waiting_battles.waitings.ROW_CLASS}" align="center"><span class="gen"><a href="{waiting_battles.waitings.U_BREAK}" class="gen">{L_BREAK}</a></span></td>
	</tr>
	<!-- END waitings -->
</table>
<!-- END waiting_battles -->

</form>
<br clear="all" />


