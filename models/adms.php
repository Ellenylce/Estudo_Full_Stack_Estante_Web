<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

class Administradores {
    public $id_adm;
    public $nome_adm;
    public $contato_adm;
    public $email_adm;
    public $senha_adm;
    public $foto_adm;
    
    public function cadastrarAdm() {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO administradores (nome_adm, email_adm, contato_adm,senha_adm, foto_adm) VALUES (:nome_adm, :email_adm, :contato_adm, :senha_adm, :foto_adm)';
            
            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':nome_adm', $this->nome_adm);
            $stmt->bindValue(':email_adm', $this->email_adm);
            $stmt->bindValue(':contato_adm', $this->contato_adm);
            $stmt->bindValue(':senha_adm', $this->senha_adm);
            $stmt->bindValue(':foto_adm', $this->foto_adm);

            $stmt->execute();

        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } 

    

}