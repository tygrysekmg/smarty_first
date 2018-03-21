<?php
/* Smarty version 3.1.31, created on 2018-03-21 08:07:36
  from "/opt/lampp/htdocs/kot/views/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ab204b8a7c619_03556246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a526c931f767336826e0d823421f59aa4dc6c311' => 
    array (
      0 => '/opt/lampp/htdocs/kot/views/index.tpl',
      1 => 1521616049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab204b8a7c619_03556246 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/opt/smarty/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) require_once '/opt/smarty/vendor/smarty/smarty/libs/plugins/function.cycle.php';
?>

Hello

<table>
<br />

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value);?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'k', false, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value => $_smarty_tpl->tpl_vars['k']->value) {
?>
 <tr style="background: <?php echo smarty_function_cycle(array('values'=>'#ff8080, #ffe6e6'),$_smarty_tpl);?>
">
<td><?php echo $_smarty_tpl->tpl_vars['w']->value;?>
 </td>
<td>   <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</table>
<?php }
}
