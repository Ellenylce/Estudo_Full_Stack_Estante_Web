<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';


// teste
class Livros {
    // public $id;
    // public $titulo;
    // public $autor;
    // public $paginas;
    // public $sinopse;
    // public $genero;
    // public $capa;
    // public $id_usuario;
  
    public function exibirLivros() {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT * FROM livros';         
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        
            return $result;

            
                } catch (PDOException $erro) {
                        echo $erro->getMessage();
                    }
        } 
}