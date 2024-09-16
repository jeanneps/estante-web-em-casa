<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/models/favoritos.php';


$id_usuario = $_POST['id_usuario'];
$id_livro = $_POST['id_livro'];

$id_favorito = new Favorito();

$id_favorito->id_usuario = $id_usuario;
$id_favorito->id_livro = $id_livro;

$id_favorito = $id_favorito->adicionarFavorito();

header('Location: /jeane/estante_web/views/favoritos.php');
exit();