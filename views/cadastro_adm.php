<?php
require_once 'cabecalho.php';
?>
    
    <main class="centralizar_main"> <!--principal-->
        <div id="box_cadastro_adm">


<form action="/ellen_karla/Estante-Web/controllers/cadastrar_adm_controller.php" method="post" enctype="multipart/form-data">
    <!--É necessário adicionar a tag form caso o formulario for receber upload-->
    <h4>Crie sua conta</h4>
    
    <!-- Foto do perfil -->
    <h5><label class="alinha_label" for="foto_adm">Foto do perfil:</label></h5>
    <label class="foto_upload" for="foto_adm">
        <img src="../imgs/icone_upload_foto.svg" alt="Upload de foto" width="20px" height="20px">
    </label>
    <input class="foto_input" type="file" name="foto_adm" id="foto_adm" accept=".png, .jpeg">
    <!--upload de foto de perfil: aceita somente imagens png e jpg-->
    
    <!-- Campo Nome -->
    <h5><label class="alinha_label" for="name">Nome:</label></h5>
    <input type="text" name="nome_adm" id="name">

    <!-- Campo Contato-->
    <h5><label class="alinha_label" for="senha">Contato:</label></h5>
    <input type="tel" name="senha_adm" id="senha">
    
    <!-- Campo Email -->
    <h5><label class="alinha_label" for="email">Email:</label></h5>
    <input type="email" name="email_adm" id="email">
    
    <!-- Campo Senha -->
    <h5><label class="alinha_label" for="senha">Senha:</label></h5>
    <input type="password" name="senha_adm" id="senha">
    
    <!-- Botão cadastrar -->
    <button style="padding: 10px; background-color: var(--primaria); border:none; margin-top:25px;" type="submit">CRIAR CONTA</button>
</form>



            <!--lINKS INFERIORES-->
            <div class="login-link">
                <p >Já é cadastrado? </p>
                <a href="login.html">Acesse sua conta</a>
            </div>
            <!--Links de direitos de privacidade-->
            <div class="privacidade_link">
                <p >Ao seguir com o cadastro, concordo com os
                    <a href="termos_uso.html">Termos de uso</a> e <a href="politicas_privacidade.html">Politicas de privacidade</a> </p>  
            </div>

        </div>
          

    </main> 

    <?php require_once 'rodape.php';?>