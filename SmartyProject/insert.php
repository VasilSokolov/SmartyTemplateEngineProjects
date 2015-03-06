<?php
require ('libs/Smarty.class.php');
$smarty = new Smarty();

error_reporting(0);
include 'configs/config.php';



// print_r($_POST);


if (isset($_POST['submit'])) {

	$insert = $db->query("INSERT INTO
							 people(name, city)
							 VALUES('".$_POST['name']."', '".$_POST['city']."')");	
	header('location: view.php');
	// echo "Add successfully";
	}

$smarty->display('./templates/insert.tpl');

?>