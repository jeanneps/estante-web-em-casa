<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livro.php';


$id_livro = $_POST['id_livro'];
$titulo = $_POST['adicionar_titulo'];
$autor = $_POST['adicionar_autor'];

$sinopse = $_POST['sinopse'];
if (!empty($_FILES['adicionar_imagem']['tmp_name'])) {
    $capa = file_get_contents($_FILES['adicionar_imagem']['tmp_name']);
};
$categoria = $_POST['adicionar_categoria'];

$livro = new Livros($id_livro);
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->sinopse = $sinopse;
if (isset($capa)) {
    $livro->capa = $capa;
} else {
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/estante_web/imgs/perfil_icon.svg');
}
$livro->categoria = $categoria;

$livro->AdicionarLivros();
header('Location: /jeane/estante_web/views/index.php');
exit();