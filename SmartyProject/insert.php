<?php
require ('libs/Smarty.class.php');
$smarty = new Smarty();

include 'config.php';

print_r($_POST);
if (isset($_POST['submit'])) {
	$name = trim($_POST['name']);
	$city = trim($_POST['city']);
	$sql = $db->query("INSERT INTO people(name, city) VALUES('{$name}', '{$city}'"));

	header("location: view.php");
	echo "add record sucessfully";
	echo $db->affected_rows;

}
// $smarty->assign('news', 'test');
$smarty->display('./templates/insert.tpl');

?>