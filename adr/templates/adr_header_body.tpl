<!-- BEGIN header -->
<table>
	<tr>
		<td align="left"><span class="nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></td>
	</tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center">
			<table width="100%" align="center" height="10%">
				<tr height="5">
					<td align="left" width="35%"><span class="gensmall"><b>&nbsp;{L_HOUR}{ADR_HOUR}&nbsp;{L_DAY}{ADR_DAY}&nbsp;{L_MONTH}{ADR_MONTH}&nbsp;{L_YEAR}{ADR_YEAR}</b></span></td>
					<td align="center" width="50%">&nbsp;</td>
					<form><td align="center" valign="top" nowrap="nowrap"><br /><select name="navlink">{NAV}</select>&nbsp;<input type="button" value="Go" onClick="if (form.navlink.selectedIndex != 0) location = 'adr_' + form.navlink.options[form.navlink.selectedIndex].value" />
					</td></form>
				</tr>
			</table>
		</td>
	</tr>
	<tr height="5">
		<td align="center">
			<table width="100%" align="center">
				<tr height="40">
					<!-- BEGIN header_main_menu -->
					<td align="center" class="{header.header_main_menu.MAIN_ROW}" width="{MAIN_WIDTH}%" nowrap="nowrap" style="{header.header_main_menu.MAIN_STYLE}" ><a href="{header.header_main_menu.MAIN_LINK}" class="genmed">{header.header_main_menu.MAIN_HEADER}</a></td>
					<!-- END header_main_menu -->
				</tr>	
			</table>
		</td>
	</tr>

	<tr>
		<td align="center">
			<table width="100%">
				<tr height="25">
					<!-- BEGIN header_sub_menu -->
					<td align="center" class="{header.header_sub_menu.SUB_ROW}" width="{SUB_WIDTH}%" nowrap="nowrap" style="{header.header_sub_menu.SUB_STYLE}" ><a href="{header.header_sub_menu.SUB_LINK}" class="gensmall">{header.header_sub_menu.SUB_HEADER}</a></td>
					<!-- END header_sub_menu -->
				</tr>
			</table>
		</td>
	</tr>
</table>
<!-- END header -->
