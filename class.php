<?php
include_once("banco.php");

class pedido
{
    //Atributos da classe
    private $id;
    private $nome;
    private $preco;

    //Métodos get e set
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getpreco()
    {
        return $this->preco;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setpreco($preco)
    {
        $this->preco = $preco;
    }
 
    

    // Construtor da Classe
    function __construct()
    {
        //Cria uma instâcia do banco
        $this->database = new Banco();
    }


    public function salvar()
    {
        $msg = "";
        try {
            //Conecto com o banco de dados
            $conn =  $this->database->conectar();

            //Monta o SQL
            $sql = "INSERT INTO pedidos (nome,preco) VALUES (:nome,:preco) ";

            //Prepara a consulta SQL
            $stmt = $conn->prepare($sql);

            //Passa precoes para os placeholders
            $stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $stmt->bindParam(':preco', $this->preco, PDO::PARAM_STR);

            //Realiza o INSERT
            if ($stmt->execute() === true) {
                $msg = "<div class='sucesso'>Novo produto criado com sucesso!</div>";
            }
        } catch (PDOException $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        } finally {
            return $msg;
        }
    }
    public function atualizar()
    {
        $msg = "";
        try {
            //Conecto com o banco de dados
            $conn =  $this->database->conectar();

            //Monta o SQL
            $sql = "UPDATE pedidos SET nome = :nome, preco = :preco  WHERE id=:id ";

            //Prepara a consulta SQL
            $stmt = $conn->prepare($sql);

            //Passa valores para os placeholders
            $stmt->bindParam(':nome', $this->nome, PDO::PARAM_STR);
            $stmt->bindParam(':preco', $this->preco, PDO::PARAM_STR);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

            //Realiza o UPDATE
            if ($stmt->execute() === true) {
                $msg = "<div class='sucesso'>Cliente atualizado com sucesso!</div>";
            }
        } catch (PDOException $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        } finally {
            return $msg;
        }
    }

    public function excluir()
    {
        try {
            //Conecto com o banco de dados
            $conn =  $this->database->conectar();

            //Monta o SQL
            $sql = "DELETE FROM pedidos WHERE id=:id ";

            //Prepara a consulta SQL
            $stmt = $conn->prepare($sql);

            //Passa precoes para os placeholders
            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

            //Realiza o DELETE
            if ($stmt->execute() === true) {
                $msg = "<div class='sucesso'>produto excluído com sucesso!</div>";
            }
        } catch (PDOException $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        } finally {
            return $msg;
        }
    }

    public function listar(&$msg)
    {
        $produtos = array();
        $sql = "";
        try {
            //Conecto com o banco de dados
            $conn = $this->database->conectar();

            if (!empty($this->id)) {
                //Comando SQL para buscar um produto pelo ID
                $sql = "SELECT * FROM pedidos WHERE id=:id";
            } else {
                //Comando SQL para buscar todos os produtos
                $sql = "SELECT * FROM pedidos";
            }
            //Prepara a consulta SQL
            $stmt = $conn->prepare($sql);

            //Passa precoes para os placeholders
            if (!empty($this->id)) $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

            //Realiza o SELECT
            if ($stmt->execute()) {
                // Associa cada registro a uma classe produto
                // Depois, coloca os resultados em um array
                $produtos = $stmt->fetchAll(PDO::FETCH_CLASS, "pedido");
            }

            //Retorna os produtos encontrados
            return $produtos;
        } catch (Exception $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        }
    }
}