<?php
require ('libs/Smarty.class.php');
$smarty = new Smarty();
include 'config.php';

$result = $db->query("SELECT * FROM people WHERE id='".$_GET['id']."'");
$data[] = $result->fetch_array($result);

$smarty->assign('users', $data);
$smarty->display('./templates/edit.tpl');

?>