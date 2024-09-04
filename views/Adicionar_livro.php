<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/categoria.php';

    $categorias = Categoria::listarCategoria();
?>


<?php require_once 'cabecalho_adm.php';?>
    
    <main class="centralizar_main"> <!--principal-->

        <!-- O container que vai conter -->
    <div class ="box_adm">

  
        <div class="titulo">
            <h2>Adicionar Livro</h2>
            <span class="icone"><a href="/ellen_karla/Estante-Web/views/gerenciar_livros.php"><img src="../imgs/icone_retroceder.svg" alt="" width="30px" heigth ="30px"></a></span>
        </div>

                <!-- Adicionar Livro -->
                <!-- adicionei form -->
        <form class = "centralizar_add_categoria" action = "/ellen_karla/Estante-Web/controllers/livro_controller.php" method = "post"> 
        <!-- pode apagar -->

            <div class="form_adm_livro">
                <div class ="upload_livro">
                    <!-- <input type="file" accept="image/*" required> -->
                    <!-- <label id="livro_upload" for="livro_upload"> -->
                    <!-- <img src="../imgs/icone_upload_foto.svg" alt="" width="20px" height="20px">Adicionar Livro -->
                    <!-- </label> -->
                    <label class="livro_input" for="capa">
                        <img src="../imgs/icone_upload_foto.svg" alt="" width="20px" height="20px">Adicionar Livro
                    </label>
                    <input type="file" name="capa" id="capa" accept=".png, .jpeg">

                </div>
                <div class="input">
                    <input type="text" placeholder="Digite o título" required style="width: 95%; margin-bottom: 10px;" name = "titulo">
                    <input type="text" placeholder="Digite o autor" required style="width: 95%; margin-bottom: 10px;" name = "autor">

                    <!-- Uma caixa para selecionar as categorias -->

                    <!-- <select required style="width: 95%" name="genero">
                        <option value="" disabled selected>Categoria</option>
                        <option value="Romance">Romance</option>
                        <option value="Terror">Terror</option>
                        <option value="Religioso">Religioso</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Educação">Livros Educativos</option>
                    </select> -->

                    <!-- funcionou selecionr categoria -->
                    <select required style="width: 95%" name="genero">
                        <option value="" disabled selected>Categoria</option>
                        <?php foreach ($categorias as $categoria): ?>
                            <option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nome_categoria'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                </div>
            </div>

        <!-- Sinopse -->
            <div class="sinopse">
                <textarea rows="7" placeholder="Digite a sinopse" required style="width:100%" name = "sinopse"></textarea>
            </div>
        <!-- Bootões de ENVIAR e APAGAR -->
            <div class="buttoes">
                <button class="botao" type="submit">Salvar</button>
                <!-- <button  class="botao" type="reset">Deletar</button> -->
            </div>

        </form>
       
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