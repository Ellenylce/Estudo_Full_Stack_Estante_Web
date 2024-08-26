

<?php
require_once 'cabecalho.php';
?>
    
    <main class="centralizar_main"> <!--principal-->
        <div id="box_cadastro">


            <!-- <form action="/controllers/cadastrar_usuarios_controller.php" method="post" enctype="multipart/form-data"> <--É necessário adicionar a tag form caso caso o formulario for receber upload--
                <h4>Crie sua conta</h4>
                <h5><label class="alinha_label" for="foto_perfil">Foto do perfil:</label></h5>
                <label class="foto_upload" for="foto_perfil">
                    <img src="../imgs/icone_upload_foto.svg" alt="" width="20px" height="20px">
                </label>
                <input class=" foto_input" type="file" name="foto_user" id="foto_perfil" accept=".png, .jpeg"> !--upload de foto de perfil: aceita somente imagens png e jpg--
                !--Campo Nome--
                
                <h5><label class="alinha_label" for="name">Name:</label></form></h5>
                <input type="text" name="nome_user" id="name">
                !--Campo Email--
                <h5><label class="alinha_label" for="email">Email:</label></h5>
                <input type="email" name="email_user" id="email">
                !--Campo Senha--
                <h5><label class="alinha_label" for="senha">Senha:</label></h5>
                <input type="password" name="senha_user" id="senha">
                !--botão cadastrar--
                <button style=" padding: 10px; background-color: var(--primaria); border:none; margin-top:25px;" type="submit">CRIAR CONTA</button>
            </form> -->


<form action="/ellen_karla/Estante-Web/controllers/cadastrar_usuarios_controller.php" method="post" enctype="multipart/form-data">
    <!--É necessário adicionar a tag form caso o formulario for receber upload-->
    <h4>Crie sua conta</h4>
    
    <!-- Foto do perfil -->
    <h5><label class="alinha_label" for="foto_perfil">Foto do perfil:</label></h5>
    <label class="foto_upload" for="foto_perfil">
        <img src="../imgs/icone_upload_foto.svg" alt="Upload de foto" width="20px" height="20px">
    </label>
    <input class="foto_input" type="file" name="foto_user" id="foto_perfil" accept=".png, .jpeg">
    <!--upload de foto de perfil: aceita somente imagens png e jpg-->
    
    <!-- Campo Nome -->
    <h5><label class="alinha_label" for="name">Nome:</label></h5>
    <input type="text" name="nome_user" id="name">
    
    <!-- Campo Email -->
    <h5><label class="alinha_label" for="email">Email:</label></h5>
    <input type="email" name="email_user" id="email">
    
    <!-- Campo Senha -->
    <h5><label class="alinha_label" for="senha">Senha:</label></h5>
    <input type="password" name="senha_user" id="senha">
    
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