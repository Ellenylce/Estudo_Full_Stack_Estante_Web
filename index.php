


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <script src="script.js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css"> <!--Se conceta com CSS-->
    <!--Importando a letra Special elite-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>

</head>
<body>
    <header> <!--Cabeça-->
        <div class="logo-busca">
            <h1 class ="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            <form role="search" action="" method="get"> <!--Formulário/ action: significa quem receberá/ role="search: tornar a pesquisa acessível"-->
<!-- Depois apago -->
                <div class="caixa_busca">

                    <!--<div class="icone_pesquisa">
                        <img src="imgs/busca.svg" alt="" width="20px" height ="20px"> 
                    </div>
                    <div class="alinhar_input">
                        <input  type="search" name="busca" id="busca" >
                    </div>
                    <div class="icone_pesquisa">
                        <img src="imgs/microfone.svg" alt="" width="20px" height ="20px">
                    </div> -->
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
    <nav> <!--seção de navegação-->
        <a href="index.html">Início</a> <!--links das seções-->
        <a href="views/quem_somos.html">Quem Somos</a>
        <a href="views/contato.html">Contato</a>
        <a href="views/favoritos.html" class="alinhar_verticalmente"><img src="imgs/star.png" alt="" width="20px" height ="20px">Favoritos</a>
        <a href="views/login.html">Login</a>

    </nav>
    
    <main id="index">
    <!-- Inicio carrossel -->
    <section id = "body-index">
        <div class = "slider">
            <div class = "slides">
                 <!-- Radio buttons -- -->
                <input type = "radio" name ="radio-btn" id="radio1">
                <input type = "radio" name ="radio-btn" id="radio2">
                <input type = "radio" name ="radio-btn" id="radio3">
                <!-- Fim radio buttons -->

                <!-- -- slides imagens -- -->
                <div class="slide first">
                    <img src ="imgs/capa1-biblioteca.jpg">
                </div>
                <div class="slide">
                    <img src ="imgs/capa2-biblioteca.png">
                </div>
                <div class="slide ">
                    <img src ="imgs/capa3-biblioteca.jpg">
                </div>
               <!-- -- Fim slides imagens -- -->

               <!-- -- Navegação auto -- -->
                <div class = "navigation-auto">
                    <div class = "auto-btn1"></div>
                    <div class = "auto-btn2"></div>
                    <div class = "auto-btn3"></div>
                </div>
                 <!-- -- Fim Navegação auto -- -->
            </div>
            <div class ="manual-navigation">
                <label for="radio1" class ="manual-btn"></label>
                <label for="radio2" class ="manual-btn"></label>
                <label for="radio3" class ="manual-btn"></label>
            </div>
        </div>

        <!-- Consumo da API -->
        <div class = "container-livros">
        <?php
    if (isset($_GET['titulo'])) {
        $titulo = $_GET['titulo'];
        $url = "https://openlibrary.org/search.json?title=" . urlencode($titulo);
        $dados = file_get_contents($url);
        $resultados = json_decode($dados, true);

//  Verifica se há resultados:
// Se houver resultados:
// Cria um container: Cria uma div com a classe container para agrupar os resultados.
// Percorre os resultados: Itera sobre o array de livros usando um foreach.
// Para cada livro:
// Extrai a capa: Verifica se existe uma capa disponível na API e monta a URL da imagem.
// Cria a estrutura do livro: Cria divs para o container da capa (capa-container) e informações do livro (info-livro).
// Capa: Exibe a imagem da capa se disponível, caso contrário, exibe uma mensagem indicando que o livro não possui capa.
// Informações: Exibe o título, autores, número de páginas (se disponíveis) do livro.
// Fecha a div container.
// Se não houver resultados: Exibe uma mensagem informando que nenhum livro foi encontrado para o título buscado.

// verifica se a chave 'docs' existe dentro do array $resultados.
// Essa chave, de acordo com a documentação da API Open Library, contém um array de documentos (livros) encontrados na busca.
// conta o numero de elementos e ver se é maior que 0

        if (isset($resultados['docs']) && count($resultados['docs']) > 0) {
            echo "<div class='container-livros'>";

// Percorre os livros      
// $capa = isset($livro['cover_i']) ? ... : "";
// Verifica se a chave 'cover_i' existe no array $livro. Se existir, significa que o livro possui uma capa.
// Se a capa existir, a variável $capa recebe a URL da imagem da capa, construída com base no ID da capa.
// Se não existir, $capa recebe uma string vazia.

            foreach ($resultados['docs'] as $livro) {
                $capa = isset($livro['cover_i']) ? "https://covers.openlibrary.org/b/id/" . $livro['cover_i'] . "-L.jpg" : "";
                echo "<div class='livro'>";
                echo "<div class='capa-container'>";
                if ($capa) {
                    echo "<img class='capa' src='$capa' alt='Capa de $livro[title]'>";
                } else {
                    echo "<p class='sem-capa'>Livro não contém capa</p>";
                }

                // Exibe as outras informações dos livros
                echo "</div>";
                echo "<div class='info-livro'>";
                echo "<h3>$livro[title]</h3>";
                echo "<p><strong>Autor(es):</strong> " . (isset($livro['author_name']) ? implode(", ", $livro['author_name']) : 'N/A') . "</p>";
                echo "<p><strong>Páginas:</strong> " . (isset($livro['number_of_pages_median']) ? $livro['number_of_pages_median'] : 'N/A') . "</p>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>Nenhum livro encontrado para o título '$titulo'.</p>";
        }
    }
    ?>

        </div>
        <!-- Fim do codigo para consumo de API -->

    </section>
    <!-- FIM do carrossel -->

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



