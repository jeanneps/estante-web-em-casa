<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/Estante_Web/models/categoria.php';

$id_categoria = isset($_GET['id_categoria']) ? $_GET['id_categoria'] : null;

if ($id_categoria) {
    $categoria = new Categoria($id_categoria);
} else {
    echo "ID da categoria não fornecido.";
    exit;
}
?>

<main class="adicionar_categorias">
    <section class="ad_categorias">
        <h2 class="box">Editar Categoria <img src="/jeane/estante_web/imgs/config.svg" alt="ícone de seta" width="30px" height="30px"></h2>


        <form action="/jeane/Estante_Web/controllers/categoria_edit_controller.php" method="post">
            <label for="editar_categoria">Edite a categoria:</label>
            <input type="hidden" name="id" value="<?= $categoria->id_categoria?>">


            <input type="text" placeholder="Digite o nome da categoria" required style="width: 70%; margin-top: 20px;" id = "nome" name = "nome" value = "<?=$categoria->nome_categoria;?>">
                        <button style="width: 50%; margin-bottom: 20px;padding:10px;background-color: var(--primaria);border:none">ATUALIZAR</button>
            <!-- <button type="submit" value="Editar">Editar</button> -->
        </form>
    </section>
</main>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>