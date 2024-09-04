<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/Estante_Web/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/jeane/Estante_Web/models/categoria.php';
$categorias = Categoria::listarCategoria();
?>
<main class="gerenciar_categorias">
    <section class="categorias">
        <h2 class="box">
            <img src="/jeane/estante_web/imgs/setting.svg" alt="ícone de configuração" width="40px">
            Gerenciar Categorias
            <button><a href="/jeane/Estante_Web/Views/ad_categorias.php">Adicionar</a></button>
        </h2>
        <?php foreach ($categorias as $categoria): ?>
        <div class="categorias2">
            <p><?= htmlspecialchars($categoria['nome_categoria']) ?></p>
          
            <form action="/jeane/Estante_Web/controllers/categoria_edit_controller.php">
          
            <input type="hidden" name="id_categoria" value="<?= htmlspecialchars($categoria['id_categoria']) ?>">
            </form>
            <button style="width: auto;">
                <a href="/jeane/Estante_Web/Views/editar_categorias.php?id=<?= htmlspecialchars($categoria['id_categoria']) ?>">Editar</a>
            </button>
            
            <form action="/jeane/Estante_Web/controllers/categoria_del_controller.php" method="post" onsubmit="return confirm('Você tem certeza que quer deletar esta categoria?')">
                <input type="hidden" name="id" value="<?= htmlspecialchars($categoria['id_categoria']) ?>">
                <button type="submit"style="width: auto;">Deletar
                    <!-- <img src="/jeane/estante_web/imgs/lixeira.svg" alt="ícone de apagar" width="30px" height="30px"> -->
                </button>
            </form>
        </div>
        <?php endforeach; ?>
    </section>
</main>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
