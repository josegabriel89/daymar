<?php
/* Smarty version 3.1.29, created on 2016-04-03 15:44:27
  from "D:\Apuntes\Dropbox\Proyectos\Daymar\smarty\templates\crearelemento.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57011e3b7f2069_38179784',
  'file_dependency' => 
  array (
    'c03a17fc7d50ad006558fc6dc7ee912b33b0865f' => 
    array (
      0 => 'D:\\Apuntes\\Dropbox\\Proyectos\\Daymar\\smarty\\templates\\crearelemento.tpl',
      1 => 1428691440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57011e3b7f2069_38179784 ($_smarty_tpl) {
?>
<div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" /><br/>
    <!--                    Crear generador automatico de codigos, aun asi se puede 
    mostrar en pantalla pero con el label bloqueado-->
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50"  required/><br/>
</div>
<div class='campo'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' name='precio' step="any" value="0" required/><br/>
</div>
<div class='campo'>
    <label for='coste' >Coste:</label><br/>
    <input type='number' name='coste' step="any" value="0"/><br/>
</div><?php }
}