<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/livro.php';



$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$sinopse = $_POST['sinopse'];
$categoria = $_POST['categoria'];

if(!empty($_FILES['capa']['tmp_name'])){
    $capa = file_get_contents($_FILES['capa']['tmp_name']);
};

$livro = new livro();
$livro->titulo = $titulo;
$livro->autor = $autor;
$livro->sinopse = $sinopse;
if(isset($capa)){
    $livro->capa= $capa;
} else {
    $livro->capa = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/imgs/favicon.icon.jpg');
}


$livro->listarLivros();
exit();