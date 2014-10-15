<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 14:26:12
         compiled from "..\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4100541e225de0a392-98857728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a32b914e763092aaa4aaaa9fe84b6daaf260c278' => 
    array (
      0 => '..\\templates\\login.tpl',
      1 => 1412252770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4100541e225de0a392-98857728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541e225de0cf87_76253350',
  'variables' => 
  array (
    'loginvar' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541e225de0cf87_76253350')) {function content_541e225de0cf87_76253350($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min_1.css"> 
        <link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel="shortcut icon" type="image/png" href="../images/logo.png"/>
        <script type="text/javascript" src="../javascript/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="../javascript/functions.js"></script>

</head>
<body onload="exists()">
    <div style="width: max-content">
	<a href="../"><img src="../css/images/logo.png"></a>
    </div>
    <div id="aanmelden">
    <form id="uitloggen" method="post" action="classes/Inlogclass.php">
        <input type="hidden" name="loguit" value="1"/>
    </form>
    <?php echo $_smarty_tpl->tpl_vars['loginvar']->value;?>
 
</form>
    <div id="winkelwagen">
        <a href="winkelwagen.php"><img src="../css/images/winkelwagen.png"/></a>
</div>
<div id='cssmenu'>
<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

</div>
</body>
        <div style="margin-left: 10px;width:500px;float:left">
                <h3>Maak een account aan</h3>
                <form action="../classes/Registratieclass.php" onsubmit="return validateCreation()" method="post"  role="form">
                <table style="width:100%" class="table table-hover table-condensed" >
                    <tr>
                        <td>
                            <label class="col-sm-2 control-label">Gebruikersnaam</label>
                        </td>
                        <td>
                            <input type="text" id="username" name="regisusername" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="wachtwoord"class="col-sm-2 control-label">Wachtwoord</label>
                        </td>
                        <td>
                            <input type="password" id="wachtwoord" name="regiswachtwoord" />
                        </td>
                    </tr>                   
                    <tr>
                        <td>
                            <label for="wachtwoordconfirm"class="col-sm-2 control-label">Bevestig</label>
                        </td>
                        <td>
                            <input type="password" id="wachtwoordconfirm" name="wachtwoordconfirm" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="naam"class="col-sm-2 control-label">Naam</label>
                        </td>
                        <td>
                            <input type="text"  id="naam" name="naam" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="geboorte-datum"class="col-sm-2 control-label">Geboortedatum</label>
                        </td>
                        <td>
                            <input type="date" id="geboortedatum" style="height:26px;width:174px" name="geboortedatum" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email"class="col-sm-2 control-label">Email</label>
                        </td>
                        <td>
                            <input type="text" id="email" name="email"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="postcode"class="col-sm-2 control-label">Postcode</label>
                        </td>
                        <td>
                            <input type="text"  id="postcode" name="postcode" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="straatnummer"  class="col-sm-2 control-label">Straatnummer</label>
                        </td>
                        <td>
                            <input type="text" onfocusout="validatePostcode();" id="straatnummer" name="straatnummer" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="woonplaats"class="col-sm-2 control-label">Woonplaats</label>
                        </td>
                        <td>
                            <input type="text"  id="woonplaats" name="woonplaats"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="straat-naam"class="col-sm-2 control-label">Straatnaam</label>
                        </td>
                        <td>
                            <input type="text"  id="straatnaam" name="straatnaam"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-default">Sign in</button>
                        </td>
                    </tr>
                </table>                     
                </form>
</div>
        <div style="width:500px;margin-right:10px;float: right">
          <h3>Inloggen</h3>
          <form method="post" action="../classes/Inlogclass.php" class="form-horizontal" role="form">
              <table style="width:100%" class="table table-condensed">
                  <tr>
                      <td>
                          <label class="col-sm-2 control-label">Gebruikersnaam: </label>
                      </td>
                      <td>
                          <input type="text" name="loginusername">
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <label for="inputPassword3" class="col-sm-2 control-label">Wachtwoord: </label>
                      </td>
                      <td>
                          <input type="password" name="loginww">
                      </td>
                  </tr>
                  <tr>
                      <td>
                      </td>
                      <td>
                              <button type="submit" class="btn btn-default">Log in</button>
                      </td>
                  </tr>
              </table>
          </form>
          </div>
</body>
</html><?php }} ?>
