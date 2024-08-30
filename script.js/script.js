// -------- INDEX (Carrossel)---------
// // Declara uma variável 'slideInicial' e a inicializa com o valor 1.  Essa variável vai controlar qual slide está sendo mostrado atualmente.
// // Abaixo: Chama a função showSlides passando o valor inicial de slideInicial (1) como argumento. Essa função exibe o slide inicial.
// let slideInicial = 1;
// carrosselLivros(slideInicial);

// // a função "plusSlides" recebe um numero n. Esse número pode ser 1 para avançar ou -1 para retroceder.
// // Incrementa o valor de slideIndex em n e chama a função carrosselLivros com o novo valor de slideInicial.
// // Essa ação acontece quando o usuário clica no botão de avançar ou retroceder
// function botaoSlides(n) {
//     carrossellivros(slideInicial += n);
// }

// // a função "currentSlide" recebe um número n, que representa o índice do slide desejado (1, 2, 3). 
// // Atribui o valor de n à variável slideIndex e chama a função showSlides com o novo valor de slideIndex
// // Essa função é chamada quando o usuário clica em um ponto (indicador) para ir diretamente para um slide específico.
// function slideAtual(n) {
//     carrosselLivros(slideInicial = n);
// }


// function carrosselLivros(n) { //Recebe um número n, que representa o índice do slide a ser exibido.
//     // let i:  variavel de interação usada no for
//     // Obtém todos os elementos com a classe mySlides (os slides) e os armazena na variável slides.
//     // Obtém todos os elementos com a classe ponto (os pontos de navegação) e os armazena na variável pontos.
//     let i;
//     let slides = document.getElementsByClassName("slideAtual");
//     let pontos = document.getElementsByClassName("ponto");


//     // Verifica se n é maior que o número total de slides. Se for, redefine slideIndex para 1 (volta ao primeiro slide).
//     if (n > slides.length) { 
//         slideInicial = 1 
//     }
    
//     // Verifica se n é menor que 1. Se for, slideIndex é redefinido para o número total de slides (vai para o último slide).
//     if (n < 1) { 
//         slideInicial = slides.length 
//     }
    
//     // Itera por todos os slides e define style.display como none, e oculta todos os slides
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
    
//     // Itera por todos os pontos de navegação e remove a classe active de cada um .
//     // Acessa o elemento atual do array 'pontos' usando o índice i. 
//     // Obtém a string de classes CSS atribuídas ao elemento ponto através da propriedade className.
//     // Remove a classe "active" da string usando o método replace(), substituindo " active" por uma string vazia.
//     for (i = 0; i < pontos.length; i++) {
//         pontos[i].className = pontos[i].className.replace(" active", "");
//     }
    
//     // Faz com que o slide atual seja exibido na tela usando o valor "block"
//     // Aqui está ajustando o índice para corresponder à posição real do elemento no array. Se o slideIndex é 1 por exemplo, ao subtrair 1, será obtido o índice 0, que é exatamente o primeiro elemento do array slides e com o valor "block" torna esse slide visivel.
//     slides[slideInicial - 1].style.display = "block";
    
//     // Aqui no mesmo sentido, localiza o slide atual pelo indice no array e adiciona a class active destacando o ponto visualmente como slide atual
//     pontos[slideInicial - 1].className += " active";
// }

// teste
let count = 1;
document.getElementById("radio1").checked = true;
setInterval (function(){
    nextImage();
}, 3000)

function nextImage(){
    count++;
    if(count > 3){
        count = 1;
    }
    document.getElementById("radio"+ count).checked = true;

}


