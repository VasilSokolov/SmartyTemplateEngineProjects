<?php
require ('libs/Smarty.class.php');
$smarty = new Smarty();

error_reporting(0);
require 'configs/config.php';

var_dump($_POST);

$smarty->display('./templates/insert.tpl');
?>