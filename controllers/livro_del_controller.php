<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livros.php';

$id = $_POST['id'];
$livro = new livros ($id);
$livro->deletarLivro($id_livros);

header('location:/jeane/estante_web/views/editar_livros.php');
exit();
