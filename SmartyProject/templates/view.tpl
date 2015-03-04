{config_load file="test.conf" section="setup"}
{include file="header.tpl" title=hi}
<a href="insert.php">Add Record</a>
<table width="550" border="1">
		<tr>
			<td>Sno</td>
			<td>Name</td>
			<td>City</td>
			<td>Action</td>
		</tr>
		{section name=i loop=$user}
		<tr>
			<td>1</td>
			<td>{$user[i].name}</td>
			<td>{$user[i].city}</td>
			<td><a href="view.php?del={$user[i].id}">Delete</a></td>
		</tr>
		{/section}		
	</table>

{include file="footer.tpl"}