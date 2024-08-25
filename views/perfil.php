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
            <h1 class="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
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
        <div class="box_perfil">
            <div class="alinhar_coluna_esquerda">  
                <p>Meu perfil</p>
                <label  for="adicionar_foto">
                    <img class="moldura_perfil"style="width: 150px;height:150px;"src="../imgs/usuario.png" alt="" >
                    <input class="input_file" type="file" name="adicionar_foto" id="adicionar_foto" accept=".png, .jpeg">
                </label>
                    <div class="botao_container">
                        <button class="botoes_gerenciar" style="width: 40%">Gerenciar Categorias</button>
                        <button class="botoes_gerenciar" style="width: 40%">Gerenciar Livros</button>
                     </div>
                
            </div>
            <div class="alinhar_coluna_direita">
                <span style="margin-top:20px;" class="alinha_text_esquerda">Nome:</span>
                    <input type="text" placeholder="Digite seu nome" required style="width: 80%; margin-bottom: 10px;">
                <span class="alinha_text_esquerda">E-mail:</span>
                    <input type="email" placeholder="Digite seu email" required style="width: 80%; margin-bottom: 10px;">
                <span class="alinha_text_esquerda">Senha:</span>
                    <input type="senha" placeholder="Digite sua senha" required style="width: 80%; margin-bottom: 10px;">
                <span class="alinha_text_esquerda">Contato:</span>
                    <input type="contato" placeholder="Digite seu contato" required style="width: 80%; margin-bottom: 10px;">
                    <button class="botao_gravar" >GRAVAR</button>
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