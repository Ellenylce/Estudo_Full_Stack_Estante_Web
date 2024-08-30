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
            <form id="formatacao_input" action="/ellen_karla/Estante-Web/controllers/login_adm_controller.php" method="post">
                <h4>ACESSO ADM</h4>
                  <!--Campo Email-->
                <h5 class="alinha_label">
                    <label for="email_adm">Email:</label>
                </h5>
                <input type="email" name="email_adm" placeholder="Digite seu email ">
                <!--Campo Senha-->
                <h5>
                    <label class="alinha_label" for="senha_adm">Senha:</label>
                </h5>
                <input type="password" name="senha_adm" placeholder="Digite a senha de acesso">
                <!--Botão de Entrar-->
                <button class="botao_entrar" type="submit">ACESSAR</button>
            </form>

                <!-- Entrar como ADM -->
                <!-- <br>
                <a href="login_adm.php">Entrar como adm</a> -->
            </div>
        </div>
    </main> 
<!-- Finaliza body -->

<?php require_once 'rodape.php';?>