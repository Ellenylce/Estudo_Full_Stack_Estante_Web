
<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/auth/auth.php';
?>

<!-- Cabeçalho único -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <script src="script.js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css"> <!--Se conceta com CSS-->
    <!-- Adicionando o link do booststrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <!-- Importanto icon favoritar -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Importando a letra Special elite-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>

</head>
<body>
    <header> <!--Cabeça-->
        <div class="logo-busca">
            <h1 class ="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            <form role="search" action="" method="get"> 
                <!--Formulário/ action: significa quem receberá/ role="search: tornar a pesquisa acessível"-->
                <div class="caixa_busca">

                    <button type="submit" class="icone_pesquisa">
                        <img src="imgs/busca.svg" alt="Buscar" width="20" height="20">
                    </button>
                    <input type="search" name="titulo" id="busca" placeholder="Pesquise por título" autocomplete="off">
                    <button type="button" class="icone_pesquisa">
                        <img src="imgs/microfone.svg" alt="Pesquisar por voz" width="20" height="20">
                    </button>
                </div>
                <!--type=especifica que tipo de processamento nesse caso é de busca/ name="busca: identifica o campo de entrada -->
            </form>
        </div>
    </header>
<!------Barra de navegação -->
    <section class = "botton-header">
        <nav> 
            <ul>
                <li><a href="/ellen_karla/Estante-Web/index.php">Início</a></li> <!--links das seções-->
                <li><a href="/ellen_karla/Estante-Web/views/quem_somos.php">Quem Somos</a></li>
                <li><a href="/ellen_karla/Estante-Web/views/contato.php">Contato</a></li>

                <!-- Se estiver logado  -->
                <?php if((Auth:: estarLogado())): ?>
                
                <!-- Verifica se é Usuário comum -->
                <li class = "alinhar_imagem">
                     <a href="/ellen_karla/Estante-Web/views/favoritos.php" class = "text"><img src="imgs/star.png" alt="" width="20px" height ="20px" style="margin-left: 10px;" class = "imagem_alinhar">Favoritos
                    </a>
                </li>   
                <li class = "drop-hover alinhar_imagem"><a href="#" class = "text" > Olá, <?= $_SESSION['nome_user'] ?> <i class="bi bi-caret-down-fill imagem_drop"></i></a>
                <!-- dropdown -->
                    <div class = "drop">

                    <!-- Adicionei para editar perfil -->
                    <a href="/ellen_karla/Estante-Web/views/perfil_user.php">Meu Perfil</a>

                    <!-- por no ahref acima ?id=<interrogção=$usuario['id_usuario']?> -->
                    <!--  -->
                        <!-- <a href="/ellen_karla/Estante-Web/views/perfil_user.php">Meu Perfil</a> -->
                        <a href="/ellen_karla/Estante-Web/controllers/logout_controller.php">Encerrar Sessão</a>
                    </div>
                <li>
                    
                <?php else : ?>
                    <!-- se não estiver logado -->
                <li class = "drop-hover alinhar_imagem"><a href="#" class = "text" > Olá, usuário <i class="bi bi-caret-down-fill imagem_drop"></i></a>
                <!-- dropdown -->
                    <div class = "drop">
                        <a href="/ellen_karla/Estante-Web/views/login.php">Login</a>
                        <a href="/ellen_karla/Estante-Web/views/cadastro.php">Cadastro</a>
                    </div>
                <li>
                <?php endif;?> 
                <!-- Finaliza a verificação de usuário comum -->   

                <!-- verifica se é ADM  está dando erro-->
                <!-- adicionei para apagar -->
               
                
                
                    
                    <!-- para apagar -->


                <!-- Finaliza se é adm -->

            </ul>
        </nav>
    </section>
  
    
    <!-- BODY -->
    <main id="index">
   
    <!-- vai conter o carrossel e os livros -->
    <section id = "body-index">
    <?php
    //  -- Inicio carrossel --
    require_once 'carrossel_livros.php';
    // -- fim carrossel --
    ?>

    <!-- Filtrar Livros -->
    <div class="filtrar-genero">
        <ul>
            <li><button class="botao-genero" >Educativo</button></li>
            <li><button class="botao-genero" >Religioso</button></li>
            <li><button class="botao-genero" onclick="buscarRomance()">Romance</button></li>
            <li><button class="botao-genero" >Ficção</button></li>
            <li><button class="botao-genero" >Aventura</button></li>
            <li><button class="botao-genero" >Infantis</button></li>
            </ul>
            <div id="resultados"></div>   
    </div>
    <!-- Fim -->




    <!-- CARDs DE EXIBIÇÃO DE LIVROS  -->
    <?php
    //  require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/controllers/exibir_livros_controller.php';
    // require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/controllers/livro_controller.php';
     require_once $_SERVER['DOCUMENT_ROOT'].'/ellen_karla/Estante-Web/models/livros.php';
     $livros = livros::mostrarLivros();
    ?>
   <!--  recupera os dados binários da capa do livro 
Os dados binários são codificados em base64.
A string codificada em base64 é inserida no atributo src da tag <img>, junto com o tipo MIME da imagem, criando uma URL de dados que o navegador pode interpretar e exibir a imagem -->
    <div class="livros">
        <!-- Ao clicar no livro -->
        <?php foreach ($livros as $livro): ?>
            <div class="livro">
                <a href="/ellen_karla/Estante-Web/views/exp_livro.php?id=<?= htmlspecialchars($livro['id_livro']) ?>">
                <img class = "img_livro" id="capa" src="data:image/jpeg;base64, <?= base64_encode($livro['capa']); ?>" alt="capa de livro">
                </a>
                <h2><?= htmlspecialchars($livro['titulo']); ?></h2>
                <p><?= htmlspecialchars($livro['autor']); ?></p>
           
                <!-- Teste -->
               


<!-- // Verifica se o usuário está logado -->
                
    <!-- // Usuário está logado, exibe o formulário -->
                <?php if(Auth:: estarLogado()): ?>
            <span>
                <form action="/ellen_karla/Estante-Web/controllers/fav_livro_controller.php" method="post">
                    <input type="hidden" name="id_livro" value="<?= $livro['id_livro']?>">
                    <input type="hidden" name="id_usuario" value="<?= $_SESSION['id_usuario']?>">
                    <button type="submit">
                        <img src="imgs/coracao_icon_preto.svg" alt="favoritar" style="width: 30px; height: 30px;"/>
                    </button>
                </form>
            </span>

            <?php else : ?>  
    <!-- // Usuário não está logado, cria um link que redireciona para a página de login -->
            <a href="/ellen_karla/Estante-Web/views/login.php">
            <button type="button">
                <img src="imgs/coracao_icon_preto.svg" alt="favoritar" style="width: 30px; height: 30px;"/>
            </button>
            </a>
            <?php endif;?> 

        </div>
<!-- </a> -->
    <?php endforeach; ?>
</div>



 

                
 <!-- Finaliza card -->
 



    <?php
    // Consumo de API de livros
    require_once 'consumo_api.php';
    // Fim do codigo API
    ?>  
    </section>
    <!-- FIM do codigo -->
 
       

    </main> 
    


    <footer>
        <div id="copy">
            &copy; Estante Web
        </div>
        <div>
            Todos os direitos reservados
        </div>
        <div class="img-fim">
            <a href="https://www.instagram.com/"><img src="imgs/facebook.svg"alt="" width="30px" height="30px"></a>
            <a href="https://www.facebook.com/"><img src="imgs/instagram.svg"alt="" width="30px" height="30px"></a>
        </div>
    </footer> <!--rodapé-->
    
</body>
</html>



