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

    <main class="gerenciar_categorias">
      <section class="categorias">
            <h2 class="box"> <img src="../imgs/setting.svg" alt="ícone de configuração" width="40px">Gerenciar Categorias 
                <button type="submit" value="Adicionar">Adicionar</button></h2>

            <div class="categorias2">Categorias # 1
                <img src="../imgs/editar.svg" alt="ícone de editar" width="30px" height="30px"> <img src="../imgs/lixeira.svg" alt="ícone de apagar" width="30px" height="30px"> </div>
            <div class="categorias2">Categorias # 2</div>
            <div class="categorias2">Categorias # 3</div>
            <div  class="categorias2">Categorias # 4</div>
            <div  class="categorias2">Categorias # 5</div>
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