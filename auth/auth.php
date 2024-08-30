<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';
session_start(); // Inicia uma sessão, que será utilizada para armazenar informações do usuário logado.
class Auth
{

    static function login($email_user, $senha_user)
    {
        try {
            $conn = Conexao::conectar();

            // 
            $sql = 'SELECT * FROM usuarios WHERE email_user = :email_user'; // busca um usuario com o email fornecido

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':email_user', $email_user);

            $stmt->execute();

            $resultado = $stmt->fetch();
            // var_dump($resultado);
            // exit();

            //Verifica se o usuario existe no Banco de dados e se a senha está correta
            if (!empty($resultado) && password_verify($senha_user, $resultado['senha_user'])) {
                $_SESSION['id_usuario'] = $resultado['id_usuario'];
                $_SESSION['nome_user'] = $resultado['nome_user'];
                $_SESSION['email_user'] = $resultado['email_user'];
               
                header('Location: /ellen_karla/Estante-Web/index.php');
                exit();
            } else {
                setcookie('aviso', 'certifique-se se seu E-mail ou a Senha estão corretos!!!', time() + 3600, '/ellen_karla/');
                header('Location: /ellen_karla/Estante-Web/views/login.php');
                exit();
            }

            // Verifica se é uma clínica
            // $sqlClinica = 'SELECT * FROM clinicas WHERE email = :email';

            // $stmtClinica = $conn->prepare($sqlClinica);
            // $stmtClinica->bindValue(':email', $email);

            // $stmtClinica->execute();
            
            // $resultadoClinica = $stmtClinica->fetch();

            // if (!empty($resultadoClinica) && password_verify($senha, $resultadoClinica['senha'])) {
            //     $_SESSION['id_clinica'] = $resultadoClinica['id_clinica'];
            //     $_SESSION['razao_clinica'] = $resultadoClinica['razao_clinica'];
            //     $_SESSION['nome_fantasia'] = $resultadoClinica['nome_fantasia'];
            //     $_SESSION['cnpj'] = $resultadoClinica['cnpj'];
            //     $_SESSION['email'] = $resultadoClinica['email'];

            //     header('Location: /doa_vida/index.php');
            //     exit();
            // }  else {
            //     setcookie('aviso', 'Você errou o E-mail ou a Senha!!!', time() + 3600, '/doa_vida/');
            //     header('Location: /doa_vida/views/login.php');
            //     exit();
            // }

        } catch (PDOException $erro) {

            echo $erro->getMessage();
        }
    }

    static function logout()
    {
        session_unset();
        session_destroy();
        header('Location: /ellen_karla/Estante-Web/views/login.php');
        exit();
    }

    static function estarLogado()
    {
        if (isset($_SESSION['nome_user'])) {
            return true;
        }

        // if (isset($_SESSION['razao_clinica'])) {
        //     return true;
        // } else {
        //     return false;
        // }  
    }


    // Verifica se é ADM
    function isAdministrador() {
        // Verificar se o usuário está logado e se as credenciais são de administrador
        if (isset($_SESSION['email_user']) && $_SESSION['email_user'] === 'adm@gmail.com' && $_SESSION['senha_user'] === 'adm') {
            return true;
        }
        return false;
    }
     
    // Verificar se o usuário é administrador
    // $isAdmin = isAdministrador();
}  