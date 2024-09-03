<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

class Usuarios {
    public $id_usuario;
    public $nome_user;
    public $email_user;
    public $senha_user;
    public $foto_user;
    
    public function __construct($id = false)
    {
        if ($id) {
            $this->id_usuario = $id;
            $this->carregarUsuario();
        }
    }

    public function carregarUsuario(){
        try {
        $conn = Conexao::conectar();
        $sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id_usuario);
        $stmt->execute();
        $resultado = $stmt->fetch();
    
    
        $this->nome_user = $resultado['nome_user'];
        $this->email_user = $resultado['email_user'];
        $this->foto_user = $resultado['foto_user'];

    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
       
    }


    public function atualizarUsuario()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'UPDATE usuarios SET nome_user = :nome_user, email_user = :email_user, foto_user = :foto_user  WHERE id_usuario = :id_usuario';
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':id_usuario', $this->id_usuario);
            $stmt->bindValue(':nome_user', $this->nome_user);
            $stmt->bindValue(':email_user', $this->email_user);
            $stmt->bindValue(':foto_user', $this->foto_user);

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }





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