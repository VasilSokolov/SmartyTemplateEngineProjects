<?php
require_once('./libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->caching = true;
$smarty->cache_lifetime = 120; //2min 
$smarty->template_dir = './template';
$smarty->compile_dir = './template_c';


?>