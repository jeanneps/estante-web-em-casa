<?php 
// Inclui o arquivo de cabeçalho que contém a parte superior do layout da página.
// O caminho é relativo à raiz do servidor, usando $_SERVER['DOCUMENT_ROOT'] para determinar a localização.
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_cabecalho.php';
?>
<main class="quem_somos">
    <!-- Seção principal do conteúdo da página, com a classe 'quem_somos' para estilização -->
    
    <h1 class="box_quemsomos">Quem Somos</h1>
    <!-- Título principal da página, com a classe 'box_quemsomos' para estilização -->

    <p id="quem_somos">
        <!-- Parágrafo que contém uma breve introdução sobre o projeto e a equipe por trás dele -->
        Olá caros amigos, é um prazer enorme ter vocês conosco. Nesse momento queremos
        apresentar esse projeto que está sendo desenvolvido pelos alunos da turma 52 do Curso de Programador Web
        Noturno no Senac do ano de 2024 com a supervisão do Professor Luis Fellipe.
    </p>
</main>
<?php
// Inclui o arquivo de rodapé que contém a parte inferior do layout da página.
// Assim como o cabeçalho, o caminho é relativo à raiz do servidor.
require_once $_SERVER['DOCUMENT_ROOT'] . '/jeane/estante_web/views/_rodape.php';
?>
