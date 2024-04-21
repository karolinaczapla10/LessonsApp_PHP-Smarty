<?php
/* Smarty version 4.3.0, created on 2023-05-08 17:00:52
  from 'C:\xampp\htdocs\projektphp\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64590ea40c44d4_11049844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd044582f15109d05a5c4519d1da80962d57c7914' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\registration.tpl',
      1 => 1674841009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64590ea40c44d4_11049844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
        <div class="col col-lg-4 offset-lg-4 mt-5">
            <h3>Zrejestruj sie</h3>
            <form action="index.php" method="post">
            <input type="hidden" name="action" value="checkRegister">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z].$" title="email musi zawierac @ i po znaku '.' można napisać tylko 2 do 3 litery od a do z" required> 
            </div>
            <div class="mb-3">
                <label for="passwd" class="form-label"> Haslo</label>
                <input type="text" name="passwd" class="form-control" id="passwd" placeholder="Haslo" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" title="haslo musi zawierać 8 lub więcej znaków, które mają co najmniej jeden numer, a jedno wielkie i małe litery" required>
            </div>
             <div class="mb-3">
                <label for="name" class="form-label">Imie</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Imie"  title="Imie podaj z dużej litery" required >
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Nazwisko</label>
                <input type="text" name="surname" class="form-control" id="surname" placeholder="Nazwisko"  title="Nazwisko podaj z dużej litery" required>
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary w-100">Zarejstruj</button>
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
