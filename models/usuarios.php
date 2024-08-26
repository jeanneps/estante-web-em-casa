<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/conexao.php/';

class usuarios {
public $id_usuario;
public $email;
public $senha;
public $foto_perfil;
public $nome;
public function __construct($id=false)

    if($id){
        $this->id_usuario = $id;
        $this->carregarUsuario();
    }
}

