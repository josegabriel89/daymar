<?php
/* Smarty version 3.1.29, created on 2016-04-08 13:08:53
  from "D:\Dropbox\Proyectos\Daymar\smarty\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57079145cb7de7_84678758',
  'file_dependency' => 
  array (
    'c8afdcee34b42e386b4462be06f5b5765ec709af' => 
    array (
      0 => 'D:\\Dropbox\\Proyectos\\Daymar\\smarty\\templates\\login.tpl',
      1 => 1460113731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57079145cb7de7_84678758 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!-- Daymar Edificacion -->
<!-- Validacion de usuario: login.php -->
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        
        <title>Login: Daymar Edificación</title>
        <link href="css/cssdaymar.css" rel="stylesheet" type="text/css">
        
        <link href="cssdaymar.css" rel="stylesheet" type="text/css">
        <style>
        </style>
    </head>
    <body onload="error()">
        <div class='form-group container' id='login'>
            <form action='login.php' method='post'>
                <fieldset>
                    <legend>Login:</legend>
                    <div id="diverror"><span class="alert alert-danger" id="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
                    <div class='form-group campo'>
                        <label for='usuario' >Usuario:</label><br/>
                        <input type='text' class="form-control input-lg" name='usuario' id='usuario' maxlength="50" placeholder="Introduzca usuario" required/><br/>
                    </div>
                    <div class='form-group campo'>
                        <label for='password' >Contraseña:</label><br/>
                        <input type='password' class="form-control input-lg" name='password' id='password' maxlength="50"  placeholder="Introduzca contraseña" required/><br/>
                    </div>

                    <div class='form-group campo'>
                        <input type='submit' class="btn btn-default" name='enviar' value='Enviar' />
                    </div>
                </fieldset>
            </form>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            function error() {
                var texterror = document.getElementById('error');
                var diverror = document.getElementById('diverror');
                if (texterror.textContent == "") {
                    diverror.style.display = "none";
                } else {
                    diverror.style.display = "inline";
                }
            }
        <?php echo '</script'; ?>
>
        
            
        <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}