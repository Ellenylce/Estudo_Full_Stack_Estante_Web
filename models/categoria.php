<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/configs/conexao.php';

class Categoria {
    public $id_categoria;
    public $nome_categoria;


    // Construct
    public function __construct($id = false){
        if($id){
            $this->id_categoria = $id;
            $this->carregar();
        }
    }

    public function carregar(){
        $conn = Conexao::conectar();
        $sql = "SELECT * FROM categorias WHERE id_categoria = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id_categoria);
        $stmt->execute();
        $resultado = $stmt->fetch();

        $this->nome_categoria = $resultado['nome_categoria'];
    }
// Adicionar Categorias (Está funcionando)
   public function adicionarCategoria()
{
    try {
        $conn = Conexao::conectar();
        $sql = 'INSERT INTO categorias (nome_categoria) VALUES (:nome_categoria)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':nome_categoria', $this->nome_categoria);
        $stmt->execute();

    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}


// static function selecionarCategoria($id_categoria)
// {
//     try {
//         $conn = Conexao::conectar();
//         $sql = 'SELECT * FROM categorias WHERE id_categoria = :id';
//         $stmt = $conn->prepare($sql);
//         $stmt->bindValue(':id', $id_categoria, PDO::PARAM_INT);

//         $stmt->execute();

//         return $stmt->fetch(PDO::FETCH_ASSOC);
//     } catch (PDOException $erro) {
//         echo $erro->getMessage();
//     }
// }

// Listar categorias (funcionou)
static function listarCategoria()
{
    try {
        $conn = Conexao::conectar();
        $sql = 'SELECT * FROM categorias';
        $stmt = $conn->prepare($sql);

        $stmt->execute();

        // return $stmt->fetch(PDO::FETCH_ASSOC);
        $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // var_dump( $categorias);
        return $categorias;

        var_dump ($stmt);
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}

// Atualizar
public function atualizarCategoria()
{
    try {
        $conn = Conexao::conectar();
        $sql = "UPDATE categorias SET nome_categoria = :nome WHERE id_categoria = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':nome', $this->nome_categoria);
        $stmt->bindValue(':id', $this->id_categoria);
        $stmt->execute();
       

        // return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}



// Deletar categoria
public function deletarCategoria()
{
    try {
        $conn = Conexao::conectar();
        $sql = "DELETE FROM categorias WHERE id_categoria = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $this->id_categoria, PDO::PARAM_INT);
        $stmt->execute();
       

        // return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo $erro->getMessage();
    }
}



}