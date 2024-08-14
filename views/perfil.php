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
            
                    <label for="Contato">Contato:</label>
                    <input type="tel" id="Contato" name="Contato" placeholder="(XX) XXXX-XXXX" pattern="[0-9]{2} [0-9]{4}-[0-9]{4}" required>
            
               


                    <button type="submit" value="Gravar">Gravar</button>

                   <div><button type="submit" value="Gerenciar Categorias">Gerenciar Categorias</button></div>
                   <div> <button type="submit" value="Gerenciar livros">Gerenciar livros</button></div>
      
    
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