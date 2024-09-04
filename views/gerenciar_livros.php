<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

    <main class="adicionar_categorias">

       <section class="gerenciar_livros2">
            <h2 class="box">
                <img src="/jeane/estante_web/imgs/setting.svg" alt="ícone de configuração" width="30px" height="30px">
                Gerenciar Livros 
                <img src="/jeane/estante_web/imgs/config.svg" alt="ícone de seta" width="30px" height="30px"> </h2>
                
               <div> <a href="/jeane/Estante_Web/views/adicionar_livros.php" class="button">Adicionar</a></div>
           <div>   <a href="/jeane/Estante_Web/views/editar_livros.php" class="button">Editar</a></div>
        </section>
        
 
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>