<?php
require ('libs/Smarty.class.php');
$smarty = new Smarty();

error_reporting(0);
include 'configs/config.php';


$results = $db->query("SELECT * FROM people WHERE id = '".$_GET['id']."'");	
$row=$results->fetch_array();

if (isset($_POST['submit'])) {
	$update = $db->query("UPDATE people SET name = '".$_POST['name']."',city = '".$_POST['city']."' WHERE id = '".$_POST['id']."'");
	header("Location: view.php");
}
echo print_r($row);
$smarty->assign('people', $row);
$smarty->display('./templates/edit.tpl');
?>