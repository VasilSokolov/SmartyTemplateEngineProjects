<?php
require ('libs/Smarty.class.php');
$smarty = new Smarty();
include 'config.php';

$result = $db->query("SELECT * FROM users");
	if ($count = $result->num_rows) {
		echo '<p>',$count, '</p>';

		while ($row = $result->fetch_object()) {
			echo $row->first_name, ' ', $row->last_name, '<br>';
		}

		$result->free();
	}
$smarty->assign('user', $row);
$smarty->display('./templates/view.tpl');

?>