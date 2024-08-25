<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <link rel="stylesheet" href="../css/style.css"> <!--Se conceta com CSS-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>

</head>
<body>
    <header> <!--Cabeça-->
        <div class="logo-busca">
            <h1  class="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            <form action=""> <!--Formulário/ action: significa quem receberá-->
                <div class="caixa_busca">
                    <div class="icone_pesquisa">
                        <img src="../imgs/busca.svg" alt="" width="20px" height ="20px"> 
                    </div>
                    <div class="alinhar_input">
                        <input  type="search" name="busca" id="busca" >
                    </div>
                    <div class="icone_pesquisa">
                        <img src="../imgs/microfone.svg" alt="" width="20px" height ="20px">
                    </div>
                </div>
            </form>

        </div>
    </header>
    <nav> <!--seção de navegação-->
        <a href="../index.html">Início</a> <!--links das seções-->
        <a href="quem_somos.html">Quem Somos</a>
        <a href="contato.html">Contato</a>
        <a href="favoritos.html" class="alinhar_verticalmente"><img src="../imgs/star.png" alt="" width="20px" height ="20px">Favoritos</a>
        <a href="login.html">Login</a>

    </nav>
    
    <main class="centralizar_main"> <!--principal-->

        <!-- O container que vai conter -->
       <div class ="box_adm">
        <div class="titulo">
            <h2>Editar Livro</h2>
            <span class="icone"><img src="../imgs/icone_retroceder.svg" alt="" width="30px" heigth ="30px"></span>
        </div>

        <div class="form_adm_livro">
                <div class ="upload_livro">
                    <!-- <input type="file" accept="image/*" required> -->
                    <!-- <label id="livro_upload" for="livro_upload"> -->
                    <!-- <img src="../imgs/icone_upload_foto.svg" alt="" width="20px" height="20px">Adicionar Livro -->
                    <!-- </label> -->
                    <label class="livro_input" for="editar_livro">
                        <img src="../imgs/icone_upload_foto.svg" alt="" width="20px" height="20px">Editar Livro
                    </label>
                    <input type="file" name="editra_livro" id="editar_livro" accept=".png, .jpeg">
                </div>
                <div class="input">
                    <input type="text" placeholder="Digite o título" required style="width: 95%; margin-bottom: 10px;">
                    <input type="text" placeholder="Digite o autor" required style="width: 95%; margin-bottom: 10px;">
                    <!-- Uma caixa para selecionar as categorias -->
                    <select required style="width: 95%">
                        <option value="" disabled selected>Categoria</option>
                        <option value="Romance">Romance</option>
                        <option value="Terror">Terror</option>
                        <option value="Religioso">Religioso</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Educação">Livros Educativos</option>
                 </select>
                </div>
        </div>

        <!-- Sinopse -->
        <div class="sinopse">
            <textarea rows="7" placeholder="Digite a sinopse" required style="width:100%"></textarea>
        </div>
        <!-- Bootões de ENVIAR e APAGAR -->
        <div class="buttoes">
            <button class="botao" type="submit">Salvar</button>
            <button class="botao" type="reset">Deletar</button>
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