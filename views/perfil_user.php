<?php require_once 'cabecalho.php';?>
    
    <main class="centralizar_main"> <!--principal-->
        <div class="box_perfil">
            <div class="alinhar_coluna_esquerda">  
                <p style="margin-top: 15px;">Meu Perfil</p>
                <label  for="adicionar_foto">
                    <img class="moldura_perfil"style="width: 150px;height:150px;"src="../imgs/usuario.png" alt="" >
                    <input class="input_file" type="file" name="adicionar_foto" id="adicionar_foto" accept=".png, .jpeg">
                </label>
                    <div class="botao_container">
                        <button class="botoes_gerenciar" style="width: 40%; padding:10px; ">Adicionar</button>
                        <button class="botoes_gerenciar" style="width: 40%; padding:10px;">Editar</button>
                     </div>
                
            </div>
            <div class="alinhar_coluna_direita">
                <span style="margin-top:20px;" class="alinha_text_esquerda">Nome:</span>
                <div class = "alinhar_horizontalmente">
                    <input class = "input_relative"type="text" placeholder="Digite seu nome" required style="width: 80%; margin-bottom: 10px;" ><button class="sem_formatacao_botao bnt_absolute"><img src="../imgs/icone_editar.svg" alt="" width="30px" heigth ="30px" style="margin-right: 10px;"></button>
                </div>
                <span class="alinha_text_esquerda">E-mail:</span>
                <div class = "alinhar_horizontalmente">
                    <input class = "input_relative" type="email" placeholder="Digite seu email" required style="width: 80%; margin-bottom: 10px;">
                    <button class="sem_formatacao_botao bnt_absolute"><img src="../imgs/icone_editar.svg" alt="" width="30px" heigth ="30px" style="margin-right: 10px;"></button>
                </div>
                <!-- <span class="alinha_text_esquerda">Senha:</span>
                    <input type="senha" placeholder="Digite sua senha" required style="width: 80%; margin-bottom: 10px;"> -->
                <!-- <span class="alinha_text_esquerda">Contato:</span>
                    <input type="contato" placeholder="Digite seu contato" required style="width: 80%; margin-bottom: 10px;"> -->
                    <button class="botao_gravar" >Salvar</button>
            </div>
        </div>
        

    
    </main> 

    <?php require_once 'rodape.php';?>