<?php
/* Smarty version 4.3.0, created on 2023-01-26 22:09:26
  from 'C:\xampp\htdocs\projektphp\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63d2ec063ec341_97795975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba3f4fcf17bda68dbaabfdbeb977bdd109e26df7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projektphp\\templates\\header.tpl',
      1 => 1674767203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d2ec063ec341_97795975 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Głowna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/features/">  
    <link rel="stylesheet" type="text/css" href="cover.css" />
</head>
<body>
<div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">COLUMBICA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Strona główna</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin/index.php">Administrator</a>
                    </li>
                    <?php if ((isset($_smarty_tpl->tpl_vars['name']->value))) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=lessons">Konwersacje</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=index">
                            Witaj <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=logoff">Wyloguj</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?action=login">Zaloguj</a> 
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?action=registration">Zarejestruj sie</a>
                        </li>
                    <?php }?>
                    
                </ul>
                </div>
            </div>
        </nav>
</div><?php }
}
