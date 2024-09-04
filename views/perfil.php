<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';

?>
    <main class="perfil">
       <section class="container_perfil">
            <h1>Meu Perfil</h1>
            <form>
                <div>
                    <label for="foto_de_perfil">Foto de Perfil:</label>
                    <input type="file" name="foto_de_perfil" id="foto_de_perfil" accept="image/*">
                </div>
               
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome..." required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Email..." required>
               
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="senha..." required>

                    <button type="submit" value="Gravar">Gravar</button>


                  
                   <div> <a href="/jeane/Estante_Web/views/gerenciar.php" class="button">Gerenciar Categorias</a></div>
                   <div> <a href="/jeane/Estante_Web/views/gerenciar_livros.php" class="button">Gerenciar Livros</a></div>

                </form>

    
        </section>

      
    </main>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
