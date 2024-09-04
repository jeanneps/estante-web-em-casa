<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/Estante_Web/models/categoria.php';
// Adicionar categoria ok
$nome_categoria = $_POST['adicionar_categoria'];

$categoria = new Categoria();
$categoria->nome_categoria = $nome_categoria;

$categoria->adicionarCategoria();
header('Location:/jeane/Estante_Web/views/gerenciar.php');

exit();