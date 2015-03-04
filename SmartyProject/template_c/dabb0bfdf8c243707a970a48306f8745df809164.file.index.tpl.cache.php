<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-02 15:38:43
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1069054f469118090c5-37593391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dabb0bfdf8c243707a970a48306f8745df809164' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1425307096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1069054f469118090c5-37593391',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f46911968a18_40825567',
  'variables' => 
  array (
    'title' => 0,
    'SCRIPT_NAME' => 0,
    'movies' => 0,
    'dir' => 0,
    'scifichars' => 0,
    'tr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f46911968a18_40825567')) {function content_54f46911968a18_40825567($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\xampp\\htdocs\\SmartyProjectBasics\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_select_date')) include 'D:\\xampp\\xampp\\htdocs\\SmartyProjectBasics\\libs\\plugins\\function.html_select_date.php';
if (!is_callable('smarty_function_html_select_time')) include 'D:\\xampp\\xampp\\htdocs\\SmartyProjectBasics\\libs\\plugins\\function.html_select_time.php';
if (!is_callable('smarty_function_cycle')) include 'D:\\xampp\\xampp\\htdocs\\SmartyProjectBasics\\libs\\plugins\\function.cycle.php';
if (!is_callable('smarty_function_html_table')) include 'D:\\xampp\\xampp\\htdocs\\SmartyProjectBasics\\libs\\plugins\\function.html_table.php';
?><html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
	<body>

		<p><h2>These are Smarty Built-in function</h2></p>
			<p>The current date and  time is <?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
</p>

			<p>The value of global assigned variable $SCRIPT_NAME is: <?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
</p>

			<p>The value of variable $SERVER_NAME is: <?php echo $_SERVER['SERVER_NAME'];?>
</p>

		<form>
			<?php echo smarty_function_html_select_date(array('start_year'=>2000,'end_year'=>2014),$_smarty_tpl);?>

		</form>

		<form>
			<?php echo smarty_function_html_select_time(array('use_24_hours'=>false),$_smarty_tpl);?>

		</form>	

		<p><h2>These are the values in the array $movies</h2></p>

		<?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value) {
$_smarty_tpl->tpl_vars['dir']->_loop = true;
 $_smarty_tpl->tpl_vars['title']->value = $_smarty_tpl->tpl_vars['dir']->key;
?>
			<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
 <br>
		<?php } ?>
		<br>

		<p><h2>$movies as a table</h2></p>
		<table>
		<?php  $_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dir']->_loop = false;
 $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->key => $_smarty_tpl->tpl_vars['dir']->value) {
$_smarty_tpl->tpl_vars['dir']->_loop = true;
 $_smarty_tpl->tpl_vars['title']->value = $_smarty_tpl->tpl_vars['dir']->key;
?>
			<tr style="background: <?php echo smarty_function_cycle(array('values'=>'lightblue, azure'),$_smarty_tpl);?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</td>
			</td>
		<?php } ?>
		</table>

		<p><h2>Array $characters using custom functions</h2></p>
		
		<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['scifichars']->value,'cols'=>1,'table_attr'=>'border="0"'),$_smarty_tpl);?>

		<br>
		<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['scifichars']->value,'cols'=>1,'tr_attr'=>$_smarty_tpl->tpl_vars['tr']->value),$_smarty_tpl);?>

	</body>
</html><?php }} ?>
