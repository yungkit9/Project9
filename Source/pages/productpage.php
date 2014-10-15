<?php

session_start();
function __autoload($class_name) {
    include('classes/'.$class_name . '.php');
}
define('SMARTY_SPL_AUTOLOAD',1);
require_once('../Smarty/libs/Smarty.class.php');
spl_autoload_register('__autoload');

$smarty = new Smarty();



$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates_c');
$smarty->setCacheDir('../cache');
$smarty->setConfigDir('../configs');

include '../smartyassigns.php';


$smarty->display('productpage.tpl');

