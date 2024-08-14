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
                <label for="busca">Buscar</label>
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

    <main class="usuario">
       <section class="box_usuario">

            <h1>Acesse sua conta</h1>

            <form>
               <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required autocomplete="email">
           

                
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                


                <button type="submit" value="Entrar">Entrar</button>


                <div>Esqueceu sua senha </div>

            </form>

        </section>

      
        <h4>Ainda não é cadastrado?</h4>
        <h4><a href="../views/cadastro.html">Crie sua conta</a></h4>



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