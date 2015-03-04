<html>
	<head>
		<title>{$title}</title>
	</head>
	<body>

		<p><h2>These are Smarty Built-in function</h2></p>
			<p>The current date and  time is {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}</p>

			<p>The value of global assigned variable $SCRIPT_NAME is: {$SCRIPT_NAME}</p>

			<p>The value of variable $SERVER_NAME is: {$smarty.server.SERVER_NAME}</p>

		<form>
			{html_select_date start_year=2000 end_year=2014}
		</form>

		<form>
			{html_select_time use_24_hours=false}
		</form>	

		<p><h2>These are the values in the array $movies</h2></p>

		{foreach from = $movies key = title item = dir}
			{$title} {$dir} <br>
		{/foreach}
		<br>

		<p><h2>$movies as a table</h2></p>
		<table>
		{foreach from = $movies key = title item = dir}
			<tr style="background: {cycle values='lightblue, azure'}">
				<td>{$title}</td>
				<td>{$dir}</td>
			</td>
		{/foreach}
		</table>

		<p><h2>Array $characters using custom functions</h2></p>
		
		{html_table loop=$scifichars cols=1 table_attr='border="0"'}
		<br>
		{html_table loop=$scifichars cols=1 tr_attr=$tr}
	</body>
</html>