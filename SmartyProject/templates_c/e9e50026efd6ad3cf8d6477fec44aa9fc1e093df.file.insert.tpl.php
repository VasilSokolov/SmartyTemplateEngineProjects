<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 15:08:36
         compiled from ".\templates\insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1012554f9b2981a8064-52539311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e50026efd6ad3cf8d6477fec44aa9fc1e093df' => 
    array (
      0 => '.\\templates\\insert.tpl',
      1 => 1425650716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1012554f9b2981a8064-52539311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f9b298380b57_81071477',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9b298380b57_81071477')) {function content_54f9b298380b57_81071477($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>'hi'), 0);?>

<form method="POST" action="insert.php">
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
