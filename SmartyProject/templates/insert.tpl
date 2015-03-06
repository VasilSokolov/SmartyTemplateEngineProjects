{include file="header.tpl" title=Insert}
<form method="POST" action="insert.php">
	<table width="550" border="1">
		<tr>
			<td colspan="2" align="center"><strong>Insert Records</strong></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city"/></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="submit" value="Add Records" /></td>
		</tr>
	</table>
</form>
{include file="footer.tpl"}