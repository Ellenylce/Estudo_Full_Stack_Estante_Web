<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

class Usuarios {
    public $id_usuario;
    public $nome_user;
    public $email_user;
    public $senha_user;
    public $foto_user;
    
    public function cadastrarUsuario() {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO usuarios (nome_user, email_user, senha_user, foto_user) VALUES (:nome_user, :email_user, :senha_user, :foto_user)';
            
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_user', $this->nome_user);
            $stmt->bindValue(':email_user', $this->email_user);
            $stmt->bindValue(':senha_user', $this->senha_user);
            $stmt->bindValue(':foto_user', $this->foto_user);

            $stmt->execute();

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } 

    

}