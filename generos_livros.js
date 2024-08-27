function buscarRomance() {
  const url = "https://openlibrary.org/search.json?subject=romance";

  fetch(url)
    .then(response => response.json())
    .then(data => {
      const resultados = data.docs;
      const container = document.getElementById('resultados');

      if (resultados.length > 0) {
        let html = '';
        resultados.forEach(livro => {
          const capa = livro.cover_i ? `https://covers.openlibrary.org/b/id/${livro.cover_i}-L.jpg` : '';
          html += `
            <div class="livro">
              <div class="capa-container">
                ${capa ? `<img class="capa" src="${capa}" alt="Capa de ${livro.title}">` : '<p class="sem-capa">Livro não contém capa</p>'}
              </div>
              <div class="info-livro">
                <h3>${livro.title}</h3>
                <p><strong>Autor(es):</strong> ${livro.author_name ? livro.author_name.join(', ') : 'N/A'}</p>
                <p><strong>Páginas:</strong> ${livro.number_of_pages_median || 'N/A'}</p>
              </div>
            </div>
          `;
        });
        container.innerHTML = html;
      } else {
        container.innerHTML = '<p>Nenhum livro de romance encontrado.</p>';
      }
    })
    .catch(error => {
      console.error('Erro ao buscar livros:', error);
    });
}

window.onload = function() {
  buscarRomance();
};




//    $botao = document.getElementById('meuBotao');
//    botao.addEventListener('click', buscarRomance);




//     function buscarRomance(){
    

//     // Busca por livros de romance
//     $url = "https://openlibrary.org/search.json?subject=romance";
//     $dados = file_get_contents($url);
//     $resultados = json_decode($dados, true);

//     // var_dump($resultados);

//     if (isset($resultados['docs']) && count($resultados['docs']) > 0) {
//         echo "<div class='container'>";

//         foreach ($resultados['docs'] as $livro) {

        
//             $capa = isset($livro['cover_i']) ? "https://covers.openlibrary.org/b/id/" . $livro['cover_i'] . "-L.jpg" : "";
//                 echo "<div class='livro'>";
//                 echo "<div class='capa-container'>";
//                 if ($capa) {
//                     echo "<img class='capa' src='$capa' alt='Capa de $livro[title]'>";
//                 } else {
//                     echo "<p class='sem-capa'>Livro não contém capa</p>";
//                 }

//                 // Exibe as outras informações dos livros
//                 echo "</div>";
//                 echo "<div class='info-livro'>";
//                 echo "<h3>$livro[title]</h3>";
//                 echo "<p><strong>Autor(es):</strong> " . (isset($livro['author_name']) ? implode(", ", $livro['author_name']) : 'N/A') . "</p>";
//                 echo "<p><strong>Páginas:</strong> " . (isset($livro['number_of_pages_median']) ? $livro['number_of_pages_median'] : 'N/A') . "</p>";
//                 echo "</div>";
//                 echo "</div>";
//         }

//         echo "</div>";
//     } else {
//         echo "<p>Nenhum livro de romance encontrado.</p>";
//     }

   
// }




