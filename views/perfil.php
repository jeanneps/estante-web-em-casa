<?php
// Inclui o cabeçalho do site
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

<main class="perfil">
    <!-- Seção principal do perfil do usuário -->
    <section class="container_perfil">
        <!-- Título da seção -->
        <h1>Meu Perfil</h1>
        
        <!-- Formulário para edição do perfil -->
        <form>
            <!-- Campo para upload de foto de perfil -->
            <div>
                <label for="foto_de_perfil">Foto de Perfil:</label>
                <input type="file" name="foto_de_perfil" id="foto_de_perfil" accept="image/*">
            </div>

            <!-- Campo para o nome do usuário -->
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome..." required>

            <!-- Campo para o email do usuário -->
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Email..." required>

            <!-- Campo para a senha do usuário -->
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Senha..." required>

                    <button type="submit" value="Gravar">Gravar</button>


                   <!-- <div><button type="submit" value="Gerenciar Categorias">Gerenciar Categorias</button></div>
                   <div> <button type="submit" value="Gerenciar livros">Gerenciar livros</button></div> -->
         </form>

        </section>

      
    </main>
    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
