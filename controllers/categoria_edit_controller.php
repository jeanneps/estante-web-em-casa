<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/Estante_Web/models/categoria.php';

$id = $_POST['id'];
$nome = $_POST['nome'];

$categoria = new Categoria($id);
$categoria->nome_categoria = $nome;
$categoria->atualizarCategoria();


header('Location: /jeane/Estante_Web/views/gerenciar.php');
exit();