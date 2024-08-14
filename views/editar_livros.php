<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estante Web</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imgs/favicon.icon.jpg" type="image/x-icon">

</head>

<body>
    <header>
        <div class="logo-busca">
            <h1>Estante Web</h1>

            <form action="">
                <label for="busca">Busca</label>
                <input type="search" name="busca" id="busca"style="width: 200px; height: 25px;">
            </form>

        </div>

    </header>
    <nav aria-label="Navegação principal">
        <a href="../index.html">inicio</a>
        <a href="quem_somos.html">Quem somos</a>
        <a href="contato.html">Contato</a>
        <a href="favoritos.html" class="alinhar">
            <img src="../imgs/star.png.png" alt="ícone de favoritos" width="20px" height="20px">
            Favoritos
        </a>
        <a href="login.html">Login</a>
    </nav>

    <main class="adicionar_categorias">

        <section class="ad_livros">
            <h2 class="box">Editar Livro <img src="../imgs/config.svg" alt="ícone seta" width="40px" height="40px"></h2>

            <form action="">
                <div>
                    <label for="adicionar imagem">Imagem:</label>
                    <input type="file" name="adicionar imagem" id="adicionar_imagem" accept="image/*">
                </div>
                    <label for="adicionar titulo">Titulo:</label>
                    <input type="text" name="adicionar titulo" id="adicionar titulo" value="" placeholder="Digite o Titulo...">

                    <label for="adicionar autor">Autor:</label>
                    <input type="text" name="adicionar autor" id="adicionar autor" value="" placeholder="Digite o Autor...">

                    <label for="adicionar categoria">Categoria:</label>
                    <input type="text" name="adicionar categoria" id="adicionar categoria" value="" placeholder="Digite a Categoria...">

                    <label for="sinopse">Sinopse:</label>
                    <textarea name="Digite a sinopse" id="sinopse" cols="58" rows="10">Digite a Sinopse...</textarea placeholder="Digite a Sinopse ">
               

               <button type="submit" value="Salvar">Salvar</button>
               <button type="submit" value="Deletar">Deletar</button>
            </form>
        </section>
    </main>
    <footer>
        <div id="copy">
            &copy; Estante web
        </div>
        <div>
            todos os direitos reservados
        </div>
        <div>
            <img src="../imgs/facebook.svg" alt="ícone do facebook" width="30px" height="30px">
            <img src="../imgs/instagram.svg" alt="ícone do instagram" width="30px" height="30px">
        </div>

    </footer>

</body>

</html>