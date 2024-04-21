<?php
/* Smarty version 4.3.0, created on 2023-01-25 18:38:44
  from 'C:\xampp\htdocs\projektphp\templates\admin\blankMeeting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d16924ee2956_96770012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9252bebdb65d13fb6bbdc3c0806305123acd0787' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\admin\\blankMeeting.tpl',
      1 => 1674668322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d16924ee2956_96770012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main>
        <form action="index.php" method="post">
        <input type="hidden" name="action" value="addTermin">
        <div class="mb-3">
                <label class="form-label" for="teacher">Wybierz nauczyciela:</label>
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
                <label class="form-label" for="room">Wybierz pokoj:</label>
                <select class="form-select" aria-label="Default select example" name="room" required >
                    <option selected>Wybierz zoom-room</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rooms']->value, 'room');
$_smarty_tpl->tpl_vars['room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['room']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['language'];?>
 <?php echo $_smarty_tpl->tpl_vars['room']->value['number'];?>
 </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
        </div>
        <div class="mb-3">
                <label class="form-label" for="shiftStart">Wybierz początek:</label>
                <input class="form-control" type="datetime-local" name="shiftStart" id="shiftStart">
       </div>
        <div class="mb-3">
                <label class="form-label" for="shiftEnd">Wybierz koniec:</label>
                <input class="form-control" type="datetime-local" name="shiftEnd" id="shiftEnd">
        </div>
        <div class="mb-3">
                <label class="form-label" for="interval">Interwał wizyty(minuty):</label>
                <input class="form-control" type="number" name="interval">
        </div>  
        <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Dodaj wizyte</button>
        </div>
    </form>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
