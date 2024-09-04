<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ellen_karla/Estante-Web/models/livros.php';
$livros = Livros:: mostrarLivros();

?>

<?php require_once 'cabecalho_adm.php';?>
    
    <main class="centralizar_main"> <!--principal-->

        
        <div class="box_gerenciar_categorias">
            <div class="box_titulo">
                <div class="alinhar_esquerda">
                    <div>
                        <!-- Aqui inseri o ícone de configuração -->
                        <img src="../imgs/icone_config.svg" alt="" width="30px" heigth ="30px" style="margin-right: 5px;">
                    </div>
                    <div class="titulo_gerenciar_categorias">
                        <h3>Gerenciar Livros</h3>
                    </div>
                </div>
                <!-- <button class="botao_adicionar">Adicionar</button>-->

                <!-- Botão Adicionar Livro -->
                <button class="botao_adicionar"><a href ="adicionar_livro.php" class = "tira_decoration">Adicionar</a></button>
            </div>
            <!-- body grenciar livros -->
            <div class="alinhar_vertical">
             
            <!-- Reaproveitamento de código de categoria, depois corrigir -->

                    <!-- Corrrigir esse codigo depois -->

                <?php foreach($livros as $livro): ?>
                <div class="alinhar_categorias_adicionadas">
                        <span class="categorias_adicionadas">
                            <div class = "categoria"><p > <?= $livro['titulo']?></p></div>

                            <!-- eDITAR -->
                            <a href="/ellen_karla/Estante-Web/Views/editar_livro.php?id= <?= $livro['id_livro']?>"><img src="../imgs/icone_editar.svg" alt="" width="30px" heigth ="30px" style="margin-right: 10px;"></a>

                            <!-- Botão deletar -->
                            
                            <!-- -funcionou-->
                            <form action = "/ellen_karla/Estante-Web/controllers/livro_del_controller.php" method="post" onsubmit = "return confirm ('Você tem certeza que quer deletar este livro?')">
                                <input type ="hidden" name="id" value = "<?= $livro['id_livro']?>">
                                <button type = "submit" class="sem_formatacao_botao"><img src="../imgs/icone_excluir.svg" alt="" width="30px" heigth ="30px" style="margin-right: 10px;"></button>
                            </form>
                            <!-- teste -->
                        </span>
                </div>
                <?php endforeach; ?>

                    <!-- Apagar -->
                 
               
              </div>  
            </div> 

        </div>

    </main> 

    <?php require_once 'rodape.php';?>