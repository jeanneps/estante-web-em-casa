<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

<main class="adicionar_categorias">

    <section class="ad_categorias">
        <h2 class="box">
            Adicionar Categoria 
            <a href = "gerenciar.php" style="margin-left: 5px;"retroceder_pagina.php >
            <img src="jeane/estante_web/imgs/config.svg" alt="Ícone de configurações" width="30px"height="30px"></h2>

        <form action="/jeane/Estante_Web/controllers/categoria_controller.php">
            <label for="adicionar_categoria">Digite a Categoria</label>
            <input type="text" name="adicionar categoria" id="adicionar_categoria" value="">
            <button type="submit" value="Adicionar">Adicionar</button>
        </form>
    </section>


    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
    ?>