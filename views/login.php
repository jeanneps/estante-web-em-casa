<?php
require_once 'cabeçalho.php';
?>

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
    <?php
require_once 'rodapé.php';
?>