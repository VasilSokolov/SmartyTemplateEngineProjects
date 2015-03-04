<?php
require_once ('./smartyHeader.php');

$smarty->assign('title', 'More Smarty');
$moviesArray = array('Blade Runner' => 'Ridley Scott',
					'Terminator' => 'James Cameron',
					'Alien' => 'Ridley Scott',
					'The Matrix' => 'Wachowski Bros'
					);

$smarty->assign('movies', $moviesArray);

$characters = ['kirk', 'mulder', 'picards', 'spock'];
$smarty->assign('scifichars', $characters);
$smarty->assign('tr', ['bgcolor="pink"', 'bgcolor="gray"']);

$smarty->display('templates/index.tpl');


?>