<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-10 20:51:51
         compiled from ".\smarty\templates\creargasto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2365555281bc7488772-67901438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9e09bc5384d91f0811bfd45bec63d97aeaa5c6' => 
    array (
      0 => '.\\smarty\\templates\\creargasto.tpl',
      1 => 1428691439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2365555281bc7488772-67901438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'codigo' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55281bc75443f6_03590722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55281bc75443f6_03590722')) {function content_55281bc75443f6_03590722($_smarty_tpl) {?><div class='campo'>
    <label for='cod' >Codigo:</label><br/>
    <input type='text' name='cod' maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
" required/><br/>
</div>
<div class='campo'>
    <label for='nombre' >Nombre:</label><br/>
    <input type='text' name='nombre' maxlength="50"  required/><br/>
</div>
<div class='campo'>
    <label for='descripcion' >Descripcion:</label><br/>
    <textarea cols="100" rows="6" name="descripcion"></textarea><br>
</div>
<div class='campo'>
    <label for='fecha' >Fecha:</label><br/>
<input type="date" name="fecha" value=<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
>
</div>
<div class='campo'>
    <label for='precio' >Precio:</label><br/>
    <input type='number' name='precio' id='precio' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='iva' >Iva:</label><br/>
    <input type='number' name='iva' id='iva' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='precioiva' >Precio con iva:</label><br/>
    <input type='number' name='precioiva' id='precioiva' step="any" value="0"/><br/>
</div>
<div class='campo'>
    <label for='poriva' >Porcentaje iva:</label><br/>
    <select name=poriva id='poriva'>
        <option value='21' selected>21%</option>
        <option value='10.5'>Vehiculos 1/2</option>
        <option value='10'>10%</option>
        <option value='4'>4%</option>
        <option value='0'>0%</option>
    </select>
</div>
<?php }} ?>
