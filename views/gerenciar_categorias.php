<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/ellen_karla/Estante-Web/models/categoria.php';
$categorias = Categoria:: listarCategoria();

?>

<?php require_once 'cabecalho.php';?>
    
    <main class="centralizar_main"> <!--principal-->

        
        <div class="box_gerenciar_categorias">
            <div class="box_titulo">
                <div class="alinhar_esquerda">
                    <div>
                        <!-- Aqui inseri o ícone de configuração -->
                        <img src="../imgs/icone_config.svg" alt="" width="30px" heigth ="30px" style="margin-right: 5px;">
                    </div>
                    <div class="titulo_gerenciar_categorias">
                        <h3>Gerenciar Categorias</h3>
                    </div>
                </div>
                <!-- <button class="botao_adicionar">Adicionar</button>-->
                <button class="botao_adicionar"><a href ="adicionar_categorias.php" class = "tira_decoration">Adicionar</a></button>
            </div>
            <!-- body grenciar categorias -->
            <div class="alinhar_vertical">
             


                    <!-- Corrrigir esse codigo depois -->

                <?php foreach($categorias as $categoria): ?>
                <div class="alinhar_categorias_adicionadas">
                        <span class="categorias_adicionadas">
                            <div class = "categoria"><p > <?= $categoria['nome_categoria']?></p></div>

                            <!-- eDITAR -->
                            <a href="/ellen_karla/Estante-Web/Views/editar_categoria.php?id= <?= $categoria['id_categoria']?>"><img src="../imgs/icone_editar.svg" alt="" width="30px" heigth ="30px" style="margin-right: 10px;"></a>

                            <!-- Botão deletar -->
                            
                            <!-- -funcionou-->
                            <form action = "/ellen_karla/Estante-Web/controllers/categoria_del_controller.php" method="post" onsubmit = "return confirm ('Você tem certeza que quer deletar esta categoria?')">
                                <input type ="hidden" name="id" value = "<?= $categoria['id_categoria']?>">
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