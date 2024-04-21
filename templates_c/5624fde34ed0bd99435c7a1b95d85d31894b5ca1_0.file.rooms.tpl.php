<?php
/* Smarty version 4.3.0, created on 2023-01-25 18:38:29
  from 'C:\xampp\htdocs\projektphp\templates\admin\rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d1691589c928_00374496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5624fde34ed0bd99435c7a1b95d85d31894b5ca1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\admin\\rooms.tpl',
      1 => 1674668307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d1691589c928_00374496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
<table class="table">
<tr>
    <th>ID</th>
    <th>Zoom-room</th>


</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
    <tr>
    <th><?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['room']->value['number'];?>
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
