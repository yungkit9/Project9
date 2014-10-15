<?php /* Smarty version Smarty-3.1.19, created on 2014-09-23 21:43:23
         compiled from ".\templates\loggedin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77465421bf17b04f31-37786842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c664b79c1b9fea6d9e4f91358bd739e6b776a42' => 
    array (
      0 => '.\\templates\\loggedin.tpl',
      1 => 1411500724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77465421bf17b04f31-37786842',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5421bf17bad6f9_95668234',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bf17bad6f9_95668234')) {function content_5421bf17bad6f9_95668234($_smarty_tpl) {?><div id="aanmelden">
    <form method="post" action="classes/Inlogclass.php">
        <input type="hidden" name="loguit" value="1"/>
        <input type="submit" value="Uitloggen">
    </form>
</div><?php }} ?>
