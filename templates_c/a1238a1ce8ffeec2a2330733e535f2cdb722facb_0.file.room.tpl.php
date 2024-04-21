<?php
/* Smarty version 4.3.0, created on 2023-01-20 01:53:48
  from 'C:\xampp\htdocs\projektphp\templates\room.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c9e61c4fa655_33874432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1238a1ce8ffeec2a2330733e535f2cdb722facb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\room.tpl',
      1 => 1674176018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63c9e61c4fa655_33874432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
    <tr>
        <th>Data</th>
        <th>Native-speaker</th>
        <th>Zoom-room</th>
        <th>Zezerwuj konwersacje</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meetings']->value, 'meeting');
$_smarty_tpl->tpl_vars['meeting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meeting']->value) {
$_smarty_tpl->tpl_vars['meeting']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['meeting']->value['date'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['meeting']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['meeting']->value['surname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['meeting']->value['number'];?>
</td>
        <td>
            <a href="index.php?action=saveMeeting&meeting_id=<?php echo $_smarty_tpl->tpl_vars['meeting']->value['meeting_id'];?>
">
            <button class="btn btn-primary">Zarezerwuj</button>
</a>
        </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
