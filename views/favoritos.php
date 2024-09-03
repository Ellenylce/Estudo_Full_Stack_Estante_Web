<?php
require_once 'cabecalho.php';
// Adicionei testando favoritar abaixo:
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/favoritos.php';
// require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/categoria.php';

// $categorias = Categoria::listarCategoria();

$listagem_favorito = Favorito::listarLivroFavorito($_SESSION['id_usuario']);
?>

    <main>
    <!-- <div class="barra_menu_categoria">
        <button class="menu-categorias">
            <img src="../imgs/seta_more.svg" alt="Menu_categorias" width="30" height="30">
        </button>
    </div> -->

    <section class="alinhar_barra_Lateral"> <!--principal-->
        <div class="barra_Lateral">
            <div class="block_categorias"><a href="#Livros Educativos">Livros Educativos</a></div>
            <div class="block_categorias"><a href="#Livros Religiosos">Livros Religiosos</a></div>
            <div class="block_categorias"><a href="#Livros de Romance">Livros de Romance</a></div>
            <div class="block_categorias"><a href="#Livros de Ficcao Cientifica..">Livros de Ficção...</a></div>
            <div class="block_categorias"><a href="#Livros de aventura">Livros de Aventura</a></div>
            <div class="block_categorias"><a href="#Livros Infantis">Livros Infantis</a></div>

        </div>

        

        <!-- <div > contem o box books -->
            <section class="box_books">
                <div class="centralizar_icone_mais">

                    <!-- Adicionar código favoritar -->

                    <div class ="livros_favoritos">
                        <?php foreach ($listagem_favorito as $favorito) : ?>
                        <div class="livro_favorito">
                            <img class = "img_livro" src="data:image; base64, <?= base64_encode($favorito['capa']) ?>" alt="" />
                            <h1><?= $favorito['titulo'] ?></h1>
                            <span class="coracao-icon"><img src="../imgs/bookmark-icon.svg" alt="" /></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                   
                           

                    <!-- Finalizar código favoritar -->



                    <!-- <p class="text_biblioteca_vazia">Sua biblioteca está vazia -->
                        <!-- <a href="#Adicionar_livros" ><img src="../imgs/icone_mais.svg" alt="Adicionar Livros" width="50" height="50"></a>Sua biblioteca está vazia</a> -->
                    </p>
                </div>
            </section>
        <!-- </div>  -->
    </section>
    </main> 

    <?php require_once 'rodape.php';?>