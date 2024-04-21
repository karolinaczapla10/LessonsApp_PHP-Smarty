<?php
/* Smarty version 4.3.0, created on 2023-01-20 12:40:09
  from 'C:\xampp\htdocs\projektphp\templates\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63ca7d996e0061_20311460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fe32fd182b514beb64d25627181da628c3f7f20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\admin\\login.tpl',
      1 => 1674214806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63ca7d996e0061_20311460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
        <div class="col col-lg-4 offset-lg-4 mt-5">
            <h3>Zaloguj sie</h3>
            <form action="index.php" method="post">
            <input type="hidden" name="action" value="checkLogin">
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label"> Haslo</label>
                <input type="password" name="passwd" class="form-control" id="passwd" placeholder="Haslo" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
           </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
            <div class="alert alert-danger" role-"alert">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
            <?php }?>
           
            </form>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
