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
                echo "<h3 class = 'quebra_linha'>$livro[title]</h3>";
                echo "<p class = 'quebra_linha'><strong>Autor(es):</strong> " . (isset($livro['author_name']) ? implode(", ", $livro['author_name']) : 'N/A') . "</p>";
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
