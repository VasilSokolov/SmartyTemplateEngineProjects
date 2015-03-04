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
		{section name=i loop=$people}
		<tr>
			<td>{$smarty.section.i.rownum}</td>
			<td>{$people[i].name}</td>
			<td>{$people[i].city}</td>
			<td><a href="edit.php?id={$people[i].id}">Update</a> | <a href="view.php?del={$people[i].id}">Delete</a></td>
		</tr>
		{/section}		
	</table>

{include file="footer.tpl"}