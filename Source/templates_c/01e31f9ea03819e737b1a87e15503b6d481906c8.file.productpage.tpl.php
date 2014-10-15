<?php /* Smarty version Smarty-3.1.19, created on 2014-10-04 08:05:21
         compiled from "..\templates\productpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22216542f72dd03ac73-59362090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01e31f9ea03819e737b1a87e15503b6d481906c8' => 
    array (
      0 => '..\\templates\\productpage.tpl',
      1 => 1412402719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22216542f72dd03ac73-59362090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542f72ddc17d52_88926634',
  'variables' => 
  array (
    'loginvar' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542f72ddc17d52_88926634')) {function content_542f72ddc17d52_88926634($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/home.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min_1.css">
	<link rel="shortcut icon" type="image/png" href="../css/images/logo.png"/>
        <script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../javascript/functions.js"></script>
</head>
<body onload="">
	<a href="index.php"><img src="../css/images/logo.png"></a>
<div id="aanmelden">
    <form id="uitloggen" method="post" action="../classes/Inlogclass.php">
        <input type="hidden" name="loguit" value="1"/>
    </form>
    <?php echo $_smarty_tpl->tpl_vars['loginvar']->value;?>
 
</form>

</div>

<div id="winkelwagen">
	<a id="uni" href="winkelwagen.php"><img src="../css/images/winkelwagen.png"</a>
</div>
        
<div id='cssmenu'>
<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

</div>
<table  id="tablepage" class="table table-condensed table-hover table-responsive" >
    
</table>
    
</body>
</html><?php }} ?>
