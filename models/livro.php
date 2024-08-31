<!-- Está em teste -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

class livros {
    public $id_livro;
    public $titulo;
    public $paginas;
    public $autor;
    public $sinopse;
    public $genero;
    public $capa;
 

    public function cadastrarLivros()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'INSERT INTO livros (titulo, autor, paginas, sinopse, genero, capa) VALUES (:titulo, :autor, :paginas, :sinopse, :genero, :capa)';
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':titulo', $this->titulo);
            $stmt->bindValue(':autor', $this->autor);
            $stmt->bindValue(':paginas', $this->paginas);
            $stmt->bindValue(':sinopse', $this->sinopse);
            $stmt->bindValue(':genero', $this->genero);
            $stmt->bindValue(':capa', $this->capa);

            $stmt->execute();
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    static function exibirLivros()
    {
        try {
            $conn = Conexao::conectar();
            $sql = 'SELECT id_livro, titulo, capa, autor FROM livros';
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
}
?>