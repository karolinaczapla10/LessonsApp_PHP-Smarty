<?php
/* Smarty version 4.3.0, created on 2023-01-26 22:53:34
  from 'C:\xampp\htdocs\projektphp\templates\admin\teachers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2f65e0bf430_63267857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '857353447756dc4c1198a65e820dfefb7b0bd262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\admin\\teachers.tpl',
      1 => 1674770012,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d2f65e0bf430_63267857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
<table class="table">
<tr>
    <th>ID</th>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Jezyk</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teachers']->value, 'teacher');
$_smarty_tpl->tpl_vars['teacher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
$_smarty_tpl->tpl_vars['teacher']->do_else = false;
?>
    <tr>
    <th><?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['teacher']->value['surname'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['teacher']->value['language'];?>
</th>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
