<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-04 16:52:57
         compiled from ".\templates\insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:931254f7289f96be40-86094748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a267372204f2c15ebeef3159410cddb7274ab8d' => 
    array (
      0 => '.\\templates\\insert.tpl',
      1 => 1425484367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '931254f7289f96be40-86094748',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f7289fbb5dd0_80702999',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f7289fbb5dd0_80702999')) {function content_54f7289fbb5dd0_80702999($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'hi'), 0);?>

<form method="post" action="insert.php">
	<table width="550" border="1">
		<tr>
			<td colspan="2" align="center"><strong>Insert Records</strong></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city"/></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td><input type="submit" name="submit" value="Add Records" /></td>
		</tr>
	</table>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
