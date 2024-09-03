<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/Estante_Web/models/categoria.php';


// deletar categoria
$id = $_POST['id'];
var_dump($id_categoria);

$categoria = new Categoria($id);
$categoria->deletarCategoria();

header('Location:/jeane/Estante_Web/views/gerenciar.php');
exit();