<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

class Livros {
    public $id_livro;
    public $titulo;
    public $autor;
    public $sinopse;
    public $genero;
    public $capa;

// Construct
public function __construct($id = false){
    if($id){
        $this->id_livro = $id;
        $this->carregarLivro();
    }
}

public function carregarLivro(){
    $conn = Conexao::conectar();
    $sql = "SELECT * FROM livros WHERE id_livro = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id', $this->id_livro);
    $stmt->execute();
    $resultado = $stmt->fetch();

    $this->titulo = $resultado['titulo'];
    $this->autor = $resultado['autor'];
    $this->sinopse = $resultado['sinopse'];
    $this->capa = $resultado['capa'];
    $this->genero = $resultado['genero'];
}





    // Adicionar livros 
    public function adicionarLivros()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO livros (titulo, autor, sinopse, genero, capa) VALUES (:titulo, :autor, :sinopse, :genero, :capa)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':titulo', $this->titulo);
            $stmt->bindValue(':autor', $this->autor);
            $stmt->bindValue(':sinopse', $this->sinopse);
            $stmt->bindValue(':genero', $this->genero);
            $stmt->bindValue(':capa', $this->capa);

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    // Exibir Livros
    static function mostrarLivros()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT * FROM livros';
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    static function selecionarLivro($id_livro)
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT * FROM livros WHERE id_livro = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id_livro, PDO::PARAM_INT);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    // Atualizar livro
public function atualizarLivro()
{
    try {
        $conn = Conexao::conectar();
        $sql = "UPDATE livros SET titulo = :titulo, autor = :autor, sinopse = :sinopse, capa = :capa, genero = :genero WHERE id_livro = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id_livro);
        $stmt->bindValue(':titulo', $this->titulo);
        $stmt->bindValue(':autor', $this->autor);
        $stmt->bindValue(':sinopse', $this->sinopse);
        $stmt->bindValue(':capa', $this->capa);
        $stmt->bindValue(':genero', $this->genero);
        
        $stmt->execute();
       

        // return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}




// Deletar livro
        public function deletarLivro()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'DELETE FROM livros WHERE id_livro = :id';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $this->id_livro, PDO::PARAM_INT);
            $stmt->execute();

    }   catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}
//     public function editarLivro() {
//         try {
//             $conn = Conexao::conectar();
//             $sql = 'UPDATE livros SET titulo = :titulo, autor = :autor, sinopse = :sinopse, genero = :genero, capa = :capa WHERE id_livro = :id';
//             $stmt = $conn->prepare($sql);

//             $stmt->bindValue(':id', $this->id_livro);
//             $stmt->bindValue(':titulo', $this->titulo);
//             $stmt->bindValue(':autor', $this->autor);
//             $stmt->bindValue(':sinopse', $this->sinopse);
//             $stmt->bindValue(':categoria', $this->categoria);
//             $stmt->bindValue(':capa', $this->capa);
        

//             $stmt->execute();
//             // return true; // Indica sucesso

//         } catch (PDOException $erro) {
//         echo $erro->getMessage();
//         // return false; // Indica falha
//     }
// }


}
?>


