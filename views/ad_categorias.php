<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

<main class="adicionar_categorias">

    <section class="ad_categorias">
        <h2 class="box">
            Adicionar Categoria 
            <a href="gerenciar.php" >
    <img src="/jeane/estante_web/imgs/config.svg" alt="Ícone de configurações" width="30px" height="30px">
</a>
<div style="margin-top:200px " >
<form action="/jeane/Estante_Web/controllers/categoria_controller.php" method="post">
    <label for="adicionar_categoria"></label>
    <input type="text" name="adicionar_categoria" id="adicionar_categoria" value="">
    <button type="submit" value="Adicionar">Adicionar</button>

</form>
</div>
    </section>


    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
    ?>