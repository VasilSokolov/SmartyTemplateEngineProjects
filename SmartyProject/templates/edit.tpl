{include file="header.tpl" title=Edit}
<form method="POST" action="edit.php">
<input type="hidden" name="id" value="{$people.id}">
	<table width="550" border="1" >
		<tr>
			<td colspan="2" align="center"><strong>Edit Records</strong></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{$people.name}"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value="{$people.city}"/></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="submit" value="Add Records" /></td>
		</tr>
	</table>
</form>
{include file="footer.tpl"}