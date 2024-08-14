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

       <section class="ad_categorias">
            <h2 class="box">Editar Categoria <img src="../imgs/config.svg" alt="ícone de seta" width="30px" height="30px"></h2>
                <form action="">
                <label for="editar categoria"> Edite a categoria:</label>
                <input type="text" name="editar categoria" id="editar categoria" value="" placeholder="Categoria...">
           

            <button type="submit" value="Editar">Editar</button>
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
            <img src="../imgs/facebook.svg" alt="ícone de facebook" width="30px" height="30px">
            <img src="../imgs/instagram.svg" alt="ícone de instagram" width="30px" height="30px">
        </div>

    </footer>

</body>

</html>