<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/Estante_Web/models/categoria.php';
// Adicionar categoria 
$nome_categoria = $_POST['nome_categoria'];

$categoria = new Categoria();
$categoria->nome_categoria = $nome_categoria;

$categoria->adicionarCategoria();
header('Location:/jeane/Estante_Web/views/gerenciar.php');

exit();