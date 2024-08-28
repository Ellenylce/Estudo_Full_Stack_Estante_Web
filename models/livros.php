<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

// class Livros {
//     public $id;
//     public $titulo;
//     public $autor;
//     public $paginas;
//     public $sinopse;
//     public $genero;
//     public $capa;
//     public $id_usuario;
    
//     public function exibirLivros() {
//         try {
//             $conn = Conexao::conectar();
//             $sql = 'SELECT * FROM livros';
            
//             $stmt = $conn->prepare($sql);

//             $stmt->bindValue(':titulo', $this->titulo);
//             $stmt->bindValue(':autor', $this->autor);
//             $stmt->bindValue(':paginas', $this->paginas);
//             $stmt->bindValue(':sinopse', $this->sinopse);
//             $stmt->bindValue(':genero', $this->genero);
//             $stmt->bindValue(':capa', $this->capa);
//             $stmt->bindValue(':id_usuario', $this->id_usuario);

//             $stmt->execute();

//         } catch (PDOException $erro) {
//             echo $erro->getMessage();
//         }
//     } 

// }

// Vai conter os livros - esse codigo funciona
// class Livros {
//     public function exibirLivros() {
//         try {
//             $conn = Conexao::conectar();
//             $sql = 'SELECT * FROM livros';
//             $stmt = $conn->prepare($sql);
//             $stmt->execute();
//             $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//             return $result;
//         } catch (PDOException $e) {
//             echo 'Error: ' . $e->getMessage();
//         }
//     }
// }

// teste
class Livros {
    public $id;
    public $titulo;
    public $autor;
    public $paginas;
    public $sinopse;
    public $genero;
    public $capa;
    public $id_usuario;
  
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