
<?php
// NOTE: Smarty has a capital 'S'
require_once("header.php");


$array = array(
   'Wiesia' => 46,
   'Grzegorz' => 48,
   'Piotr' => 46,
   'Dominik' => 35
);

$date = '2018-3-21';

$smarty->assign('date',$date);
$smarty->assign('people', $array);
$smarty->display('index.tpl');

