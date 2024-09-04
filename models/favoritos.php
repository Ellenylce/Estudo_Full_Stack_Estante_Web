<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

class Favorito
{
    public $id_livro_favorito;
    public $id_usuario;
    public $id_livro;

// adicionei
public function __construct($id = false){
    if($id){
        $this->id_livro_favorito = $id;
        
    }
}



    public function cadastrarLivroFavorito()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO favoritos (id_usuario, id_livro) VALUES (:id_usuario, :id_livro)';

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id_usuario', $this->id_usuario);
            $stmt->bindValue(':id_livro', $this->id_livro);

            $stmt->execute();

            return $conn->lastInsertId();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public static function listarLivroFavorito($id_usuario)
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT * FROM livros l INNER JOIN favoritos f ON l.id_livro = f.id_livro WHERE f.id_usuario = :id_usuario';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id_usuario', $id_usuario);
            $stmt->execute();

            $resultado = $stmt->fetchAll();
            return ($resultado);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public function deletarLivroFavorito()
{
    try {
        $conn = Conexao::conectar();
        $sql = 'DELETE FROM favoritos WHERE id_livro_favorito = :id';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this-> id_livro_favorito);

        $stmt->execute();

        return true;
    } catch (PDOException $erro) {
        echo $erro->getMessage();
        return false;
    }
}
}