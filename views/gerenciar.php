<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/Estante_Web/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/jeane/Estante_Web/models/categoria.php';
$categorias = Categoria:: listarCategoria();


?>
<main class="gerenciar_categorias">
    <section class="categorias">
       
    <h2 class="box"> <img src="/jeane/estante_web/imgs/setting.svg" alt="ícone de configuração" width="40px">
        
        Gerenciar Categorias
            
        <button><a href ="/jeane/Estante_Web/Views/ad_categorias.php" >Adicionar</a></button>
        </h2>
     
        <div
         class="categorias2"><p >categorias<input type ="hidden" name="id" value = "<?= $categoria['id_categoria']?>" >
         
         <button style="width: auto;">Editar<a href="/jeane/Estante_Web/Views/editar_categorias.php?id= <?= $categoria['id_categoria']?>"></a>
         </button>
     

        <form action = "/jeane/Estante_Web/controllers/categoria_del_controller.php" method="post" 
        onsubmit = "return confirm ('Você tem certeza que quer deletar esta categoria?')" ><img src="/jeane/estante_web/imgs/lixeira.svg" alt="ícone de apagar" width="30px" height="30px">
    


        </form>

      


        </div>
        <!-- <div class="categorias2">Categorias # 2</div>
        <div class="categorias2">Categorias # 3</div>
        <div class="categorias2">Categorias # 4</div>
        <div class="categorias2">Categorias # 5</div> -->
    </section>

    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
    ?>