<?php 
// Inclui o arquivo de cabeçalho que contém a parte superior do layout da página.
// O caminho é relativo à raiz do servidor, usando $_SERVER['DOCUMENT_ROOT'] para localizar o arquivo.
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
<main id="contato">
    <!-- Seção principal da página de contato, identificada pelo id 'contato' para estilização e referência -->
    
    <section id="paragrafo">
        <!-- Seção interna para exibir informações de contato, identificada pelo id 'paragrafo' -->
        
        <!-- Parágrafo com link para o Instagram -->
        <p>
            <img src="/jeane/estante_web/imgs/instagram.svg" alt="instagram" width="40px" height="40px">
            <!-- Ícone do Instagram com um tamanho fixo de 40x40 pixels -->
            <a href="https://www.instagram.com/" style="text-decoration: none; color:black;">
                @estante_web
            </a>
            <!-- Link para o perfil do Instagram, estilizado para remover o sublinhado e definir a cor do texto como preto -->
        </p>
        
        <!-- Parágrafo com link para o Facebook -->
        <p>
            <img src="/jeane/estante_web/imgs/facebook.svg" alt="facebook" width="40px" height="40px">
            <!-- Ícone do Facebook com um tamanho fixo de 40x40 pixels -->
            <a href="https://pt-br.facebook.com/" style="text-decoration: none; color:black;">
                @estante_web
            </a>
            <!-- Link para o perfil do Facebook, estilizado para remover o sublinhado e definir a cor do texto como preto -->
        </p>
        
        <!-- Parágrafo com número de telefone -->
        <p>
            <img src="/jeane/estante_web/imgs/telefone.svg" alt="telefone" width="40px" height="40px">
            <!-- Ícone de telefone com um tamanho fixo de 40x40 pixels -->
            (98) 3200-0032
            <!-- Número de telefone fornecido para contato -->
        </p>
        
    </section>
</main>

<?php
// Inclui o arquivo de rodapé que contém a parte inferior do layout da página.
// Assim como o cabeçalho, o caminho é relativo à raiz do servidor.
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
