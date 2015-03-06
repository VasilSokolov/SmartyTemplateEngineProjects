<?php
require ('libs/Smarty.class.php');
$smarty = new Smarty();

error_reporting(0);
include 'configs/config.php';




$records = array();

if($results = $db->query("SELECT * FROM people")){
	if ($results->num_rows) {
		while ($row=$results->fetch_array()) {
			$records[] = $row;
		}
	}
}


// echo "<pre>", print_r($records), "</pre>";


$smarty->assign('people', $records);
$smarty->display('./templates/view.tpl');

?>