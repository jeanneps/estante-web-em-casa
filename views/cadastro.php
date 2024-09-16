<?php
// Inclui o arquivo de cabeçalho que contém a parte superior do layout da página.
// O caminho é relativo à raiz do servidor, usando $_SERVER['DOCUMENT_ROOT'] para localizar o arquivo.
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>

<main class="cadastro">
    <!-- Seção principal da página de cadastro, com a classe 'cadastro' para estilização -->
    <section class="box_cadastro">
        <!-- Seção específica dentro do main, com a classe 'box_cadastro' para estilização -->
        
        <h1>Crie sua conta</h1>
        <!-- Título principal da seção, indicando a ação de criar uma nova conta -->

        <form action="/jeane/estante_web/controllers/usuarios_controller.php" method="post" enctype="multipart/form-data">
            <!-- Formulário para criar uma nova conta. O 'action' define o endpoint que processará os dados do formulário, e o 'method="post"' indica que os dados serão enviados via POST -->
            <!-- 'enctype="multipart/form-data"' é necessário para permitir o envio de arquivos -->

            <div>
                <!-- Seção para upload de foto de perfil -->
                <label for="foto">Foto de Perfil:</label>
                <!-- Label associada ao campo de input de arquivo -->
                <input type="file" name="foto_perfil" id="foto" accept="image/*">
                <!-- Campo para selecionar uma foto de perfil. 'accept="image/*"' limita a seleção a arquivos de imagem -->
            </div>
            
            <div>
                <!-- Seção para entrada do nome -->
                <label for="nome">Nome:</label>
                <!-- Label associada ao campo de entrada de texto para o nome -->
                <input type="text" name="nome" id="nome" placeholder="Seu nome..." required>
                <!-- Campo para o nome do usuário. 'required' faz com que o campo seja obrigatório -->
            </div>
            
            <div>
                <!-- Seção para entrada do email -->
                <label for="email">Email:</label>
                <!-- Label associada ao campo de entrada de texto para o email -->
                <input type="email" name="email" id="email" placeholder="Seu email..." required>
                <!-- Campo para o email do usuário. 'type="email"' valida o formato do email e 'required' faz com que o campo seja obrigatório -->
            </div>
            
            <div>
                <!-- Seção para entrada da senha -->
                <label for="senha">Senha:</label>
                <!-- Label associada ao campo de entrada de senha -->
                <input type="password" name="senha" id="senha" placeholder="Crie uma senha..." required>
                <!-- Campo para a senha do usuário. 'type="password"' oculta o texto digitado e 'required' faz com que o campo seja obrigatório -->
            </div>
            
            <button type="submit" value="Criar">Criar</button>
            <!-- Botão de envio do formulário. O valor do botão 'Criar' será enviado junto com o formulário -->
        </form>

    </section>
    <!-- A seção 'box_cadastro' é comentada para possibilitar a adição de uma área para login existente no futuro, se necessário -->
    <!-- <div class="box2">já tem cadastrado? acesse sua conta </div> -->

</main>

<?php
// Inclui o arquivo de rodapé que contém a parte inferior do layout da página.
// Assim como o cabeçalho, o caminho é relativo à raiz do servidor.
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
