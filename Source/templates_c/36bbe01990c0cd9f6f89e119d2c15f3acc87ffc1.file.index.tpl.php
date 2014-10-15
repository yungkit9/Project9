<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 00:31:41
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:233715419a48a2113b4-77858650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36bbe01990c0cd9f6f89e119d2c15f3acc87ffc1' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1412289100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233715419a48a2113b4-77858650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5419a48a639213_49212752',
  'variables' => 
  array (
    'loginvar' => 0,
    'menu' => 0,
    'tableheaders' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5419a48a639213_49212752')) {function content_5419a48a639213_49212752($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min_1.css">
	<link rel="shortcut icon" type="image/png" href="css/images/logo.png"/>
        <script type="text/javascript" src="javascript/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="javascript/functions.js"></script>
</head>
<body>
	<a href="index.php"><img src="css/images/logo.png"></a>
<div id="aanmelden">
    <form id="uitloggen" method="post" action="classes/Inlogclass.php">
        <input type="hidden" name="loguit" value="1"/>
    </form>
    <?php echo $_smarty_tpl->tpl_vars['loginvar']->value;?>
 
</form>

</div>

<div id="winkelwagen">
	<a id="uni" href="winkelwagen.php"><img src="css/images/winkelwagen.png"</a>
</div>
        
<div id='cssmenu'>
<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

</div>

    <?php echo $_smarty_tpl->tpl_vars['tableheaders']->value;?>


</table>
</body>
</html><?php }} ?>
