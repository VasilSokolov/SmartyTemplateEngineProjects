{include file="header.tpl" title=View}
<a href="insert.php">Add Records</a>
	<table width="550" border="1">
		<tr>
			<th>Sno</th>
			<th>Name</th>
			<th>City</th>
			<th>Action</th>
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