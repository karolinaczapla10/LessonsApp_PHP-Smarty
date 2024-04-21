<?php
/* Smarty version 4.3.0, created on 2023-01-25 19:07:05
  from 'C:\xampp\htdocs\projektphp\templates\admin\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d16fc94bdc18_26930080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3339e175a5c58a936c03fb5b071d6135ca560d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\admin\\index.tpl',
      1 => 1674670023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63d16fc94bdc18_26930080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<main>
<div class="b-example-divider"></div>

  <div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Panel administracyjny</h2>



      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#collection" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Lista nauczycieli </h4>
            <p class="text-muted">Wyświetlaj listę native-speakerow.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#gear-fill" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Lista studentów</h4>
            <p class="text-muted">Wyświetlaj listę zarejestrowanych studentów na stronie.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#speedometer" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Lista room</h4>
            <p class="text-muted">Wyświetlaj kanały na platformie Zoom na których będą się odbywać zajęcia.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#table" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0">Puste spotkanie</h4>
            <p class="text-muted">Dodaj wolne terminy, aby studenci mogli zapisać się na konwersacje.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

 </main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
