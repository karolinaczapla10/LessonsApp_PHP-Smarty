<?php
/* Smarty version 4.3.0, created on 2023-01-25 18:36:21
  from 'C:\xampp\htdocs\projektphp\templates\admin\students.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d16895d60a50_09586963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4a0abeb72418d8fc77f7347c71ba0cdc165e7d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\admin\\students.tpl',
      1 => 1674668097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d16895d60a50_09586963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
<table class="table">
<tr>
    <th>ID</th>
    <th>Imie</th>
    <th>Nazwisko</th>

</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'student');
$_smarty_tpl->tpl_vars['student']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
$_smarty_tpl->tpl_vars['student']->do_else = false;
?>
    <tr>
    <th><?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['student']->value['surname'];?>
</th>

</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</main
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
