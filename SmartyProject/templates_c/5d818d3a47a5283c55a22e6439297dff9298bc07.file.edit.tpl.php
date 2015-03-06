<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 17:28:08
         compiled from ".\templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2656054f9cd073270e8-10700179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d818d3a47a5283c55a22e6439297dff9298bc07' => 
    array (
      0 => '.\\templates\\edit.tpl',
      1 => 1425659277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2656054f9cd073270e8-10700179',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f9cd07667226_79283020',
  'variables' => 
  array (
    'people' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9cd07667226_79283020')) {function content_54f9cd07667226_79283020($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'Edit'), 0);?>

<form method="POST" action="edit.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['people']->value['id'];?>
">
	<table width="550" border="1" >
		<tr>
			<td colspan="2" align="center"><strong>Edit Records</strong></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['people']->value['name'];?>
"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['people']->value['city'];?>
"/></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="submit" value="Add Records" /></td>
		</tr>
	</table>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
