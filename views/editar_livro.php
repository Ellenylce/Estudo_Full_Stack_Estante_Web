

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/livros.php';


    $id = $_GET['id'];
    $livro = new Livros ($id);
?>

<?php require_once 'cabecalho_adm.php';?>
    
    <main class="centralizar_main"> <!--principal-->

        <!-- O container que vai conter -->
    <div class ="box_adm">
        <div class="titulo">
            <h2>Editar Livro</h2>
            <span class="icone"><img src="../imgs/icone_retroceder.svg" alt="" width="30px" heigth ="30px"></span>
        </div>
 <!-- adicionei form -->
    <form action="/ellen_karla/Estante-Web/controllers/livro_edit_controller.php" method="post">
        <!-- input escondido com ID -->
        <input type="hidden" name="id" value="<?= $livro->id_livro?>">

    <!-- finaliza adição do form -->
        <div class="form_adm_livro">
            <div class ="upload_livro">
                    <!-- <input type="file" accept="image/*" required> -->
                    <!-- <label id="livro_upload" for="livro_upload"> -->
                    <!-- <img src="../imgs/icone_upload_foto.svg" alt="" width="20px" height="20px">Adicionar Livro -->
                    <!-- </label> -->

                    <!-- Imagem -->
                    <!-- <label class="livro_input" for="capa">
                        <img src="../imgs/icone_upload_foto.svg" alt="" width="20px" height="20px">Editar Livro
                    </label>
                    <input type="file" name="capa" id="capa" accept=".png, .jpeg"> -->
                    <!-- Imagem finaliza -->

                    <!-- teste -->
                    <label class="livro_input" for="capa">
                        <img src="data:image; base64, <?= base64_encode($livro->capa) ?>" alt="" width="100px" height="100px">Editar Livro
                    </label>
                    <input type="file" name="capa" id="capa" accept=".png, .jpeg">
                    <!-- finaliza teste -->
            </div>
            <div class="input">
                    <input type="text" placeholder="Digite o título" required style="width: 95%; margin-bottom: 10px;" name="titulo" id = "titulo" value = "<?=$livro->titulo;?>">

                    <input type="text" placeholder="Digite o autor" required style="width: 95%; margin-bottom: 10px;" name = "autor" value = "<?=$livro->autor;?>">
                    <!-- Uma caixa para selecionar as categorias -->
                    <select required style="width: 95%" name = "genero">
                        <option value="" disabled selected>Categoria</option>
                        <option value="Romance">Romance</option>
                        <option value="Terror">Terror</option>
                        <option value="Religioso">Religioso</option>
                        <option value="Infantil">Infantil</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Educação">Livros Educativos</option>
                 </select>
            </div>
        </div>

        <!-- Sinopse -->
        <div class="sinopse">
            <textarea rows="7" placeholder="Digite a sinopse" required style="width:100%" name = "sinopse"><?=$livro->sinopse;?></textarea>
        </div>
        <!-- Bootões de ENVIAR e APAGAR -->
        <div class="buttoes">
            <button class="botao" type="submit">Salvar</button>
            <!-- <button class="botao" type="reset">Deletar</button> -->
        </div>
    </div>
    </form>      
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