
<?php require_once 'cabecalho_adm.php';?>
    
    <main class="centralizar_main"> <!--principal-->

        <!-- O container que vai conter -->
        <div class ="box_gerenciar_livros">
            <div class="titulo_container">
                <a href="configuracao.html">
                    <img  src="../imgs/icone_config.svg" alt="" width="30px" heigth ="30px">
                </a>
                <h2>Gerenciar Livros</h2>
                
                <a href="retroceder_pagina.php">
                    <img class="icone_retroceder" src="../imgs/icone_retroceder.svg" alt="" width="30px" heigth ="30px">
                </a>
            </div>

            <!-- Body box:Gerenciar Livros -->
            
                <div class="buttoes_vertical">

                    <!-- adicionar Livro -->
                    <button class="botoes_gerenciar_livros" type="submit"> <a href="/ellen_karla/Estante-Web/views/adicionar_livro.php" class = "tira_decoration">Adicionar Livro</a></button>
                  
                    <!-- Editar Livro -->
                    <button class="botoes_gerenciar_livros" type="reset"><a href="/ellen_karla/Estante-Web/views/editar_livro.php" class = "tira_decoration">Editar Livro</a></button>
                </div> 
            
        </div>
           
    </main> 

    <footer>
        <div id="copy">
            &copy; Estante Web
        </div>
        <div>
            Todos os direitos reservados
        </div>
        <div class="img-fim">
            <img src="../imgs/facebook.svg"alt="" width="30px" height="30px">
            <img src="../imgs/instagram.svg"alt="" width="30px" height="30px">
        </div>
    </footer> <!--rodapé-->
    
</body>
</html>