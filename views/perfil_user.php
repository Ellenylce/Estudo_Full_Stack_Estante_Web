<?php require_once 'cabecalho.php';

// adicionei para o editar o perfil
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/models/usuarios.php';

// $id = $_GET['id'];
// $usuario = new Usuarios ($id);
// Finalizo aqui

?>
    
    <main class="centralizar_main">
         <!--principal-->
    <!-- adicionei para editar perfil -->
    <!-- <form action="/ellen_karla/Estante-Web/controllers/usuario_edit_controller.php" method="post"> -->
        <!-- input escondido com ID -->
        <!-- <input type="hidden" name="id" value="<interrogção= $usuario->id_usuario?>"> -->
    <!-- Finaliza aqui  -->

        <div class="box_perfil">
            <div class="alinhar_coluna_esquerda">  
                <p style="margin-top: 15px;">Meu Perfil</p>
                <label  for="adicionar_foto">
                    <img class="moldura_perfil"style="width: 150px;height:150px;"src="../imgs/usuario.png" alt="" >
                    <input class="input_file" type="file" name="adicionar_foto" id="adicionar_foto" accept=".png, .jpeg">
                </label>
                    <!-- <div class="botao_container">
                        <button class="botoes_gerenciar" style="width: 40%; padding:10px; ">Adicionar</button>
                        <button class="botoes_gerenciar" style="width: 40%; padding:10px;">Editar</button>
                     </div> -->
                
            </div>
            <div class="alinhar_coluna_direita">
                <span style="margin-top:20px;" class="alinha_text_esquerda">Nome:</span>
                <div class = "alinhar_horizontalmente">
                    <!-- (editar)Nome -->
                    <input class = "input_relative"type="text" placeholder="Digite seu nome" required style="width: 80%; margin-bottom: 10px;" name="nome_user">
                    <!-- Para editar perfil usuario por acima: value ="<interrogação=$usuario->nome_user;?>" -->
                    <button class="sem_formatacao_botao bnt_absolute"><img src="../imgs/icone_editar.svg" alt="" width="30px" heigth ="30px" style="margin-right: 10px;"></button>
                </div>
                <!-- Email -->
                <span class="alinha_text_esquerda">E-mail:</span>
                <div class = "alinhar_horizontalmente">
                    <input class = "input_relative" type="email" placeholder="Digite seu email" required style="width: 80%; margin-bottom: 10px;" name="email_user" >

                    <!-- Para editar perfil usuario acima: value = "<interrogação=$usuario->email_user;?>" -->
                        
                    <button class="sem_formatacao_botao bnt_absolute"><img src="../imgs/icone_editar.svg" alt="" width="30px" heigth ="30px" style="margin-right: 10px;"></button>
                </div>
                <!-- <span class="alinha_text_esquerda">Senha:</span>
                    <input type="senha" placeholder="Digite sua senha" required style="width: 80%; margin-bottom: 10px;"> -->
                <!-- <span class="alinha_text_esquerda">Contato:</span>
                    <input type="contato" placeholder="Digite seu contato" required style="width: 80%; margin-bottom: 10px;"> -->
                    <button type = "submit" class="botao_gravar" >Atualizar</button>
            </div>
        </div>
    <!-- Adicionei para editar perfil -->
    <!-- </form>     -->
    <!-- Adicionei para editar perfil -->

    
    </main> 

    <?php require_once 'rodape.php';?>