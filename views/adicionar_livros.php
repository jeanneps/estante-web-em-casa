<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
    <main id="adicionar_livros">
        <section class="ad_livros">
            <h2 class="box" >Adicionar Livro <img src="/jeane/estante_web/imgs/config.svg" alt="Ícone de Configuração" width="40px" height="40px"></h2>
            <input type="hidden" name="id" value="<?= $livro->id_livro?>">
            <form action="/jeane/Estante_Web/controllers/livro_edit_controller.php">
            <img src="data:image; base64, <?= base64_encode($livro->capa) ?>" alt="">Imagem:</label>
                <input type="file" name="adicionar_imagem" id="adicionar_imagem" accept="image/*">

        
                    <label for="adicionar_titulo">Título:</label>
                    <input type="text" name="adicionar_titulo" id="adicionar_titulo" value="<?=$livro->titulo;?>" placeholder="Digite o Título">

                    <label for="adicionar_autor">Autor:</label>
                    <input type="text" name="adicionar_autor" id="adicionar_autor"  value="<?=$livro->autor;?>" placeholder="Digite o Autor">

                    <label for="adicionar_categoria">Categoria:</label>
                    <input type="text" name="adicionar_categoria" id="adicionar_categoria" placeholder="Digite a Categoria">

                    <label for="sinopse">Sinopse:</label>
                    <textarea name="sinopse"<?=$livro->sinopse;?> id="sinopse" cols="58" rows="10" placeholder="Digite a Sinopse"></textarea>
                    </form>

                <button type="submit" value="Salvar">Salvar</button>
                <form action="/jeane/estante_web/controlles/livro_del_controller.php" method="post" onsubmit="return confirm('Você tem certeza que quer deletar o livro ?')">
                <input type="hidden" nome="id" value="<?= $livro['id_livro'] ?>">
                <button type="submit" value="deletar">Deletar</button>
            </form>
            
        </section>
    </main>

    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
