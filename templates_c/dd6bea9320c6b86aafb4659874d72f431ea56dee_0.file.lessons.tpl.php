<?php
/* Smarty version 4.3.0, created on 2023-01-20 11:12:43
  from 'C:\xampp\htdocs\projektphp\templates\lessons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ca691b1a4251_80749671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6bea9320c6b86aafb4659874d72f431ea56dee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\lessons.tpl',
      1 => 1674209561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63ca691b1a4251_80749671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
<h1>Konwersacje z języka angielskiego</h1>
</div>
<div class="row">
    <h2>Umow sie na konwersacje</h2>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="makeMeeting">
            <div class="mb-3">
            <label>Wybierz nauczyciela i przedmiot:</label>
                <select class="form-select" aria-label="Default select example" name="teacher" required >
                    <option selected>Wybierz nauczyciela</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teachers']->value, 'teacher');
$_smarty_tpl->tpl_vars['teacher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
$_smarty_tpl->tpl_vars['teacher']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['language'];?>
 <?php echo $_smarty_tpl->tpl_vars['teacher']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['teacher']->value['surname'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
             <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Umow wizyte</button>
            </div>
    </form>
</div>
<div class="row">
    <h3>Lista umowionych spotkan</h3>
    <table class="table">
    <tr>
        <th>Termin konwersacji</th>
        <th>Native-speaker</th>
        <th>Zoom-room</th>

    <tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meetings']->value, 'meeting');
$_smarty_tpl->tpl_vars['meeting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meeting']->value) {
$_smarty_tpl->tpl_vars['meeting']->do_else = false;
?>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['meeting']->value['date'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['meeting']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['meeting']->value['surname'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['meeting']->value['room'];?>
 </th>
        <td>
        <a href="index.php?action=clearMeeting&&meeting_id=<?php echo $_smarty_tpl->tpl_vars['meeting']->value['meeting_id'];?>
">
        <button>Odwolaj konwersacje</button>
        </a>
        </td>

    <tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
