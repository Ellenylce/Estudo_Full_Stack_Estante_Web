<?php require_once 'cabecalho.php';?>
    
    <!--BODY-->
    <?php if(isset($_COOKIE['aviso'])):?>
        <h1><?= $_COOKIE['aviso']?></h1>
        <?php
            setcookie('aviso', '', time() - 3600, '/ellen_karla/');
        ?>
    <?php endif;?>

    <main class="centralizar_main">

        <div id="box_login">
            <form id="formatacao_input" action="/ellen_karla/Estante-Web/controllers/login_controller.php" method="post">
                <h4>Acesse sua conta</h4>
                  <!--Campo Email-->
                <h5 class="alinha_label">
                    <label for="email_user">Email:</label>
                </h5>
                <input type="email" name="email_user" placeholder="Digite seu email ">
                <!--Campo Senha-->
                <h5>
                    <label class="alinha_label" for="senha_user">Senha:</label>
                </h5>
                <input type="password" name="senha_user" placeholder="Digite sua senha">
                <!--Botão de Entrar-->
                <button class="botao_entrar" type="submit">ENTRAR</button>
            </form>
            <!--Links inferiores-->
            <div class="esqueceu_senha">
                <a  href="#Esqueceu_senha.php" >Esqueceu sua senha?</a>
            </div>
            <div class="cadastro-link">
                <p >Você ainda não se cadastrou? </p>
                <a href="cadastro.php">Crie sua conta aqui</a>
                <!-- Entrar como ADM -->
                <br>
                <a href="login_acesso_adm.php">Entrar como adm</a>
            </div>
        </div>
    </main> 
<!-- Finaliza body -->

<?php require_once 'rodape.php';?>