<?php require_once 'cabecalho.php';?>
    
    <!--BODY-->
    <main class="centralizar_main">

        <div id="box_login">
            <form id="formatacao_input">
                <h4>Acesse sua conta</h4>
                  <!--Campo Email-->
                <h5 class="alinha_label">
                    <label for="email">Email:</label>
                </h5>
                <input type="email"  name="email" id="email" placeholder="Digite seu email ">
                <!--Campo Senha-->
                <h5>
                    <label class="alinha_label" for="senha">Senha:</label>
                </h5>
                <input type="password"  name="senha" id="senha" placeholder="Digite sua senha">
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
            </div>
        </div>
    </main> 
<!-- Finaliza body -->

<?php require_once 'rodape.php';?>